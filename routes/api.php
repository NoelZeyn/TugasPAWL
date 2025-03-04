<?php
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
Route::resource('posts', PostController::class);
Route::resource('posts.comments', CommentController::class);