<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OeuvreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[AuthController::class, 'showLogin'])->name('login');
Route::get('/register', function () {
    return view('register');
});
Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dashboardArtist', function () {
    return view('dashboardArtist');
});
Route::get('/pageDesŒuvres',[OeuvreController::class, 'index'])->name('oeuvre.index');
Route::get('/createOeuvre',[OeuvreController::class, 'create'])->name('oeuvre.create');
Route::get('/oeuvres/{id}', [OeuvreController::class, 'show'])->name('detailsŒuvres');

// function () {
//     return view('createOeuvre');
// });
Route::post('/storeOeuvre',[OeuvreController::class, 'store'])->name('oeuvre.store')->middleware('auth');