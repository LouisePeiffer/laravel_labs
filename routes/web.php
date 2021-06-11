<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CorbeilleController;
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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidationController;
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
Route::get('admin/dashboard', [BackController::class, 'dashboard'])->middleware(['auth'])->name('back.dashboard');
// Route::get('admin/profil', [BackController::class, 'profil'])->name('back.profil');
Route::get('admin/general', [BackController::class, 'general'])->middleware(['admin'])->name('back.general');
Route::get('admin/discover', [BackController::class, 'discover'])->middleware(['admin'])->name('back.discover');
Route::get('admin/service', [BackController::class, 'service'])->middleware(['admin'])->name('back.service');
Route::get('admin/blog', [BackController::class, 'blog'])->middleware(['editer'])->name('back.blog');
Route::get('admin/testimonial', [BackController::class, 'testimonial'])->middleware(['admin'])->name('back.testimonial');
Route::get('admin/team', [BackController::class, 'team'])->middleware(['admin'])->name('back.team');
Route::get('admin/post', [BackController::class, 'post'])->middleware(['editer'])->name('back.post');
Route::get('admin/contact', [BackController::class, 'contact'])->middleware(['admin'])->name('back.contact');
// Route::get('admin/profiles', [BackController::class, 'profiles'])->name('back.profiles');
// Route::get('admin/softdelete', [PostController::class, 'softdelete'])->name('back.softdelete');
// Backblade
// Route::get('admin/', [BackController::class, 'backblade'])->name('back.layout');

// ---------- USER ----------
// Edit
Route::get('edit/user/{user}', [UserController::class, 'edit'])->name('edit.user');
Route::put('update/user/{user}', [UserController::class, 'update'])->name('update.user');
// Delete
Route::delete('delete/user/{user}/delete', [UserController::class, 'destroy'])->middleware(['admin'])->name('delete.user');

//  USER PAR L'ADMIN
// Edit
Route::get('edit/role/{user}', [UserController::class, 'editRole'])->name('edit.role');
Route::put('update/role/{user}', [UserController::class, 'updateRole'])->name('update.role');

// // PROFILE
// // Edit
// Route::get('edit/profile/{profile}', [ProfileController::class, 'edit'])->name('edit.profile');
// Route::put('update/profile/{profile}', [ProfileController::class, 'update'])->name('update.profile');
// // Delete
// Route::delete('delete/profile/{profile}', [ProfileController::class, 'destroy'])->name('delete.profile');


//  ------------------------------------ CRUDS ------------------------------------

// ---------------HOME---------------
// LOGO
// Edit
Route::get('edit/logo/{logo}', [LogoController::class, 'edit'])->middleware(['admin'])->name('edit.logo');
Route::put('update/logo/{logo}', [LogoController::class, 'update'])->middleware(['admin'])->name('update.logo');
// Delete
Route::delete('delete/logo/{logo}', [LogoController::class, 'destroy'])->middleware(['admin'])->name('delete.logo');

// IMAGE
// Create
Route::get('create/image', [ImageController::class, 'create'])->middleware(['admin'])->name('create.image');
Route::post('store/image', [ImageController::class, 'store'])->middleware(['admin'])->name('store.image');
// Edit
Route::get('edit/image/{image}', [ImageController::class, 'edit'])->middleware(['admin'])->name('edit.image');
Route::put('update/image/{image}', [ImageController::class, 'update'])->middleware(['admin'])->name('update.image');
// Delete
Route::delete('delete/image/{image}', [ImageController::class, 'destroy'])->middleware(['admin'])->name('delete.image');

// DISCOVER
// Edit
Route::get('edit/discover/{discover}',[DiscoverController::class, 'edit'])->middleware(['admin'])->name('edit.discover');
Route::put('update/discover/{discover}', [DiscoverController::class, 'update'])->middleware(['admin'])->name('update.discover');

// VIDEO
// Edit
Route::get('edit/video/{video}', [VideoController::class, 'edit'])->middleware(['admin'])->name('edit.video');
Route::put('update/video/{video}', [VideoController::class, 'update'])->middleware(['admin'])->name('update.video');

// TESTIMONIALS
// Create
Route::get('create/testimonial', [TestimonialController::class, 'create'])->middleware(['admin'])->name('create.testimonial');
Route::post('store/testimonial', [TestimonialController::class, 'store'])->middleware(['admin'])->name('store.testimonial');
//  Edit
Route::get('edit/testimonial/{testimonial}', [TestimonialController::class, 'edit'])->middleware(['admin'])->name('edit.testimonial');
Route::put('update/testimonial/{testimonial}', [TestimonialController::class, 'update'])->middleware(['admin'])->name('update.testimonial');
// Delete
Route::delete('delete/testimonial/{testimonial}', [TestimonialController::class, 'destroy'])->middleware(['admin'])->name('delete.testimonial');

