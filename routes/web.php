<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\front_endController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WorkController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::middleware(['checkRole:admin'])->group(function () {
        Route::resource('admin', UserController::class);
    });
    
    Route::resource('skills', SkillController::class);

    Route::resource('works', WorkController::class);

    Route::resource('/', front_endController::class);

