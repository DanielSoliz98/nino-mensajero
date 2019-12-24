<?php

namespace App\Http\Controllers;

use App\GeneratedInformation;
use App\Letter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            return back()->with('error', 'La información generada no puede estar vacía.');
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

    public function share()
    {
        $informations = Letter::has('generatedInformations')
            ->orderBy('id')
            ->paginate(10);
        return view('users.generated-information',compact('informations'));
    }

    public function trace($letter)
    { 
        $letter = Letter::find($letter);
        $specificInfos = DB::table('generated_informations')
            ->join('letters', 'letters.id', '=', 'generated_informations.letter_id')
            ->leftJoin('users', 'users.id', '=', 'generated_informations.user_id')
            ->select('generated_informations.created_at', 'generated_informations.id', 
                    'generated_informations.content as continf', 'letters.content as contletter', 
                    'letters.id as lettid', 'full_name')
            ->where('letter_id', '=', $letter->id)
            ->get();
        return view('users.information-per-letter', compact('specificInfos','letter'));
    }
}