//  SUBJECTS
// Create
Route::get('create/subject', [SubjectController::class, 'create'])->middleware(['admin'])->name('create.subject');
Route::post('store/subject', [SubjectController::class, 'store'])->middleware(['admin'])->name('store.subject');
// Edit
Route::get('edit/subject/{subject}', [SubjectController::class, 'edit'])->middleware(['admin'])->name('edit.subject');
Route::put('update/subject/{subject}', [SubjectController::class, 'update'])->middleware(['admin'])->name('update.subject');
// Delete
Route::delete('delete/subject/{subject}', [SubjectController::class, 'destroy'])->middleware(['admin'])->name('delete.subject');

// CONTACT
Route::get('create/contact', [ContactController::class, 'create'])->middleware(['admin'])->name('create.contact');
Route::post('store/contact', [ContactController::class, 'store'])->middleware(['admin'])->name('store.contact');
// Edit
Route::get('edit/contact/{contact}', [ContactController::class, 'edit'])->middleware(['admin'])->name('edit.contact');
Route::put('update/contact/{contact}', [ContactController::class, 'update'])->middleware(['admin'])->name('update.contact');
// Delete
Route::delete('delete/contact/{contact}', [ContactController::class, 'destroy'])->middleware(['admin'])->name('delete.contact');


// ---------------SERVICES---------------
// SERVICES
// Edit
Route::get('edit/service/{service}', [ServiceController::class, 'edit'])->middleware(['admin'])->name('edit.service');
Route::put('update/service/{service}', [ServiceController::class, 'update'])->middleware(['admin'])->name('update.service');
// Create
Route::get('create/service', [ServiceController::class, 'create'])->middleware(['admin'])->name('create.service');
Route::post('store/service', [ServiceController::class, 'store'])->middleware(['admin'])->name('store.service');
// Delete
Route::delete('delete/service/{service}', [ServiceController::class, 'destroy'])->middleware(['admin'])->name('delete.service');

// IPHONE
// Edit
Route::get('edit/iphone/{iphone}', [IphoneController::class, 'edit'])->middleware(['admin'])->name('edit.iphone');
Route::put('update/iphone/{iphone}', [IphoneController::class, 'update'])->middleware(['admin'])->name('update.iphone');
// Delete
Route::delete('delete/iphone/{iphone}', [IphoneController::class, 'destroy'])->middleware(['admin'])->name('delete.iphone');

// ---------------BLOG---------------
// POST
// Create
Route::get('create/post', [PostController::class, 'create'])->middleware(['editer'])->name('create.post');
Route::post('store/post', [PostController::class, 'store'])->middleware(['editer'])->name('store.post');
// Edit
Route::get('edit/post/{post}', [PostController::class, 'edit'])->middleware(['editer'])->name('edit.post');
Route::put('update/post/{post}', [PostController::class, 'update'])->middleware(['editer'])->name('update.post');
// Delete
Route::delete('delete/post/{post}', [PostController::class, 'destroy'])->middleware(['editer'])->name('delete.post');

// CATEGORY
// Create
Route::get('create/category', [CategoryController::class, 'create'])->middleware(['admin'])->name('create.category');
Route::post('store/category', [CategoryController::class, 'store'])->middleware(['admin'])->name('store.category');
// Edit
Route::get('edit/category/{category}', [CategoryController::class, 'edit'])->middleware(['admin'])->name('edit.category');
Route::put('update/category/{category}', [CategoryController::class, 'update'])->middleware(['admin'])->name('update.category');
// Delete
Route::delete('delete/category/{category}', [CategoryController::class, 'destroy'])->middleware(['admin'])->name('delete.category');

// TAG
// Create
Route::get('create/tag', [TagController::class, 'create'])->middleware(['admin'])->name('create.tag');
Route::post('store/tag', [TagController::class, 'store'])->middleware(['admin'])->name('store.tag');
// Edit
Route::get('edit/tag/{tag}', [TagController::class, 'edit'])->middleware(['admin'])->name('edit.tag');
Route::put('update/tag/{tag}', [TagController::class, 'update'])->middleware(['admin'])->name('update.tag');
// Delete
Route::delete('delete/tag/{tag}', [TagController::class, 'destroy'])->middleware(['admin'])->name('delete.tag');

// MAP
// Edit
Route::get('edit/map/{map}', [MapController::class, 'edit'])->middleware(['admin'])->name('edit.map');
Route::put('update/map/{map}', [MapController::class, 'update'])->middleware(['admin'])->name('update.map');


