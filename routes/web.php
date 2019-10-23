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
 *Route for show the Academic profile for all the personals
 */
Route::get('/admin/all-profiles', 'AdminController@profiles')->name('allProfiles');

/**
 *Route for show the profile for each personal
 */
Route::get('admin/personal/{personal}', 'AdminController@profile')->name('persProfile');

/**
 * Route for Unautorized page.
 */
Route::get('/unauthorized', 'HomeController@unautorized')->name('unauthorized');

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
