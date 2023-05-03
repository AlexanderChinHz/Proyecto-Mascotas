<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\index;
use App\mail\notification;
use App\http\Controllers\contacts;
use App\http\Controllers\SendEmail;
use App\http\Controllers\about;
use App\http\Controllers\tienda;
use App\http\Controllers\paquetes;

// use App\Mail\ContactanosMailable;
// use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[index::class,'index'])->name('index');

Route::get('/contact',[contacts::class,'contacts'])->name('contact');

Route::get('/contactinfo',[SendEmail::class,'index'])->name("contact.index");

Route::post('/mostrarcontact',[SendEmail::class,'store'])->name('contact.store');

Route::get('/about',[about::class,'about'])->name('about');

Route::get('/tienda',[tienda::class,'index'])->name('tienda');

Route::get('/paquete',[paquetes::class,'index'])->name('paquete');

