<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function letters()
    {
        return view('users.personal.letters');
    }
}
