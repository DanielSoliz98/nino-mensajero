<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**
 * Route for Home(/), returning view from HomeController: create method.
 */
Route::get('/','HomeController@create')->name('home');

/**
 * Route for Write a Letter(/writeLetter), returning  view from LetterController: create method.
 */
Route::get('/writeLetter', 'LetterController@create')->name('writeLetter');

/**
 * Route for Write a Letter(/writeLetter), store the content of the letter on database.
 * LetterController method store();
 */
Route::post('/writeLetter', 'LetterController@store')->name('letter.post');


// Route for show the personal profile
// Route::get('/us', 'PersonalController@profiles')-> name('personal');
Route::get('/personal', function () {
    $pers = DB::table('users')->get();
    return view('personal', ['pers' => $pers]);
  });

// Route for show the developers team information
Route::get('/nosotros', 'PersonalController@us')-> name('team');