<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\front_endController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EducationalController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\ContactController;
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
    
    Route::resource('profile', AdminController::class);

    Route::resource('skills', SkillController::class);

    Route::resource('works', WorkController::class);

    Route::resource('educationals', EducationalController::class);

    Route::resource('experiences', ExperienceController::class);

    Route::resource('blogs', BlogController::class);

    Route::resource('webinars', WebinarController::class);

    Route::resource('contacts', ContactController::class);

    Route::resource('/', front_endController::class);



  

