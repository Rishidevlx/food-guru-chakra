<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/shakthi', 'pages.shakthi')->name('shakthi');
Route::view('/training', 'pages.coming-soon', ['title' => 'Training'])->name('training');
Route::view('/blog', 'pages.coming-soon', ['title' => 'Blog'])->name('blog');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');
Route::view('/terms-and-conditions', 'pages.terms-and-conditions')->name('terms-and-conditions');
Route::view('/404', 'errors.404')->name('error.404');
