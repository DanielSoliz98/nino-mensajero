<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Specialist;
use App\User;

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
     * Return profile view for Personal.
     */
    public function myProfile()
    {
        $queryPersProfile = DB::table('specialists')->select('specialists.*')->where('id', '=', Auth::user()->id)->first();
        return view('users.personal.profile', compact('queryPersProfile'));
    }

    /**
     * Return update profile form to Personal.
     */
    public function updateProfileView()
    {
        $profile = DB::table('users')
            ->join('user_has_roles', 'users.id', '=', 'user_has_roles.user_id')
            ->join('roles', 'user_has_roles.role_id', '=', 'roles.id')
            ->leftJoin('specialists', 'users.id', '=', 'specialists.id')
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
            'ci' => 'required|max:10',
            'phone' => 'required|max:8',
            'profession' => 'required|array|min:1',
            'profession.*' => 'required|string|distinct|max:30',
            'degree' => 'required|string',
            'specialties' => 'required|array|min:1',
            'specialties.*' => 'required|string|distinct|max:30'
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
        $user = User::find(Auth::user()->id);
        $user->full_name = $data['full_name'];
        $user->save();

        $specialist = Specialist::find(Auth::user()->id);
        if ($specialist) {
            $specialist->ci = $data['ci'];
            $specialist->phone = $data['phone'];
            $specialist->degree = $data['degree'];
            $specialist->profession = implode(', ', array_values($data['profession']));
            $specialist->specialties = implode(', ', array_values($data['specialties']));
            $specialist->save();
        } else {
            $specialist = Specialist::create([
                'id' => Auth::user()->id,
                'ci' => $data['ci'],
                'phone' => $data['phone'],
                'degree' => $data['degree'],
                'profession' => implode(', ', array_values($data['profession'])),
                'specialties' => implode(', ', array_values($data['specialties']))
            ]);
        }
        return $specialist;
    }
    /**
     * Save the profile of a Personal.
     */
    public function updateProfile(Request $request)
    {
        $this->validatorProfile($request->all())->validate();

        $specialist = $this->update($request->all());

        return redirect('/personal/my-profile')->with('success', 'Perfil actualizado');
    }
}
