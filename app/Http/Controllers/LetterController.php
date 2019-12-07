<?php

namespace App\Http\Controllers;

use App\Letter;
use App\Notifications\ImportantLetterNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Wamania\Snowball\Spanish;

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
            $letter->type_letter_id = 1;
            $letter->save();
           auth()->user()->notify(new ImportantLetterNotification());
        } else if ($urgent > 0) {
            $letter->type_letter_id = 2;
            $letter->save();
        } else if ($alert > 0) {
            $letter->type_letter_id = 3;
            $letter->save();
        } else {
            $letter->type_letter_id = 4;
            $letter->save();
        }
    }
}
