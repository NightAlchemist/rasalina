<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {
    Route::get('/index', [HomeController::class, 'index'])->name('home.index');
    Route::get('/', [HomeController::class, 'home'])->name('home.home');
    Route::get('about', [HomeController::class, 'about'])->name('home.about');
    Route::get('blog', [HomeController::class, 'blog'])->name('home.blog');
    Route::get('blog-details', [HomeController::class, 'blogDetails'])->name('home.blog-details');
    Route::get('contact', [HomeController::class, 'contact'])->name('home.contact');
    Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('portfolio-details', [HomeController::class, 'portfolioDetails'])->name('home.portfolio-details');
    Route::get('services-details', [HomeController::class, 'servicesDetails'])->name('home.services-details');
});
