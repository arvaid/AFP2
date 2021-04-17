<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
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
    return view('welcome'); //TODO: Külön HomeController-t illik csinálni neki
})->name('home');

Route::get('user/profile', [UserController::class, 'profile'])->middleware('auth')->name('user.profile');
Route::resource('user', UserController::class)->middleware('auth');

Route::resource('question', QuestionController::class)->except(['index', 'show'])->middleware('auth');
Route::get('question', [QuestionController::class, 'index'])->name('question.index');
Route::get('question/{question}', [QuestionController::class, 'show'])->name('question.show');

Route::resource('topic', TopicController::class)->except(['index', 'show'])->middleware('auth');
Route::get('/topic', [TopicController::class, 'index'])->name('topic.index');
Route::get('/topic/{topic}', [TopicController::class, 'show'])->name('topic.show');

Route::resource('answer', AnswerController::class)->except(['create'])->middleware('auth');
Route::get('answer/create/{question}', [AnswerController::class, 'create'])->name('answer.create')->middleware('auth');

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');

Route::post('answer/{answer}/inc', [AnswerController::class, 'scoreIncrement'])->name('answer.score.increment')->middleware('auth');
Route::post('answer/{answer}/dec', [AnswerController::class, 'scoreDecrement'])->name('answer.score.decrement')->middleware('auth');

