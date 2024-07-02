<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\DietController;
use App\Http\Controllers\MembershipController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Default Laravel welcome page
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes (Laravel built-in)
Auth::routes();

// Authenticated routes
Route::middleware('auth')->group(function () {

    // Dashboard routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // User profile routes
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Workout routes
    Route::get('/workouts', [WorkoutController::class, 'index'])->name('workouts.index');
    Route::get('/workouts/create', [WorkoutController::class, 'create'])->name('workouts.create');
    Route::post('/workouts', [WorkoutController::class, 'store'])->name('workouts.store');

    // Diet routes
    Route::get('/diets', [DietController::class, 'index'])->name('diets.index');
    
});

// Home route after login (optional)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/membership/upgrade', [MembershipController::class, 'upgrade'])->name('membership.upgrade')->middleware('auth');
