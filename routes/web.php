<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');

Route::resource('articles', ArticleController::class)->names('articles');
