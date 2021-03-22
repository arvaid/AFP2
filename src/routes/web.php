<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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
//Javaslat külsőstől: Ha lehet ne a konstruktorban definiáljuk a middleware-eket, hanem a routes/web.php-ban
//Route::get('question', [QuestionController::class, 'index']);
//Route::get('question/{question}', [QuestionController::class, 'show']);
//Route::resource('question', QuestionController::class)->except(['index', 'show'])->middleware('auth');

Route::resource('question', QuestionController::class);

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

Route::view('home', 'home')->middleware('auth');
