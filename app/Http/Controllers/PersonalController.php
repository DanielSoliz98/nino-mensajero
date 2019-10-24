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
        $this->middleware(['auth','isPersonal']);
    }

    public function myProfile(){
        $personal = Auth::user();
        $queryPersProfile = DB::table('specialists')->select('specialists.*')->where('user_id', '=', $personal->id)->get();
        return view('users.admin.profile', compact('personal', 'queryPersProfile'));
    }
}
