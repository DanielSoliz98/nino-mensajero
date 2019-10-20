<?php

namespace App\Http\Controllers;

use App\Letter;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function letters()
    {
        $letters = Letter::orderBy('created_at', 'desc')
                        ->with(['images' => function ($query) {
                            $query->orderBy('created_at', 'desc');
                        }])->paginate(10);
        return view('users.personal.letters', compact('letters'));
    }

    public function getLetter($id)
    {
        $letter = Letter::findOrFail($id);
        $images = Letter::find($id)->images;
        $letter->images = $images;
        return view('users.personal.letter', compact('letter'));
    }
}
