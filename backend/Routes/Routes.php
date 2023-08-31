<?php

use App\Controllers\AuthController;
use App\Controllers\SiteController;
use App\Core\Route;

Route::get('/home', [SiteController::class, 'homeView']);
Route::get('/contact', [SiteController::class, 'contactView']);
Route::post('/contact', [SiteController::class, 'contactStore']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'register']);