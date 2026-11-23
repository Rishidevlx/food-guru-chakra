<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');
Route::view('/terms-and-conditions', 'pages.terms-and-conditions')->name('terms-and-conditions');
Route::view('/404', 'errors.404')->name('error.404');
