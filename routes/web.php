<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Backend\PostController;

use Illuminate\Support\Facades\Auth;
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

Route::get('/',[PageController::class, 'posts']);
Route::get('blog/{post}', 'PageController@post')->name('post');
Route::get('blog/{post}',[PageController::class, 'post'])->name('post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', 'App\Http\Controllers\Backend\PostController')
->middleware('auth')
->except('show');
