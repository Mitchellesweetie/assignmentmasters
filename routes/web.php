<?php

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
Route::get('/', [App\Http\Controllers\ProfileController::class, 'home'])->name('home');
Route::get('/myprofile', [App\Http\Controllers\ProfileController::class, 'myprofile'])->name('myprofile');
Route::get('/about', [App\Http\Controllers\ProfileController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\ProfileController::class, 'contact'])->name('contact');