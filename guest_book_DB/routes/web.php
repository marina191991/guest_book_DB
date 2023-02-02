<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\ModeratorController;


Route::get('/', [CommentController::class, 'show'])->name('comment');
Route::get('/moderator', [ModeratorController::class, 'show'])->name('moderator-comments');
Route::get('/moderator/delete', [ModeratorController::class, 'delete'])->name('moderator-comments-delete');
Route::get('/moderator/update', [ModeratorController::class, 'update'])->name('moderator-comments-edit');
