<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personals = App\User::all()->sortBy('full_name');
        return view('admin.personal', compact('personals'));
    }

    // public function showspec(){
    //     $persona = App\User::all()->toArray();
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
=======
class AdminController extends Controller
{
    public function personal()
>>>>>>> d3cb1c1e2249cc8689f2e74dbb3b101c934c74a9
    {
        return view('users.admin.personal-information');
    }

<<<<<<< HEAD
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

    public function profiles(){
        $specialists = App\Specialist::all()->sortBy('profession');
        return view('admin.profiles', compact('specialists', 'userName'));
    }

    public function profile($personal){
        $personals = App\User::findOrFail($personal);
        $queryPersProfile = DB::table('specialists')->select('specialists.*')->where('user_id', '=', $personal)->get();
        return view('admin.profile', compact('personals', 'queryPersProfile'));
    }
=======
>>>>>>> d3cb1c1e2249cc8689f2e74dbb3b101c934c74a9
}
