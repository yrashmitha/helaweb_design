<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('projects', 'ProjectController')->middleware('verified');;
//Auth::routes();
//Auth::routes(['register' => false]);
Route::get('/login', 'Auth\LoginController@showLoginForm' );
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout');

//Route::get('/home', 'HomeController@index');

//Route::get('/home', 'HomeController@index')->name('home');


//Auth::routes(['verify' => false]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('users', 'UserController')->middleware('verified');;

Route::get("u","UserController@my")->middleware('verified');;
