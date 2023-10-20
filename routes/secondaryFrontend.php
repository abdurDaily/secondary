<?php


use App\Http\Controllers\Frontend\Secondary\IndexController;
use Illuminate\Support\Facades\Route;


  Route::get('/', [IndexController::class, 'index'])->name('secondary.index');
  Route::get('/about', [IndexController::class, 'about'])->name('secondary.about');
