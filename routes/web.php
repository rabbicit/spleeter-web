<?php

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