// GENRE
// Create
Route::get('create/genre', [GenreController::class, 'create'])->middleware(['admin'])->name('create.genre');
Route::post('store/genre', [GenreController::class, 'store'])->middleware(['admin'])->name('store.genre');
// Edit
Route::get('edit/genre/{genre}', [GenreController::class, 'edit'])->middleware(['admin'])->name('edit.genre');
Route::put('update/genre/{genre}', [GenreController::class, 'update'])->middleware(['admin'])->name('update.genre');
// Delete
Route::delete('delete/genre/{genre}', [GenreController::class, 'destroy'])->middleware(['admin'])->name('delete.genre');

// JOB
// Create
Route::get('create/job', [JobController::class, 'create'])->middleware(['admin'])->name('create.job');
Route::post('store/job', [JobController::class, 'store'])->middleware(['admin'])->name('store.job');
// Edit
Route::get('edit/job/{job}', [JobController::class, 'edit'])->middleware(['admin'])->name('edit.job');
Route::put('update/job/{job}', [JobController::class, 'update'])->middleware(['admin'])->name('update.job');
// Delete
Route::delete('delete/job/{job}', [JobController::class, 'destroy'])->middleware(['admin'])->name('delete.job');

// ROLE
// Create
Route::get('create/role', [RoleController::class, 'create'])->middleware(['admin'])->name('create.role');
Route::post('store/role', [RoleController::class, 'store'])->middleware(['admin'])->name('store.role');
// Edit
Route::get('edit/role/{role}', [RoleController::class, 'edit'])->middleware(['admin'])->name('edit.role');
Route::put('update/role/{role}', [RoleController::class, 'update'])->middleware(['admin'])->name('update.role');
// Delete
Route::delete('delete/role/{role}', [RoleController::class, 'destroy'])->middleware(['admin'])->name('delete.role');

// TITLE
// Create
Route::get('create/title', [TitleController::class, 'create'])->middleware(['admin'])->name('create.title');
Route::post('store/title', [TitleController::class, 'store'])->middleware(['admin'])->name('store.title');
// Edit
Route::get('edit/title/{title}', [TitleController::class, 'edit'])->middleware(['admin'])->name('edit.title');
Route::put('update/title/{title}', [TitleController::class, 'update'])->middleware(['admin'])->name('update.title');
// Delete
Route::delete('delete/title/{title}', [TitleController::class, 'destroy'])->middleware(['admin'])->name('delete.title');

// IMAGE
// Create
Route::get('create/image', [ImageController::class, 'create'])->middleware(['admin'])->name('create.image');
Route::post('store/image', [ImageController::class, 'store'])->middleware(['admin'])->name('store.image');
// Edit
Route::get('edit/image/{image}', [ImageController::class, 'edit'])->middleware(['admin'])->name('edit.image');
Route::put('update/image/{image}', [ImageController::class, 'update'])->middleware(['admin'])->name('update.image');
// Delete
Route::delete('delete/image/{image}', [ImageController::class, 'destroy'])->middleware(['admin'])->name('delete.image');

// Image en first dans le carousel
Route::put('/admin/image/{image}/firstimage', [ImageController::class, 'firstImage'])->name('firstImage');

// ---------DASHBOARD---------
Route::get('/dashboard', function () {
    return view('back.dashboard');
})->middleware(['auth'])->name('dashboard');

//  VALIDATE
// Index
Route::get('/admin/validate', [ValidationController::class, 'index'])->middleware(['webmaster'])->name('admin.validate');
// Validate Post
Route::put('/admin/validate/post/{id}', [ValidationController::class, 'updatePost'])->middleware(['webmaster'])->name('validate.post');
// Validate User
Route::put('/admin/validate/user/{id}', [ValidationController::class, 'updateUser'])->middleware(['webmaster'])->name('validate.user');

// DELETE - CORBEILLE
// Index
Route::get('/admin/corbeille', [CorbeilleController::class, 'index'])->middleware(['webmaster'])->name('admin.corbeille');
// Post corbeille
Route::put('/admin/corbeille/post/{id}', [CorbeilleController::class, 'corbeillePost'])->middleware(['webmaster'])->name('corbeille.post');
// Recup post
Route::put('/admin/recup/post/{id}', [CorbeilleController::class, 'recupPost'])->middleware(['webmaster'])->name('recup.post');
// Delete Post For Real
Route::delete('/admin/corbeille/post/{id}/delete', [CorbeilleController::class, 'deletePostForReal'])->middleware(['webmaster'])->name('delete.post.forreal');






require __DIR__.'/auth.php';

