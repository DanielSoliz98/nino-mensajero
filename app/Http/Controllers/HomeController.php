<?php

namespace App\Http\Controllers;

use App\Letter; 
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Auth;

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
        $position = Location::get($letter->ip_address);
        $information = $letter->generatedInformations()->where('user_id', Auth::user()->id)->first();
        return view('users.letter', compact('letter', 'position', 'information'));
    }

    /**
     * View for unautorized.
     */
    public function forbidden()
    {
        return view('users.403');
    }
}
