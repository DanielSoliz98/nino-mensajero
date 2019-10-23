<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\Specialist;

class AdminController extends Controller
{
    /**
     * Admin controller require authentication of a Admin.
     */
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }
    /**
     *  Return view of Personal for admin.
     */
    public function personal()
    {
        $personals = User::all()->sortBy('full_name');
        return view('users.admin.personal-information', compact('personals'));
    }

    public function profiles(){
        $specialists = Specialist::all()->sortBy('profession');
        return view('users.admin.profiles', compact('specialists', 'userName'));
    }

    public function profile($personal){
        $personals = User::findOrFail($personal);
        $queryPersProfile = DB::table('specialists')->select('specialists.*')->where('user_id', '=', $personal)->get();
        return view('users.admin.profile', compact('personals', 'queryPersProfile'));
    }
}
