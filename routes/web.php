<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\WorkWithUsController;
use Illuminate\Support\Facades\Route;

// resource controller in cui è stata esclusa la rotta 'index', che viene gestita separatamente, ma sempre all'interno del controller ArticleController
Route::resource('articles', ArticleController::class)->except('index');
Route::get('/', [ArticleController::class, 'index'])->name('article.index');

// routes categories filter
Route::get('/articles/category/{category}', [PageController::class, 'filterByCategory'])->name('articles.filterByCategory');
Route::get('/articles/category/{category}', [PageController::class, 'filterByCategory'])->name('articles.filterByCategory');


// routes work with us + mailtrap
Route::get('/workwithus', [WorkWithUsController::class, 'workwithus'])->name('workwithus');
Route::post('/workwithus', [WorkWithUsController::class, 'submitapplication'])->name('submit_application');
Route::post('/register', [RegisterController::class, 'submitapplication'])->name('register');

// route reserved area
Route::get('/reserved/index', [RevisorController::class, 'index'])->name('revisor.index');
Route::patch('accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('reject/{article}', [RevisorController::class, 'reject'])->name('reject');

//rotta per effettuare la ricerca 
Route::get('/search/article', [PageController::class, 'searchArticles']) ->name('article.search');

//rotta per la lingua
Route::post('/lingua/{lang})', [PageController::class, 'setLanguage'])->name('setLocale');