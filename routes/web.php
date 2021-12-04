<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CursoController;
use \App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::resource('cursos', CursoController::class);
Route::view('about','about')->name('about');

Route::get('contact', [ContactsController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactsController::class, 'store'])->name('contact.store');
