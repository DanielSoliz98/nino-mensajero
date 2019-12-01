<?php

namespace App\Http\Controllers;

use App\GeneratedInformation;
use App\Letter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class InformationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required|max:20000'
        ]);

        if ($validator->fails()) {
            return back()->with('error', 'La informacion generada no puede estar vacia.');
        }

        $information = GeneratedInformation::create([
            'content' => $request->content,
            'letter_id' =>  $request->letter_id,
            'user_id' => Auth::user()->id,
        ]);
        $information->save();
        return redirect()->route('user.letter.read', ['id' => $information->letter_id])
            ->with('success', 'Información generada guardada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $letter = Letter::find($id);
        return view('users.information', compact('letter'));
    }
}
