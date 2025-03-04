<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/api/posts', [PostController::class, 'index']);
Route::post('/api/posts', [PostController::class, 'store']);
Route::get('/api/posts/{id}', [PostController::class, 'show']);
Route::put('/api/posts/{id}', [PostController::class, 'update']);
Route::delete('/api/posts/{id}', [PostController::class, 'destroy']);

Route::get('/api/comments/{postId}', [CommentController::class, 'index']);
Route::post('/api/comments/{postId}', [CommentController::class, 'store']);
Route::get('/api/comments/{postId}/{id}', [CommentController::class, 'show']);
Route::put('/api/comments/{postId}/{id}', [CommentController::class, 'update']);
Route::delete('/api/comments/{postId}/{id}', [CommentController::class, 'destroy']);
