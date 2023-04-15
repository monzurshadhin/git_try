<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;


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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('blog-details/{slug}',[HomeController::class,'blogDetails'])->name('blog.details');
Route::get('/blogUser-register',[HomeController::class,'blogUserRegister'])->name('blogUser.register');
Route::post('/new-user',[HomeController::class,'saveUser'])->name('new.user');
Route::get('/customer-logout',[HomeController::class,'customerLogout'])->name('customer.logout');
Route::get('/customer-login',[HomeController::class,'customerLogin'])->name('customer.login');
Route::get('/customer-login-check',[HomeController::class,'customerLoginCheck'])->name('customer.login.check');
Route::post('/customer-login',[HomeController::class,'customerLogInCheck'])->name('customer.login.check');





Route::group(['middleware'=>'blogUser'],function (){
    Route::post('/new-comment',[HomeController::class,'saveComment'])->name('new.comment');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

//    category
    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add.category');
    Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new.category');
    Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage.category');
    Route::get('/edit-category/{c_id}',[CategoryController::class,'editCategory'])->name('edit.category');
    Route::post('/update-category',[CategoryController::class,'updateCategory'])->name('update.category');
    Route::get('/update-status/{c_id}',[CategoryController::class,'updateStatus'])->name('update.status');
    Route::post('/delete-category',[CategoryController::class,'deleteCategory'])->name('delete.category');

//    blog
    Route::get('/add-blog',[BlogController::class,'addBlog'])->name('add.blog');
    Route::get('/manage-clog',[BlogController::class,'manageBlog'])->name('manage.blog');
    Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('new.Blog');
    Route::get('/update-blogStatus/{b_id}',[BlogController::class,'updateBlogStatus'])->name('update.blogStatus');
    Route::post('/delete-blog',[BlogController::class,'deleteBlog'])->name('delete.blog');
    Route::get('/edit-blog/{b_id}',[BlogController::class,'editBlog'])->name('edit.blog');
    Route::post('/update-blog',[BlogController::class,'updateBlog'])->name('update.Blog');

});
