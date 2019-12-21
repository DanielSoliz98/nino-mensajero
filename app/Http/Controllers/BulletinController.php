<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Bulletin;

class BulletinController extends Controller
{
    /**
     * Bulletin controller require authentication of a Admin.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }

    /**
     * 
     */
    public function registerView()
    {
        return view('users.admin.register-bulletin');
    }

    /**
     * 
     */
    public function register(Request $request)
    {
        $this->validatorBulletin($request->all())->validate();

        $bulletin = $this->create($request->all());

        return redirect('/home')->with('success', 'Boletin registrado exitosamente.');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validatorBulletin(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:200',
            'publication_date' => 'required|date'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $bulletin = Bulletin::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'publication_date' => $data['publication_date'],
        ]);

        $bulletin->save();

        return $bulletin;
    }
}
