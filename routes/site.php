<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('website.home');

Route::get('/about', function () {
    return 'This is about page.';
});