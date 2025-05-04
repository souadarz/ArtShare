<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\OeuvreController;
use App\Http\Controllers\TutorielController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/notreVision', function () {
    return view('notreVision');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/like/{oeuvre}', [LikeController::class, 'store'])->name('like.store');

    Route::post('/comment/{oeuvre}', [CommentController::class, 'store'])->name('comment.store');
});


Route::middleware('auth:sanctum', 'role:artiste')->group(function () {

    Route::get('/dashboardArtist', [ArtistController::class, 'showDashboardArtist'])->name('dashboardArtist');
    Route::post('/artistProfile/store', [ArtistController::class, 'storeOrUpdate'])->name('profile.storeOrUpdate');
    Route::get('/profile/{id}', [ArtistController::class, 'showProfileArtist'])->name('profile');

    Route::get('/createOeuvre', [OeuvreController::class, 'create'])->name('oeuvre.create');
    Route::get('/MesOeuvres', [OeuvreController::class, 'getoeuvresDartist'])->name('oeuvresDartist');
    Route::get('/editOeuvre/{id}', [OeuvreController::class, 'edit'])->name('oeuvre.edit');
    Route::post('/updateOeuvre/{oeuvre}', [OeuvreController::class, 'update'])->name('oeuvre.update');
    Route::get('/deleteOeuvre/{id}', [OeuvreController::class, 'destroy'])->name('oeuvre.delete');
    Route::post('/storeOeuvre', [OeuvreController::class, 'store'])->name('oeuvre.store');

    Route::get('/tutoriels/create', [TutorielController::class, 'create'])->name('tutoriels.create');
    Route::get('/MesTutoriels', [TutorielController::class, 'getTutorielDartist'])->name('tutorielsDartist');
    Route::post('/tutoriels/store', [TutorielController::class, 'store'])->name('tutoriels.store');
    Route::put('/tutoriels/update/{tutoriel}', [TutorielController::class, 'update'])->name('tutoriels.update');
    Route::get('/tutoriels/edit/{tutoriel}', [TutorielController::class, 'edit'])->name('tutoriels.edit');
    Route::delete('/tutoriels/destroy/{tutoriel}', [TutorielController::class, 'destroy'])->name('tutoriels.destroy');
});

Route::middleware('auth:sanctum', 'role:admin')->group(function () {

    Route::get('/dashboardAdamin', [AdminController::class, 'index'])->name('dashboardAdmin.index');
    Route::get('/users/create', [AdminController::class, 'create'])->name('users.create');
    Route::post('/users/store', [AdminController::class, 'store'])->name('users.store');
    Route::delete('/users/destroy/{id}', [AdminController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/changeStatus/{user}', [AdminController::class, 'changeUserStatus'])->name('users.changeUserStatus');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::post('/categories/update/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/destroy/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

Route::get('/artistes', [ArtistController::class, 'index'])->name('artists.index');

Route::get('/pageDesŒuvres', [OeuvreController::class, 'index'])->name('oeuvre.index');
Route::get('/oeuvres/{id}', [OeuvreController::class, 'show'])->name('detailsŒuvres');


Route::get('/tutoriels', [TutorielController::class, 'index'])->name('tutoriels.index');
Route::get('/tutoriels/show/{tutoriel}', [TutorielController::class, 'show'])->name('tutoriels.show');
