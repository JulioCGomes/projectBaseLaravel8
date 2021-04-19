<?php

/**
 * Posso importar vários controller.
 */
use App\Http\Controllers\{
    PostController
};

use Illuminate\Support\Facades\Route;

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('post.destroy');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');

Route::get('/', function () {
    return view('welcome');
});
