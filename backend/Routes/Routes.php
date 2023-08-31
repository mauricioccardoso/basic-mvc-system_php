<?php

use App\Controllers\SiteController;
use App\Core\Route;

Route::get('/home', [SiteController::class, 'homeView']);
Route::get('/contact', [SiteController::class, 'contactView']);
Route::post('/contact', [SiteController::class, 'contactStore']);