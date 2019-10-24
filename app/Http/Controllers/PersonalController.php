<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{
    /**
     * Personal controller require authentication of a personal.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'isPersonal']);
    }
    
    /**
     * 
     */
    public function myProfile()
    {
        $personal = Auth::user();
        $queryPersProfile = DB::table('specialists')->select('specialists.*')->where('user_id', '=', $personal->id)->get();
        return view('users.admin.profile', compact('personal', 'queryPersProfile'));
    }

    /**
     * 
     */
    public function updateProfileView()
    { 
        $profile = DB::table('users')
                    ->join('user_has_roles', 'users.id', '=', 'user_has_roles.user_id')
                    ->join('roles', 'user_has_roles.role_id', '=', 'roles.id')
                    ->leftJoin('specialists', 'users.id', '=', 'specialists.user_id')
                    ->select('full_name', 'email', 'ci', 'phone', 'profession', 'degree', 'specialties')
                    ->where('users.id', Auth::user()->id)
                    ->orderBy('full_name', 'desc')
                    ->get();
        return view('users.personal.update-profile', compact('profile'));

    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validatorProfile(array $data)
    {
        return Validator::make($data, [
            'full_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function update(array $data)
    {
        $user = User::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        $user->assignRole('personal');
        return $user;
    }
    /**
     * 
     */
    public function updateProfile(Request $request)
    {
        $this->validatorProfile($request->all())->validate();

        event(new Registered($user = $this->update($request->all())));

        return redirect('/personal/my-profile')->with('success', 'Perfil Profesional Actualizado');
    }
}
