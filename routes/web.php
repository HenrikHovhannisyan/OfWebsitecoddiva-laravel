<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\ReferFormController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/apply-now', [HomeController::class, 'applyNow'])->name('apply-now');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{blog}', [HomeController::class, 'blogShow'])->name('blog-show');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/{service:slug}', [HomeController::class, 'servicesShow'])->name('services-show');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/refer', [HomeController::class, 'refer'])->name('refer');
Route::get('/legal', [HomeController::class, 'legal'])->name('legal');
Route::get('/talents', [HomeController::class, 'talents'])->name('talents');
Route::get('/talent/{talent}', [HomeController::class, 'talentShow'])->name('talent-show');
Route::post('/send-email', [ContactFormController::class, 'sendEmail'])->name('send-email');
Route::post('/refer-send-email', [ReferFormController::class, 'sendEmail'])->name('refer-send-email');
Route::get('/sitemap.xml', [SitemapController::class, 'index']);


Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('info', InfoController::class);
    Route::resource('models', ModelsController::class);
    Route::resource('blogs', BlogsController::class);
    Route::resource('services', ServicesController::class)->parameters(['services' => 'service:slug']);
    Route::resource('faqs', FaqController::class);
    Route::resource('about', AboutController::class);
});

