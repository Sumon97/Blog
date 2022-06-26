<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;



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



Route::get('/', [App\Http\Controllers\PageController::class, 'front'])->name('front');



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('/Post', PostController::class);

Route::post('/Post', [App\Http\Controllers\PostController::class, 'store']); 

Route::post('/Post/create', [App\Http\Controllers\PostController::class, 'create'])->name('Post.create'); 

Route::get('/Post/{Post}', [App\Http\Controllers\PostController::class, 'show'])->name('Post.show');

Route::get('/Post/{Post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('Post.edit'); 

Route::post('/Post/{Post}', [App\Http\Controllers\PostController::class, 'update'])->name('Post.update');




//Category Controller 
Route::resource('/Category', CategoryController::class);

Route::post('/Category', [App\Http\Controllers\CategoryController::class, 'store']); 

Route::post('/Category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('Category.create'); 

Route::get('/Category/{Category}/{name}', [App\Http\Controllers\CategoryController::class, 'show'])->name('Category.show');

Route::get('/Category/{Category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('Category.edit'); 

Route::post('/Category/{Category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('Category.update');


//Tag Controller 
Route::resource('/Tag', TagController::class);

Route::post('/Tag', [App\Http\Controllers\TagController::class, 'store']); 

Route::post('/Tag/create', [App\Http\Controllers\TagController::class, 'create'])->name('Tag.create'); 

Route::get('/Tag/{Tag}', [App\Http\Controllers\TagController::class, 'show'])->name('Tag.show');

Route::get('/Tag/{Tag}/edit', [App\Http\Controllers\TagController::class, 'edit'])->name('Tag.edit'); 

Route::post('/Tag/{Tag}', [App\Http\Controllers\TagController::class, 'update'])->name('Tag.update');



//Comment Controller 
Route::resource('/Comment', CommentController::class);

Route::post('/Comment', [App\Http\Controllers\CommentController::class, 'store']); 

Route::get('/Comment/{Comment}', [App\Http\Controllers\CommentController::class, 'show'])->name('Comment.show');

Route::get('/Comment/{Comment}/edit', [App\Http\Controllers\CommentController::class, 'edit'])->name('Comment.edit'); 

Route::post('/Comment/{Comment}', [App\Http\Controllers\CommentController::class, 'update'])->name('Comment.update');

















