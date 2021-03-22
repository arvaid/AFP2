<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

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

Route::resource('question', 'App\Http\Controllers\QuestionController');

Route::get('/logout', 'Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@destroy');

Route::view('home', 'home')->middleware('auth');
