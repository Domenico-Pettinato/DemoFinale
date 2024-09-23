<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WorkWithUsController;
use Illuminate\Support\Facades\Route;

// resource controller in cui è stata esclusa la rotta 'index', che viene gestita separatamente, ma sempre all'interno del controller ArticleController
Route::resource('articles', ArticleController::class)->except('index');
Route::get('/', [ArticleController::class, 'index'])->name('article.index');

Route::get('/articles/category/{category}', [ArticleController::class, 'filterByCategory'])->name('articles.filterByCategory');
Route::get('/workwithus', [WorkWithUsController::class, 'workwithus'])->name('workwithus');
Route::post('/workwithus', [WorkWithUsController::class, 'workwithus'])->name('submit_application');
