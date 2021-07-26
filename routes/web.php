<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressbookController;
use App\Http\Controllers\ContactConttroller;


Route::get('/',[AddressbookController::class, 'index'])->name('home');
Route::get('/show',[AddressbookController::class, 'show'])->name('show');
Route::post('/show',[AddressbookController::class, 'create'])->name('create');
Route::get('/change',[AddressbookController::class, 'change'])->name('change');

Route::get('/edit/{id}',[AddressbookController::class, 'edit'])->name('edit');
Route::put('/edit/{id}',[AddressbookController::class, 'update'])->name('update');

Route::get('/display',[AddressbookController::class, 'display'])->name('display');
Route::get('/delete',[AddressbookController::class, 'destroy'])->name('delete');
Route::get('/delete/{id}',[AddressbookController::class, 'destroy1']);

Route::get('/contact',[ContactConttroller::class, 'show'])->name('contact');



// Route::get('/',[StudentController::class, 'index'])->name('index');
// Route::post('/',[StudentController::class, 'create'])->name('create');
// Route::get('/edit/{id}',[StudentController::class, 'edit'])->name('edit');
// Route::put('/edit/{id}',[StudentController::class, 'update'])->name('update');
// Route::get('/delete/{id}',[StudentController::class, 'destroy'])->name('destroy');


