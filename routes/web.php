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

// Route::get('/', function (Request $request) {
//     return view('welcome');
// });
Route::get('/',[homeController::class,'homePage']);
Route::get('/home',[homeController::class,'homePage']);
Route::get('/about',[homeController::class,'aboutPage']);
Route::get('/skills',[homeController::class,'aboutPage']);
Route::get('/projects',[homeController::class,'projectsPage']);
Route::get('/education',[homeController::class,'educationPage']);
Route::get('/interests',[homeController::class,'interests']);
Route::get('/awards',[homeController::class,'awards']);

