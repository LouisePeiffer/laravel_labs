<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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


// -------- FRONT --------
// Home
Route::get('/', [FrontController::class, 'index'])->name('home');
// Services
Route::get('/services', [FrontController::class, 'services'])->name('services');

// Blog
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');

// Contact
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');


// ------- BACK --------
Route::get('/admin', [BackController::class, 'admin'])->name('admin');