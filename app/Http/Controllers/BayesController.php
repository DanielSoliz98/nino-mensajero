<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phpml\Classification\KNearestNeighbors;
use Phpml\Classification\NaiveBayes;
use Illuminate\Support\Facades\DB;

use Funivan\PhpTokenizer\Collection;
use PhpParser\Node\Expr\BinaryOp\Concat;

class BayesController extends Controller
{
    public function index()
    {
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
    
    public function funct(){
        $letters = DB::table('letters')->select('content')->get();
        echo $letters,"<br/>"; 
        $cantcartas = count($letters);

        echo "<br />CARTAS DENTRO DE ARREGLOS: ";echo "<br />";
        $rest = substr($letters, 1 ,-1);    // quita los caracteres de los extremos"
        // echo $rest, "<br /><br />";
        $cartas1 = str_ireplace("{", "[", $rest);
        // echo $cont1,"<br />";
        $cartas2[''] = str_ireplace("}", "]", $cartas1);
        // echo $cont2,"<br />";
        echo $cartas2[''];

        echo "<br><br>CONTENIDO DE CARTAS: ";echo "<br>";
        foreach ($letters as $letter) {
            $cartas3 = $letter->content;
            echo $cartas3, "<br>";
        }

        echo "<br>CONTENIDO DE CARTAS 2: ";echo "<br>";
        foreach ($letters as $letter) {
            $cartas3 = $letter->content;
            $tok = strtok($cartas3, " \n\t ");
            //echo $tok;
            echo $letter->content,"<br>";
            while ($tok !== false) {
                echo "TOKEN= $tok<br />";
                $tok = strtok(" \n\t ");
            }
        }

        echo "<br>CONTENIDO DE CARTAS 3: ";echo "<br>";
        $tok = strtok($letters, " \n\t\" "); //Usa tabulador y nueva línea para tokenizacion
        while ($tok !== false) {
            echo "TOKEN= $tok<br>";
            $tok = strtok(" \n\t\" ");
        }
        
        /*$letters = DB::table('letters')->select('content')->get();
        $aux1[''] = [''];
        $sep = explode(" ", $letters); 
        foreach ($sep as $s) {
            echo $s, ",";
        }
        echo "<br />";echo "<br />";
        $cantcartas = count($letters);
        for ($i=0; $i < $cantcartas; $i++ ){ 
            $aux1[''] = $letters;
        }
        echo "CONTENIDO GUARDADO EN [aux1]: ",$aux1[''];
         echo "<br />";echo "<br />";*/

        echo "<br>INDICE DE CARTAS: ";echo "<br>";
        $aux2 [''] = [''];
        $cadena = 'carta';
        $a = '1';
        for ($i=1; $i <= $cantcartas; $i++) { 
            $a = $i;
            $aux2[''] = $a;  
            //echo $cadena,$aux2[''];
            $indice[''] =  $cadena.$aux2[''];
            echo $indice[''],"<br>";
        }

        /*$samples = $cartas2['']; echo $samples;
        //$labels = $indice['']; echo $labels;
        $labels = ['a', 'b', 'c'];
        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);
        //dd($classifier);
        echo $classifier->predict(['eso','es','hola','carta']);*/   
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
}
