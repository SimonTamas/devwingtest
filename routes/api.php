<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/news', [NewsController::class, 'indexAction'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'showAction'])->name('newsPost');
