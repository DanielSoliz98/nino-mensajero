<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Letter;

class HomeController extends Controller
{
    /**
     * Routes require Authentication.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['createHomeChildren', 'pageInfo']);
    }

    /**
     * Show the home view.
     * @return welcome.blade.php view
     */
    public function createHomeChildren()
    {
        return view('home.welcome');
    }

    /**
     * Show view with information of Nino Mensajero
     */
    public function pageInfo()
    {
        return view('home.page');
    }

    /**
     * Show view of home for Users, letters from kids.
     */
    public function createHomeUsers()
    {
        $letters = Letter::orderBy('created_at', 'desc')
            ->with(['images' => function ($query) {
                $query->orderBy('created_at', 'desc');
            }])
            ->with('typeLetter')
            ->paginate(10);
        return view('users.home', compact('letters'));
    }

    /**
     * Show view of specific full letter.
     */
    public function getLetter($id)
    {
        $letter = Letter::find($id);
        return view('users.letter', compact('letter'));
    }

    /**
     * View for unautorized.
     */
    public function forbidden()
    {
        return view('users.403');
    }
}
