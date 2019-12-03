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


    public function share(){ // $info 1ro penult
        // $info = GeneratedInformation::findOrFail($info);
        // $queryContent = DB::table('generated_informations')->select('generated_informations.*')->where('id', '=', $info->id)->first();
        // return view('users.generated-information', compact('info', 'queryContent'));

        // $personal = User::findOrFail($personal);
        // $queryPersProfile = DB::table('specialists')->select('specialists.*')->where('id', '=', $personal->id)->first();
        // return view('users.admin.personal-profile', compact('personal', 'queryPersProfile'));

        /*
        $informations = DB::table('users')
            ->join('user_has_roles', 'users.id', '=', 'user_has_roles.user_id')
            ->join('roles', 'user_has_roles.role_id', '=', 'roles.id')
            ->leftJoin('specialists', 'users.id', '=', 'specialists.id')
            ->select('users.id', 'full_name', 'email', 'ci', 'roles.name as role', 'profession')
            ->where('roles.name', '<>', 'admin')
            ->orderBy('full_name', 'asc')
            ->get();*/
        $informations = DB::table('generated_informations')
            ->join('letters', 'letters.id', '=', 'generated_informations.letter_id')
            //->join('bulletins', 'bulletins.id', '=', 'generated_informations.bulletin_id')
            ->leftJoin('users', 'users.id', '=', 'generated_informations.user_id')
            ->select('generated_informations.id', 'generated_informations.content as continf', 'letters.content as contletter', 'letters.id as lettid', 'full_name')
            // ->select('generated_informations.id', 'generated_informations.content', 'letters.content as contletter', 'full_name', 'name', 'publication_date')
            
            //->where('roles.name', '<>', 'admin')
            //->orderBy('full_name', 'asc')
            ->get();
        return view('users.generated-information', compact('informations'));
    }
}
