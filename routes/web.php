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

Route::get('/personal/letters', 'PersonalController@letters')->name('user.letters');

/**
 *  Route for show the personal profile
 */
Route::get('/admin/personal', 'AdminController@personal')->name('admin.personal'); 

/**
* Route for show the developers team information
*/
Route::get('/nosotros', 'HomeController@pageInfo')-> name('page');

/**
*Route for show the Academic profile for all the personals
*/
Route::get('/admin/all-profiles', 'AdminController@profiles')-> name('allProfiles');

/**
*Route for show the profile for each personal
*/
Route::get('admin/personal/{personal}', 'AdminController@profile')-> name('persProfile');