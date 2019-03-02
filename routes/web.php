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

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/leagues/{id}/view','LeaguesController@show');

// Not working
Route::get('/leagues/{id}/chat','LeaguesController@showChat');

Route::get('/leagues/create','LeaguesController@create');
Route::post('/leagues/create', 'LeaguesController@store');

//Route::get('/leagues/share','LeaguesController@share');

//Route::view('/logWorkout','logWorkout');

//Route::view('/logWeight', 'logWeight');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
