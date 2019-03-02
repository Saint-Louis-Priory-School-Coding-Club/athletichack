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
});

Route::view('/createLeague','createLeague');

Route::view('/shareLeague','shareLeague');

Route::view('/logWorkout','logWorkout');

Route::view('/logWeight', 'logWeight');

Route::view('/leagueChat','leagueChat');

Route::view('/viewLeague','viewLeague');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
