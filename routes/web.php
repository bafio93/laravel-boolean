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
    return view('home');
})->name("home_page");

Route::get('/faq', function () {
    return view('faq');
})->name("faq_page");

Route::get('/privacy', function () {
    return view('privacy');
})->name("privacy_page");

Route::get('/nolink', function () {
    return view('nolink');
})->name("nolink_page");
