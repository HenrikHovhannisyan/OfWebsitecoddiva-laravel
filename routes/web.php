<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');})->name('index');
Route::get('/about', function () {return view('pages.about');})->name('about');
Route::get('/apply-now', function () {return view('pages.apply-now');})->name('apply-now');
Route::get('/blog', function () {return view('pages.blog');})->name('blog');
Route::get('/blog-item', function () {return view('pages.blog-item');})->name('blog-item');
Route::get('/contact', function () {return view('pages.contact');})->name('contact');
Route::get('/refer', function () {return view('pages.refer');})->name('refer');
Route::get('/legal', function () {return view('pages.legal');})->name('legal');

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::resource('info', InfoController::class);
});
