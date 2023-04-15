<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/blog-details/{slug}',[HomeController::class,'blogDetails'])->name('blog.details');
Route::get('/blogUser-register',[HomeController::class,'blogUserRegister'])->name('blogUser.register');
Route::post('/new-user',[HomeController::class,'saveUser'])->name('new.user');
Route::get('/customer-logout',[HomeController::class,'customerLogout'])->name('customer.logout');
Route::get('/customer-login',[HomeController::class,'customerLogin'])->name('customer.login');
Route::post('/customer-login',[HomeController::class,'customerLoginCheck'])->name('customer.login');
Route::get('/category-sort/{id}',[HomeController::class,'categorySort'])->name('category.sort');


Route::group(['middleware'=>'blogUser'],function(){
    Route::post('/new-comment',[ HomeController::class,'saveComment'])->name('new.comment');

});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashborad');


    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add.category');
    Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage.category');
    Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new.category');
    Route::get('/edit-category/{category_id}',[CategoryController::class,'editCategory'])->name('edit.category');
    Route::post('/update-category',[CategoryController::class,'categoryUpdate'])->name('update.category');
    Route::post('/delete-category',[CategoryController::class,'categoryDelete'])->name('delete.category');
    Route::get('/update-categoryStatus/{category_id}',[CategoryController::class,'updateCategoryStatus'])->name('update.categoryStatus');


    Route::get('/add-blog', [BlogController::class,'addblog'])->name('add.blog');
    Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('new.blog');
    Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('manage.blog');
    Route::get('/edit-blog/{blog_id}',[BlogController::class,'editBlog'])->name('edit.blog');
    Route::post('/update-blog',[BlogController::class,'blogUpdate'])->name('update.blog');
    Route::post('/delete-blog',[BlogController::class,'blogDelete'])->name('delete.blog');
    Route::get('/update-blogStatus/{blog_id}',[BlogController::class,'updateBlogStatus'])->name('update.blogStatus');

    Route::get('/author', [AuthorController::class,'index'])->name('author');
    Route::post('/save-author', [AuthorController::class,'saveAuthor'])->name('new.author');

});
