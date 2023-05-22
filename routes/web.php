<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('services',ServiceController::class)->names('services');
Route::resource('abouts',AboutController::class)->names('abouts');
Route::resource('contacts',ContactController::class)->names('contacts');
Route::resource('/',homeController::class)->names('home');
Route::resource('admin',AdminController::class)->middleware('auth')->names('admin');
Route::resource('user',UserController::class)->middleware('auth')->names('user');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/userChecker', [UserController::class, 'userChecker'])->name('userChecker');
