<?php

use App\Http\Controllers\allPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/home',[appController::class,'index'])->name('show.index');
//all post
Route::get('/allPost',[allPostController::class,'allPost'])->name('all.post.show');
//post route
Route::get('/home',[PostController::class,'index'])->name('show.post');
Route::get('/post/create',[PostController::class,'showCreatePost'])->name('show.create.post');
Route::post('/post/create',[PostController::class,'createPost'])->name('create.post');

//show single post
Route::get('/post/{id}',[PostController::class,'showSinglePost'])->name('show.single.post');

//post delete
Route::delete('/post/delete/{id}',[PostController::class,'destroy'])->name('post.delete');
//edit post
Route::get('/post/{id}/edit',[PostController::class,'showEditPost'])->name('show.edit.post');
Route::post('/post/{id}/update',[PostController::class,'updatePost'])->name('edit.post');



