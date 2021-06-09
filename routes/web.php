<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IphoneController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Models\Image;
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
// ----------------------------------FRONT----------------------------------

// ---------- PAGES ----------
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
// Route::get('/blogpost', [FrontController::class, 'blogpost'])->name('blogpost');

// ---------- NEWSLETTER ----------
Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletterstore');
// ---------- MAIL CONTACT ----------
Route::post('/mail/store', [MailController::class, 'store'])->name('mailstore');
// --------- COMMENT --------------
Route::post('/comment/store/{id}', [CommentController::class, 'store'])->name('store.comment');
// SHOW BLOG
Route::get('/blog/show/{id}', [FrontController::class, 'blogpost'])->name('show.blog');
// SEARCH BLOG
Route::get('/blog/search', [FrontController::class, 'search'])->name('search.blog');








// ---------------------------------- BACK ----------------------------------
Route::get('admin/dashboard', [BackController::class, 'dashboard'])->name('back.dashboard');
// Route::get('admin/profil', [BackController::class, 'profil'])->name('back.profil');
Route::get('admin/general', [BackController::class, 'general'])->name('back.general');
Route::get('admin/discover', [BackController::class, 'discover'])->name('back.discover');
Route::get('admin/service', [BackController::class, 'service'])->name('back.service');
Route::get('admin/blog', [BackController::class, 'blog'])->name('back.blog');
Route::get('admin/testimonial', [BackController::class, 'testimonial'])->name('back.testimonial');
Route::get('admin/team', [BackController::class, 'team'])->name('back.team');
Route::get('admin/post', [BackController::class, 'post'])->name('back.post');
Route::get('admin/contact', [BackController::class, 'contact'])->name('back.contact');
Route::get('admin/softdelete', [PostController::class, 'softdelete'])->name('back.softdelete');
// Backblade
// Route::get('admin/', [BackController::class, 'backblade'])->name('back.layout');

// ---------- USER ----------
// Edit
Route::get('edit/user/{user}', [UserController::class, 'edit'])->name('edit.user');
Route::put('update/user/{user}', [UserController::class, 'update'])->name('update.user');
// Delete
Route::delete('delete/user/{user}', [UserController::class, 'destroy'])->name('delete.user');




//  ------------------------------------ CRUDS ------------------------------------

// ---------------HOME---------------
// LOGO
// Edit
Route::get('edit/logo/{logo}', [LogoController::class, 'edit'])->name('edit.logo');
Route::put('update/logo/{logo}', [LogoController::class, 'update'])->name('update.logo');
// Delete
Route::delete('delete/logo/{logo}', [LogoController::class, 'destroy'])->name('delete.logo');

// IMAGE
// Create
Route::get('create/image', [ImageController::class, 'create'])->name('create.image');
Route::post('store/image', [ImageController::class, 'store'])->name('store.image');
// Edit
Route::get('edit/image/{image}', [ImageController::class, 'edit'])->name('edit.image');
Route::put('update/image/{image}', [ImageController::class, 'update'])->name('update.image');
// Delete
Route::delete('delete/image/{image}', [ImageController::class, 'destroy'])->name('delete.image');

// DISCOVER
// Edit
Route::get('edit/discover/{discover}',[DiscoverController::class, 'edit'])->name('edit.discover');
Route::put('update/discover/{discover}', [DiscoverController::class, 'update'])->name('update.discover');

// VIDEO
// Edit
Route::get('edit/video/{video}', [VideoController::class, 'edit'])->name('edit.video');
Route::put('update/video/{video}', [VideoController::class, 'update'])->name('update.video');

// TESTIMONIALS
// Create
Route::get('create/testimonial', [TestimonialController::class, 'create'])->name('create.testimonial');
Route::post('store/testimonial', [TestimonialController::class, 'store'])->name('store.testimonial');
//  Edit
Route::get('edit/testimonial/{testimonial}', [TestimonialController::class, 'edit'])->name('edit.testimonial');
Route::put('update/testimonial/{testimonial}', [TestimonialController::class, 'update'])->name('update.testimonial');
// Delete
Route::delete('delete/testimonial/{testimonial}', [TestimonialController::class, 'destroy'])->name('delete.testimonial');

//  SUBJECTS
// Create
Route::get('create/subject', [SubjectController::class, 'create'])->name('create.subject');
Route::post('store/subject', [SubjectController::class, 'store'])->name('store.subject');
// Edit
Route::get('edit/subject/{subject}', [SubjectController::class, 'edit'])->name('edit.subject');
Route::put('update/subject/{subject}', [SubjectController::class, 'update'])->name('update.subject');
// Delete
Route::delete('delete/subject/{subject}', [SubjectController::class, 'destroy'])->name('delete.subject');

// CONTACT
Route::get('create/contact', [ContactController::class, 'create'])->name('create.contact');
Route::post('store/contact', [ContactController::class, 'store'])->name('store.contact');
// Edit
Route::get('edit/contact/{contact}', [ContactController::class, 'edit'])->name('edit.contact');
Route::put('update/contact/{contact}', [ContactController::class, 'update'])->name('update.contact');
// Delete
Route::delete('delete/contact/{contact}', [ContactController::class, 'destroy'])->name('delete.contact');


