<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', function() {
    return view('home');
});

Route::get('/timeline', [TimelineController::class, 'showTimelinePage'])->name("timeline");
Route::post('/tweet', [TimelineController::class, 'postTweet'])->name('timeline.tweet');
Route::post('/comment', [TimelineController::class, 'postComment'])->name('timeline.comment');

Route::get('/janken', function() {
    return view('janken');
});