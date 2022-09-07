<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', [App\Http\Controllers\KidController::class, 'index']);
Route::get('/about', [App\Http\Controllers\KidController::class, 'about']);
Route::get('/blog', [App\Http\Controllers\KidController::class, 'blog']);
Route::get('/class', [App\Http\Controllers\KidController::class, 'class']);
Route::get('/contact', [App\Http\Controllers\KidController::class, 'contact']);
Route::get('/gallery', [App\Http\Controllers\KidController::class, 'gallery']);
Route::get('/single', [App\Http\Controllers\KidController::class, 'single']);
Route::get('/team', [App\Http\Controllers\KidController::class, 'team']);