// ---------------SERVICES---------------
// SERVICES
// Edit
Route::get('edit/service/{service}', [ServiceController::class, 'edit'])->name('edit.service');
Route::put('update/service/{service}', [ServiceController::class, 'update'])->name('update.service');
// Create
Route::get('create/service', [ServiceController::class, 'create'])->name('create.service');
Route::post('store/service', [ServiceController::class, 'store'])->name('store.service');
// Delete
Route::delete('delete/service/{service}', [ServiceController::class, 'destroy'])->name('delete.service');

// IPHONE
// Edit
Route::get('edit/iphone/{iphone}', [IphoneController::class, 'edit'])->name('edit.iphone');
Route::put('update/iphone/{iphone}', [IphoneController::class, 'update'])->name('update.iphone');
// Delete
Route::delete('delete/iphone/{iphone}', [IphoneController::class, 'destroy'])->name('delete.iphone');

// ---------------BLOG---------------
// POST
// Create
Route::get('create/post', [PostController::class, 'create'])->name('create.post');
Route::post('store/post', [PostController::class, 'store'])->name('store.post');
// Edit
Route::get('edit/post/{post}', [PostController::class, 'edit'])->name('edit.post');
Route::put('update/post/{post}', [PostController::class, 'update'])->name('update.post');
// Delete
Route::delete('delete/post/{post}', [PostController::class, 'destroy'])->name('delete.post');

// CATEGORY
// Create
Route::get('create/category', [CategoryController::class, 'create'])->name('create.category');
Route::post('store/category', [CategoryController::class, 'store'])->name('store.category');
// Edit
Route::get('edit/category/{category}', [CategoryController::class, 'edit'])->name('edit.category');
Route::put('update/category/{category}', [CategoryController::class, 'update'])->name('update.category');
// Delete
Route::delete('delete/category/{category}', [CategoryController::class, 'destroy'])->name('delete.category');

// TAG
// Create
Route::get('create/tag', [TagController::class, 'create'])->name('create.tag');
Route::post('store/tag', [TagController::class, 'store'])->name('store.tag');
// Edit
Route::get('edit/tag/{tag}', [TagController::class, 'edit'])->name('edit.tag');
Route::put('update/tag/{tag}', [TagController::class, 'update'])->name('update.tag');
// Delete
Route::delete('delete/tag/{tag}', [TagController::class, 'destroy'])->name('delete.tag');

// MAP
// Edit
Route::get('edit/map/{map}', [MapController::class, 'edit'])->name('edit.map');
Route::put('update/map/{map}', [MapController::class, 'update'])->name('update.map');


// GENRE
// Create
Route::get('create/genre', [GenreController::class, 'create'])->name('create.genre');
Route::post('store/genre', [GenreController::class, 'store'])->name('store.genre');
// Edit
Route::get('edit/genre/{genre}', [GenreController::class, 'edit'])->name('edit.genre');
Route::put('update/genre/{genre}', [GenreController::class, 'update'])->name('update.genre');
// Delete
Route::delete('delete/genre/{genre}', [GenreController::class, 'destroy'])->name('delete.genre');

// JOB
// Create
Route::get('create/job', [JobController::class, 'create'])->name('create.job');
Route::post('store/job', [JobController::class, 'store'])->name('store.job');
// Edit
Route::get('edit/job/{job}', [JobController::class, 'edit'])->name('edit.job');
Route::put('update/job/{job}', [JobController::class, 'update'])->name('update.job');
// Delete
Route::delete('delete/job/{job}', [JobController::class, 'destroy'])->name('delete.job');

// ROLE
// Create
Route::get('create/role', [RoleController::class, 'create'])->name('create.role');
Route::post('store/role', [RoleController::class, 'store'])->name('store.role');
// Edit
Route::get('edit/role/{role}', [RoleController::class, 'edit'])->name('edit.role');
Route::put('update/role/{role}', [RoleController::class, 'update'])->name('update.role');
// Delete
Route::delete('delete/role/{role}', [RoleController::class, 'destroy'])->name('delete.role');

// TITLE
// Create
Route::get('create/title', [TitleController::class, 'create'])->name('create.title');
Route::post('store/title', [TitleController::class, 'store'])->name('store.title');
// Edit
Route::get('edit/title/{title}', [TitleController::class, 'edit'])->name('edit.title');
Route::put('update/title/{title}', [TitleController::class, 'update'])->name('update.title');
// Delete
Route::delete('delete/title/{title}', [TitleController::class, 'destroy'])->name('delete.title');

// IMAGE
// Create
Route::get('create/image', [ImageController::class, 'create'])->name('create.image');
Route::post('store/image', [ImageController::class, 'store'])->name('store.image');
// Edit
Route::get('edit/image/{image}', [ImageController::class, 'edit'])->name('edit.image');
Route::put('update/image/{image}', [ImageController::class, 'update'])->name('update.image');
// Delete
Route::delete('delete/image/{image}', [ImageController::class, 'destroy'])->name('delete.image');


// ---------DASHBOARD---------
Route::get('/dashboard', function () {
    return view('back.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

