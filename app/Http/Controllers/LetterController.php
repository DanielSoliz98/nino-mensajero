<?php

namespace App\Http\Controllers;

use App\Image;
use App\Letter;
use App\Notifications\ImportantLetterNotification;
use App\Notifications\DangerousLetterNotification;
use App\Notifications\AlertLetterNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Wamania\Snowball\Spanish;
use App\User;

use Illuminate\Support\Facades\DB;

class LetterController extends Controller
{
    /**
     * Show the view for write a letter.
     *
     * @return letter.blade.php view
     */
    public function create()
    {
        return view('letter.letter');
    }

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
            return back()->with('error', 'Tu carta está vacía amiguit@, escríbenos algo.');
        }

        $letter = Letter::create([
            'content' => $request->content,
            'ip_address' => $request->getClientIp()
        ]);

        $path = public_path() . '/storage/';
        $files = $request->file('file');

        if ($files != NULL) {
            foreach ($files as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $filename);
                $letter->images()->create(['filename' => $filename]);
            }
            $letter->save();
        }

        $this->analyzeLetter($letter);

        return redirect('/')->with('success', 'Gracias amiguit@. Tu carta fue enviada al Niño Mensajero.');
    }

    /**
     * Analyze the content of a letter and save it on database.
     */
    protected function analyzeLetter(Letter $letter)
    {
        include 'ListOfWords.php';
        $stemmer = new Spanish();
        $users = User::get();
        $content = $letter->content;
        $strLowerCase = strtolower($content);
        $contentClean = preg_replace('/[^a-zA-Z0-9]/', " ", $strLowerCase);
        $token = strtok($contentClean, " \n\t ");
        $danger = $urgent = $alert = 0;
        while ($token !== false) {
            $token = $stemmer->stem($token);
            if (in_array($token, DANGER_WORDS)) {
                $danger += 1;
            } else if (in_array($token, URGENT_WORDS)) {
                $urgent += 1;
            } else if (in_array($token, ALERT_WORDS)) {
                $alert += 1;
            }
            $token = strtok(" \n\t ");
        }
        if ($danger > 0) {
            Notification::send($users,new DangerousLetterNotification($letter));
            $letter->type_letter_id = 1;
            $letter->save();
        } else if ($urgent > 0) {
            Notification::send($users,new ImportantLetterNotification($letter));
            $letter->type_letter_id = 2;
            $letter->save();
        } else if ($alert > 0) {
            Notification::send($users,new AlertLetterNotification($letter));
            $letter->type_letter_id = 3;
            $letter->save();
        } else {
            $letter->type_letter_id = 4;
            $letter->save();
        }
    }

    public function classify(){
        $types = DB::table('letters')
            // ->join('types_letters', 'letters.type_letter_id', '=', 'types_letters.id')
            // ->join('images', 'letters.id', '=', 'images.letter_id')
            ->select('letters.type_letter_id', 'letters.created_at', 'letters.content')
            // ->select('letters.type_letter_id', 'letters.created_at', 'letters.content', 'images.filename')
            // ->where('types_letters.name', '=', 'peligro')
            ->where('letters.type_letter_id', '=', '1')
            ->get();
        return(view('users/letters-classification/danger-letters', compact('types')));

        /*$types = Letter::orderBy('created_at', 'desc')
            ->with(['images' => function ($query) {
                $query->orderBy('created_at', 'desc');
            }])
            ->with('typeLetter')
            ->paginate(10);
        return view('users.letters-classification/danger-letters', compact('types'));*/

        // $types= Letter::select('type_letter_id')->get();
        // return view('users.letters-classification/danger-letters', compact('types'));
    }

    public function danger(){
        $types = DB::table('letters')
            ->select('letters.type_letter_id', 'letters.created_at', 'letters.content')
            ->where('letters.type_letter_id', '=', '1')
            ->get();
        return(view('users/letters-classification/danger-letters', compact('types')));

        /*$types = Letter::orderBy('created_at', 'desc')
            ->with(['images' => function ($query) {
                $query->orderBy('created_at', 'desc');
            }])
            ->with('typeLetter')
            ->paginate(10);
        return view('users.letters-classification/danger-letters', compact('types'));*/

        // $types= Letter::select('type_letter_id')->get();
        // return view('users.letters-classification/danger-letters', compact('types'));
    }

    public function urgent(){
        $types = DB::table('letters')
            ->select('letters.type_letter_id', 'letters.created_at', 'letters.content')
            ->where('letters.type_letter_id', '=', '2')
            ->get();
        return(view('users/letters-classification/urgent-letters', compact('types')));
    }

    public function alert(){
        $types = Letter::orderBy('created_at', 'desc')
            ->with(['images' => function ($query) {
                $query->orderBy('created_at', 'desc');
            }])
            ->with('typeLetter')->where('type_letter_id' , '=', '3')
            ->paginate(10);
        // $query = $letters->type_letter_id->where('type_letter_id', '=', '3')->get();
        // $types2 = DB::table('letters')
        //     ->select('letters.type_letter_id', 'letters.created_at', 'letters.content')
        //     ->where('letters.type_letter_id', '=', '3')
        //     ->get();
            /*if($this->$types->type_letter_id == 3){
                return view('users/letters-classification/alert-letters', compact('types'));
            }*/
            // if(count($types->type_letter_id == "3") > 0){
                return view('users/letters-classification/alert-letters', compact('types'));
            // }
        // return view('users/letters-classification/alert-letters', compact('types'));
    }

    public function normal(){
        $images = Image::all();
        $types = DB::table('letters')
            ->join('types_letters', 'letters.type_letter_id', '=', 'types_letters.id')
            ->leftJoin('images', 'letters.id', '=', 'images.letter_id')
            ->select('letters.type_letter_id', 'letters.created_at', 'letters.content', 'images.filename')
            ->where('letters.type_letter_id', '=', '4')
            ->orderBy('created_at', 'desc')
            ->get();
        return(view('users/letters-classification/normal-letters', compact('types','images')));
    }
}