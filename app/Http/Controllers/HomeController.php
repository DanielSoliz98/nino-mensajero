<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['createHomeChildren', 'pageInfo']);
    }
    /**
     * Show the home view.
     * @return home.blade.php view
     */
    public function createHomeChildren()
    {
        return view('home.welcome');
    }

    public function createHomeUsers()
    {
        return view('users.home');
    }

    public function pageInfo()
    {
        return view('home.page');
    }
}
