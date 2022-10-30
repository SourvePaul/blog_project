<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[BlogController::class,'index'])->name('/');
Route::get('/blog-details',[BlogController::class,'blogDetails'])->name('blog-details');
Route::get('/contact',[BlogController::class,'blogContact'])->name('contact');
Route::get('/about',[BlogController::class,'blogAbout'])->name('about');
Route::get('/category',[BlogController::class,'blogCategory'])->name('category');
Route::get('/search-blog',[BlogController::class,'blogSearch'])->name('search-blog');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })
//        ->name('dashboard');

        Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
});
