<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
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

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'homePage']);

Route::get('/',[homeController::class,'homePage']);
Route::get('',[homeController::class,'homePage']);
Route::get('/home',[homeController::class,'homePage']);
Route::get('/about',[homeController::class,'aboutPage']);
Route::get('/projects',[homeController::class,'projectsPage']);
use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

