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

Route::resource("/", "WelcomeController");
Route::resource("/contact", "ContactController");
Route::resource("/services", "ServiceController");
Route::resource("/blog", "BlogController");




Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get("/header", "HeaderController@indexview")->name("header.edit");