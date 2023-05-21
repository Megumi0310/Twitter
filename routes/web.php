<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/timeline','TweetController@showTimelinePage')->name('timeline');

Route::post('/timeline','TweetController@postTweet')->name('timeline');

Route::post('/timeline/delete/{id}','TweetController@destroy')->name('destroy');

Route::get('/user/show/{id}','UserController@show')->name('show');
