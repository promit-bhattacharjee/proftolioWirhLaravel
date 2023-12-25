<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[homeController::class,'homePage']);
Route::get('/home',[homeController::class,'homePage']);
Route::get('/about',[homeController::class,'aboutPage']);
Route::get('/projects',[homeController::class,'projectsPage']);
use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

