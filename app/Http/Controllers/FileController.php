<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function store(Request $request)
    {
        $path = public_path().'/storage/';
        $files = $request->file('file');
        foreach($files as $file){
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move($path, $fileName);
        }
    }

    public function index(){
        return view('form');
    }
}