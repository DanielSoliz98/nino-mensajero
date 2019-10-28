<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phpml\Classification\NaiveBayes;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function funct(){
        // $samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];'
        $samples = [['hola', 'esta', 'es','carta'], ['ayuda', 'es', 'una','prueba'], ['nada','de','nada','ayuda']];
        // $samples = [["hola","esta","ayuda","carta"], ["esta","es","una","prueba"], ["nada","de","nada","ayuda"]];
        $labels = ['a', 'b', 'c'];
        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);
        //dd($classifier);
        // echo $classifier->predict([2,3]);
        echo $classifier->predict(['ayuda','da','addyuda','ad']);
    }

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
    {
        //
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

    public function seek(){
        $letters = DB::table('letters')->select('id','content')->get();
        /*$letters = DB::table('letters')
                    ->join('letters_analysis', 'letters.id', '=', 'letters_analysis.letter_id')
                    ->join('types_letters', 'letters_analysis.type_letter_id', '=', 'types_letters.id')
                    ->select('letters.id','content', 'ip_address', 'types_letters.name as type', 'urgency')
                    ->get();
        echo $letters,"<br/>"; 
        $cantcartas = count($letters);*/

        $blacklist = array("ayuda", "auxilio","peligroso","golpea","pega","lastima","pelean","golpe","peligro");
        foreach ( $letters as $letter ) {
            $cartas3 = $letter->content;
            $strlow = strtolower($cartas3); 
            $quit = preg_replace('/[^a-zA-Z0-9]/', " ", $strlow); 
            $tok = strtok ($quit, " \n\t ");
            // echo "tok= $tok<br>";
            echo "<br>",$letter->content,"<br>";
            while ( $tok !== false ) {
                echo "Token = $tok <br />";
                if ( in_array($tok, $blacklist) ) {
                    $flag = true;
                    $identif = $letter->id;
                    $tipo = "Urgente";
                    echo " - ALERTA!! ID: ",$identif,"<br>";
                } else {
                    $flag = false;
                    $identif = $letter->id;
                    $tipo = "Normal";
                    echo " - NORMAL<br>";
                }
                $tok = strtok(" \n\t ");
            }
        }
        return view('users.content', compact('letters', 'blacklist','flag', 'identif','tipo', 'tok'));
    }
}
