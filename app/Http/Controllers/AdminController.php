<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function personal()
    {
        return view('users.admin.personal-information');
    }

}
