<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\creatorSignin;
use App\Http\Controllers\userSignin;
use App\Http\Controllers\creatorsignup;
use App\Http\Controllers\usersignup;
use App\Http\Controllers\savepost;
use App\Http\Controllers\feedController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
});


Route::get('/creator', function () {
    return view('creator');
});

Route::POST('savepost', [savepost::class,'getData']);

Route::get('/feed', [FeedController::class, 'fetch']);





Route::get('/signin_page', function () {
    return view('signin_page');
});

Route::get('/signup_page', function () {
    return view('signup_page');
});


Route::POST('creatorSignin', [creatorSignin::class,'getData']);

Route::POST('userSignin', [userSignin::class,'getData']);

Route::POST('creatorSignup', [creatorsignup::class,'getData']);

Route::POST('userSignup', [usersignup::class,'getData']);

