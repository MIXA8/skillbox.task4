<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::put('post/{id}/update', [App\Http\Controllers\Post\PostController::class, 'update'])->name('post.update');
Route::post('post/store',[App\Http\Controllers\Post\PostController::class,'store'])->name('post.store');
Route::get('posts',[App\Http\Controllers\News\NewsController::class,'index'])->name('post.index');
Route::get('post/{slug}/',[App\Http\Controllers\News\NewsController::class,'application'])->name('post.application');
