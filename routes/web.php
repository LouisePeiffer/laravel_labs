<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// ---------FRONT---------
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
// Route::get('/blogpost', [FrontController::class, 'blogpost'])->name('blogpost');

// SHOW BLOG
Route::get('/blog/show/{id}', [FrontController::class, 'blogpost'])->name('show.blog');
// SEARCH BLOG
Route::get('/blog/search', [FrontController::class, 'search'])->name('search.blog');

// ---------- BACK ----------
Route::get('/admin', [BackController::class, 'admin'])->name('admin');


// ---------- NEWSLETTER ----------
Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletterstore');

// ---------- MAIL CONTACT ----------
Route::post('/mail/store', [MailController::class, 'store'])->name('mailstore');



// --------- COMMENT --------------
Route::post('/comment/store/{id}', [CommentController::class, 'store'])->name('store.comment');

// ---------DASHBOARD---------
Route::get('/dashboard', function () {
    return view('back.admin');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
