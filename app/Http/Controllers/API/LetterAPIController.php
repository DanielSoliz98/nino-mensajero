<?php

namespace App\Http\Controllers\API;

use App\Letter;
use App\Http\Controllers\API\APIBaseController as APIBaseController;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;

class LetterAPIController extends APIBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letters = Letter::all();
        return $this->sendResponse($letters->toArray(), "Cartas recuperadas con exito");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'content' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Contenido requerido', $validator->errors());       
        }
        $letter = new Letter;
        $letter->content = $input['content'];
        $letter->save();
        return $this->sendResponse($letter->toArray(), 'Carta enviada exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
