<?php

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

Route::get('/black-jack', 'GameController@blackJack')->name('black-jack');

Route::get('/rock-paper-scissors', 'GameController@rockPaperScissors')->name('rock-paper-scissors');
Route::post('/rock-paper-scissors', 'GameController@resultRockPaperScissors')->name('result-rock-paper-scissors');
