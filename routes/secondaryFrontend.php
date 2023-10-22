<?php

use App\Http\Controllers\FrontEnd\About\AboutController;
use App\Http\Controllers\Frontend\Club\ClubController;
use App\Http\Controllers\FrontEnd\Contact\ContactController;
use App\Http\Controllers\Frontend\Secondary\IndexController;
use Illuminate\Support\Facades\Route;

/** HOME PAGE  */
  Route::get('/', [IndexController::class, 'index'])->name('secondary.index');
  Route::get('/about', [IndexController::class, 'about'])->name('secondary.about');


/** CLUB SECTION INSIDE THE HOME PAGE  */
Route::get('/club-index', [ClubController::class, 'clunIndex'])->name('club.index');


/** ABOUT INDEX PAGE  */
Route::get('/about-index', [AboutController::class, 'aboutIndex'])->name('about.index');


/**  CONTACT  */
Route::get('/contact', [ContactController::class, 'contactIndex'] )->name('contact.index');