<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Wamania\Snowball\Spanish;

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
        $stemmer = new Spanish();
        $letters = DB::table('letters')->select('id','content')->get();

        $blacklistA = array("ayud","auxili","alej","aprovech","agresor","asco","atac","acuchill","asistent","ata",
        "agresion","agred","abus","alter","acos","accident","atemoriz","asesinat","asesin","ahorc",
        "arma","brabucon","bullying","cuid","criminal","cobard","cort","critic","cinturon","dañ",
        "dolor","desgraci","descar","desesper","defend","delit","desagrad","defens","desnud","dispar",
        "destruccion","destroz","desproteg","destru","escap","espant","expuest","expon","extrem","enferm",
        "engañ","escond","encerr","esquiv","explot","explos","evacu","evit","forzos","fueg",
        "fals","fechor","fatal","forceje","fobi","fallec","golp","golpe","grav","grit",
        "guerr","huir","horribl","her","hambr","hier","involuntari","intim","indecent","inconscien",
        "impon","incendi","irme","intimid","lastim","liber","loc","luch","llor","miser",
        "mat","muert","martiri","mied","mal","maldit","malevol","malhechor","malign","monstru",
        "muri","necesit","neces","oblig","ofens","obscen","ofend","peligr","peg",
        "prohib","precaucion","proteccion","pen","puerc","pusilanim","perd","pal","proteg","quem",
        "rescat","rob","repugn","relacion","rechaz","rapt","socorr","segur","sac","salv",
        "salvaj","sust","sex","siniestr","suci","s.o.s","sos","suplic","toc","toxic",
        "tramp","tirote","terrorism","violenci","vulner","viol");  

        $blacklistB = array("alarm","arriesg","amenaz","alert","arriesg","aficcion","acech","abandon","apur","abofete",
        "antipat","asust","cautel","conflict","consuel","conden","desalent","diabol","disparat","desahog",
        "dej","evad","escarment","empuj","feo","fugit","groser","insegur","incaut","impruden",
        "infest","infiel","infel","insult","jal","jalone","liar","ment","mient","manten",
        "molest","precari","preocup","pel","pele","preven","quit","riesg","refugi","retir",
        "rebeld","señuel","sobresalt","suci","sacud","sospech","terror","tem","tim","tirone",
        "traicion","vigil","vam","pobrez","pobr","romp","rot","traidor");
        
        $blacklistC = array("angusti","agresor","arañ","castig","desconsider","discut","irrespons","molest","mord","rencor",
        "reneg","renieg","reprob","riñ","ret","torp");
        foreach ( $letters as $letter ) {
            $cartas3 = $letter->content;
            $strlow = strtolower($cartas3); 
            $quit = preg_replace ( '/[^a-zA-Z0-9]/', " ", $strlow ); 
            $tok = strtok ($quit, " \n\t ");
            echo "<br>",$letter->content,"<br>";
            $tok = $stemmer->stem($tok);
            while ( $tok !== false ) {
                $tok = $stemmer->stem($tok);
                echo "Token = $tok <br />";
                if ( in_array($tok, $blacklistA) ) {
                    $flag = true;
                    $identif = $letter->id;
                    $tipo = "Peligro";
                    echo " - PELIGRO!! ID: ",$identif,"<br>";
                } else if (in_array($tok, $blacklistB) ) {
                    $flag = true;
                    $identif = $letter->id;
                    $tipo = "Urgente";
                    echo " - URGENTE ID: $identif<br>";
                } else if ( in_array($tok, $blacklistC)) {
                    $flag = true;
                    $identif = $letter->id;
                    $tipo = "Alerta";
                    echo " - ALERTA <br>ID: $identif<br>";
                } else {
                    $flag = true;
                    $identif = $letter->id;
                    $tipo = "Normal";
                    echo " - NORMAL<br>";
                }
                $tok = strtok(" \n\t ");
            }
        }
        return view('users.content', compact('letters', 'blacklistA','blacklistB','blacklistC','flag', 'identif','tipo', 'tok'));
    }
}