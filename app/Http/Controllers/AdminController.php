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
        //$personals = User::all()->sortBy('full_name');
        //return view('users.admin.personal-information', compact('personals'));
        $personals = DB::table('users')
                    ->join('user_has_roles', 'users.id', '=', 'user_has_roles.user_id')
                    ->join('roles', 'user_has_roles.role_id', '=', 'roles.id')
                    ->leftJoin('specialists', 'users.id', '=', 'specialists.user_id')
                    ->select('users.id', 'full_name', 'email', 'ci', 'roles.name as role', 'profession')
                    ->where('roles.name', '<>', 'admin')
                    ->orderBy('full_name', 'desc')
                    ->get();
        return view('users.admin.personal-information', compact('personals'));
    }

    public function profile($personal){
        $personal = User::findOrFail($personal);
        $queryPersProfile = DB::table('specialists')->select('specialists.*')->where('user_id', '=', $personal)->get();
        return view('users.admin.profile', compact('personal', 'queryPersProfile'));
    }
}
