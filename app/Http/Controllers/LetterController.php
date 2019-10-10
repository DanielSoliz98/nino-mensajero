<?php

namespace App\Http\Controllers;

use App\Letter;
use App\Image;
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
        $letters = Letter::with(['images' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])->get();
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

        $letter = Letter::create([
            'content' => $request->content,
            'ip_address' => $request->getClientIp()
        ]);

        $path = public_path().'/storage/';
        $files = $request->file('file');

        if($files != NULL){
            foreach($files as $file){
                $filename = time().'_'.$file->getClientOriginalName();
                $file->move($path, $filename);
                $letter->images()->create(['filename' => $filename]);
            }
            $letter->save();
        }
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
