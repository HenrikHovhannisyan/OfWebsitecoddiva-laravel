<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ModelsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/apply-now', [HomeController::class, 'applyNow'])->name('apply-now');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{blog}', [HomeController::class, 'blogShow'])->name('blog-show');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/refer', [HomeController::class, 'refer'])->name('refer');
Route::get('/legal', [HomeController::class, 'legal'])->name('legal');


Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('info', InfoController::class);
    Route::resource('models', ModelsController::class);
    Route::resource('blogs', BlogsController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('about', AboutController::class);
});
