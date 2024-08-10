<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\ContactController;

// Home Route
Route::get('/', [HomeController::class, 'index']);

// About Route
Route::get('/about', [AboutController::class, 'index']);

// Experience Route
Route::get('/experience', [ExperienceController::class, 'index']);

// Portfolio Route
Route::get('/portfolio', [PortfolioController::class, 'index']);

// Certificates Route
Route::get('/certificates', [CertificatesController::class, 'index']);

// Contact Routes
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Test Flash Message Route
Route::get('/test-flash', function () {
    return redirect('/')->with('success', 'This is a test flash message!');
});

Route::get('/simple-test', function () {
    return 'Simple test route works!';
});