<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingController;


Route::get('/', function(){
    return view('welcome');
});

// Route::get('/register', function(){
//     return view('register')->name('registrasi.index');
// });
Route::get('/', [LandingController::class, 'index'])->name('landing.index');

Route::get('/register', [RegisterController::class, 'index'])->name('registrasi.index');
// Route::get('/', function(){
//     return view('register');
// });

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });
