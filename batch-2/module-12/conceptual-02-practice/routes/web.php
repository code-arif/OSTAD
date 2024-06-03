<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\tagController;

Route::get('/home',[homeController::class,'home'])->name('home.show');

//post route
Route::get('/post/create',[PostController::class,'showPostCreate'])->name('show.create.post');
Route::post('/post/create',[PostController::class,'createPost'])->name('create.post');
Route::get('/posts/all',[PostController::class,'allPost'])->name('show.all.post');
Route::get('/post/{id}',[PostController::class,'showSinglePost'])->name('show.single.post');
Route::get('/post/edit/{id}',[PostController::class,'showEditPost'])->name('show.edit.post');
Route::post('/post/edit/{id}',[PostController::class,'editPost'])->name('edit.post');
Route::delete('/post/delete/{id}',[PostController::class,'deletePost'])->name('delete.post');

//category route
Route::get('/category/create',[CategoryController::class,'showCreateCategory'])->name('show.create.category');
Route::post('/category/create',[CategoryController::class,'createCategory'])->name('create.category');
Route::get('/category/all',[CategoryController::class,'allCategory'])->name('show.all.category');
Route::get('/category/edit/{id}',[CategoryController::class,'showEditCategory'])->name('show.edit.category');
Route::post('/category/edit/{id}',[CategoryController::class,'editCategory'])->name('edit.category');
Route::delete('category/delete/{id}',[CategoryController::class,'deleteCategory'])->name('delete.category');

//tag route
Route::get('/tag/create',[tagController::class,'showCreateTag'])->name('show.create.tag');
Route::post('/tag/create',[tagController::class,'createTag'])->name('create.tag');
Route::get('/tag/all',[tagController::class,'allTags'])->name('show.all.tag');
Route::get('/tag/edit/{id}',[tagController::class,'showEditTag'])->name('show.edit.tag');
Route::post('/tag/edit/{id}',[tagController::class,'editTag'])->name('edit.tag');
Route::delete('tag/delete/{id}',[tagController::class,'deleteTag'])->name('delete.tag');
