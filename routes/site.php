<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('website.home');
Route::get('/about', [SiteController::class, 'about'])->name('website.about');
Route::get('/service', [SiteController::class, 'service'])->name('website.service');
Route::get('/contact', [SiteController::class, 'contact'])->name('website.contact');
Route::get('/testimonial', [SiteController::class, 'testimonial'])->name('website.testimonial');
Route::get('/blog', [SiteController::class, 'blog'])->name('website.blog');
Route::get('/team', [SiteController::class, 'team'])->name('website.team');