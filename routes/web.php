<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

Route::get('/', [PublicController::class, 'home'])->name('welcome');
//Rotta per visualizzare la vista di dettaglio dell'articolo
Route::get('/article/{article}/show', [ArticleController::class, 'show'])->name('articles.show');
//Rotta per creare un articolo
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
//Rotta per salvare nel DB l'articolo
Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
//Rotta per editare l'articolo
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
//Rotta per salvare nel DB l'articolo editato
Route::post('/articles/{article}/update', [ArticleController::class, 'update'])->name('articles.update');
//Rotta per visualizzare tutti gli articoli presenti nel DB
Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');
//Rotta per cancellare dal DB un articolo
Route::delete('/articles/{article}/delete', [ArticleController::class, 'delete'])->name('articles.delete');
