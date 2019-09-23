<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the home view.
     * @return home.blade.php view
     */
    public function create(){
        return view('home');
    }
}
