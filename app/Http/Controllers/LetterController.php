<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letters = \App\Letter::all();
        return $letters;
    }

    /**
     * Show the view for write a letter.
     *
     * @return letter.blade.php view
     */
    public function create()
    {
        return view('letter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:20000'
        ]);
        $letter = new App\Letter();
        $letter->content = $request->content;
        $letter->ip_address = $request->getClientIp();
        $letter->save();
        return back()->with('mensaje', 'Gracias amiguit@. Tu carta fue enviada al Niño Mensajero.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
