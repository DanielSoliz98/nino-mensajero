<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phpml\Classification\NaiveBayes;
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
        $blacklist = array("ayud","auxili","alej","alarm","arriesg","amenaz","alert","arriesg","angusti","aficcion",  "aprovech","acech","abandon","apur","agresor","asco","antipat","atac","acuchill","asistent",
        "asust","alter","acos","accident","atemoriz","asesinat","ahorc","arma","brabucon","bullying",  "cuid","criminal","cautel","cobard","cort","critic","conflict","consuel","conden","dañ",
        "dolor","desgraci","descar","desesper","descinsider","defend","delit","desagrad","desalent","defens",  "desnud","diabol","disparat","dispar","desahog","destruccion","desproteg","escap","espant","expuest",
        "extrem","enferm","engañ","escond","encerr","esquiv","evacu","evad","evit","forzos",  "fueg","feo","fugit","fals","fechor","fatal","forceje","fobi","golp","grav",
        "groser","guerr","huir","horribl","her","involuntari","insegur","indecent","incaut","impruden",  "infest","inconscien","infiel","infel","impon","intimid","lastim","liber","liar","loc",
        "luch","llor","miser","mat","muert","martiri","mied","mal","maldit","malevol",  "ment","mient","malhechor","malign","manten","monstru","oblig","ofens","obscen","ofend",
        "peligr","peg","pel","prohib","precaucion","proteccion","pen","puerc","precari","preocup",  "pusilanim","perd","preven","riesg","refugi","rescat","rob","retir","repugn","rencor",
        "rapt","rebeld","socorr","segur","salv","salvaj","señuel","sust","sobresalt","siniestr",  "suci","sospech","s.o.s","suplic","toxic","tramp","terrorism","terror","tem","tim",
        "traicion","torp","vam","vigil","violenci","vulner","viol","agred","agresion","destru",  "expon","necesit","neces","pobrez","pobr","proteg","reprob","traidor","quem","golpe",
        "grit","cuid","agresion","abus","sac","castig","escarment","incendi","molest","irme",  "reneg","renieg","cinturon","pal","insult","irrespons","riñ","fallec","muri","dej");  
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