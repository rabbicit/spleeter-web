<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\AjaxSpleeterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'indexPage'])->name('index');
Route::get('contact', [PageController::class, 'contactPage'])->name('contact');
Route::get('about-us', [PageController::class, 'aboutPage'])->name('about');
Route::post('contacy/email', [ContactController::class, 'saveContact']);
Route::get('/reload-captcha', [ContactController::class, 'reloadCaptcha']);
Route::get('free-stems', [PageController::class, 'freeStems'])->name('freestems');



Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::post('store-data', [AjaxSpleeterController::class, 'sore_files']);


Route::get('blog/', [BlogController::class, 'index'])->name('blog');
Route::get('{slug}', [BlogController::class, 'BlogDetails']);


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});



Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/blogs', [BlogController::class, 'adminBloglist'])->name('admin.allblog');
    Route::get('/admin/blog/add', [BlogController::class, 'addBlogForm'])->name('admin.adblog');
    Route::post('/admin/blogs/add', [BlogController::class, 'addNewBlog'])->name('addnewblog');
    Route::get('/admin/blog/edit/{blogid}', [BlogController::class, 'editBlog'])->name('admin.editblog');
    Route::post('/admin/blog/update/{id}', [BlogController::class, 'updateBlog'])->name('updateblog');
    Route::post('/admin/blog/delete/{id}', [BlogController::class, 'deletePost'])->name('deleteblog');
    Route::get('/admin/settings', [AdminDashboardController::class, 'adminSettings'])->name('settings');

    
});