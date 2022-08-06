<?php

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

// Post Routes
Route::resource('posts', PostController::class)->except(['index', 'show']);
Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/{user:username}/posts', [PostController::class, 'showUserPosts'])->name('posts.user.show');
Route::get('/{user:username}/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
