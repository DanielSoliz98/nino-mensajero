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
 * Route for Home of Children(/), returning view from HomeController: create method.
 */

use App\Http\Controllers\LetterController;

Route::get('/', 'HomeController@createHomeChildren')->name('home.children');

/**
 * Route for show the developers team information
 */
Route::get('/nosotros', 'HomeController@pageInfo')->name('page');

/**
 * Route for Write a Letter(/writeLetter), returning  view from LetterController: create method.
 */
Route::get('/writeLetter', 'LetterController@create')->name('writeLetter');

/**
 * Route for Write a Letter(/writeLetter), store the content of the letter on database.
 * LetterController method store();
 */
Route::post('/writeLetter', 'LetterController@store')->name('letter.post');

/**
 * Route for Home of Users(/home), returning view from HomeController: create method.
 */
Route::get('/home', 'HomeController@createHomeUsers')->name('home');

/**
 * Route for show one letter from a child.
 */
Route::get('/home/letters/{id}', 'HomeController@getLetter')->name('user.letter.read');

/**
 * Route for show personal of Nino Mensajero.
 */
Route::get('/admin/personal', 'AdminController@personal')->name('admin.personal');

/**
 *Route for show the profile for each personal
 */
Route::get('/admin/personal/{personal}', 'AdminController@profilePersonal')->name('persProfile');

/**
 *Route for show the profile for each personal
 */
Route::get('/personal/my-profile', 'PersonalController@myProfile')->name('myProfile');

/**
 *Route for update the profile for each personal
 */
Route::get('/personal/my-profile/update', 'PersonalController@updateProfileView')->name('updateMyProfileView');

/**
 *Route for update the profile for each personal
 */
Route::post('/personal/my-profile/update', 'PersonalController@updateProfile')->name('updateMyProfile');

/**
 * Route for Unautorized page.
 */
Route::get('/forbidden', 'HomeController@forbidden')->name('forbidden');

/**
 * Routes for authentification: Login Users.
 */
Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);
/**
 * Routes for authentification: Register personal.
 */
Route::get('admin/register', 'RegisterController@createView')->name('register');

Route::post('admin/register', 'RegisterController@register')->name('register.personal');


/** 
 * Route for the generation of information of a letter by enter on a Letter
 */
Route::get('letters/generate-information/{id}', 'InformationController@show')->name('generateInformation');

/**
 * Route for saving the generated information of a letter
 */
Route::post('letters/generate-information', 'InformationController@store')->name('saveInformation');


/**
 * Route for sharing the generated informations of letters to all the personal
 */
Route::get('home/share', 'InformationController@share')->name('shareInformation');

/**
 * Route for showing the specific information generated of a letter
 */
Route::get('/home/share/{letter}', 'InformationController@specific')->name('informationSpecified');