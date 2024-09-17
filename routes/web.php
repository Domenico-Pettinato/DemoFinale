<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


Route::resource('articles', ArticleController::class)->except('index');
Route::get('/', [ArticleController::class, 'index'])->name('article.index');