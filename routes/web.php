<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');

Route::resource('articles', ArticleController::class)->names('articles');
Route::resource('categories', CategoryController::class)
    ->only(['store'])
    ->names('categories');
