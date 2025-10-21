<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AaasController;


// === Routes du site AAAS ===
Route::get('/', [AaasController::class, 'home'])->name('home');
Route::get('/a-propos', [AaasController::class, 'apropos'])->name('a-propos');
Route::get('/missions', [AaasController::class, 'missions'])->name('missions');
Route::get('/partenaires', [AaasController::class, 'partenaires'])->name('partenaires');
Route::get('/actualites', [AaasController::class, 'actualites'])->name('actualites');
Route::get('/evenements', [AaasController::class, 'evenements'])->name('evenements');
Route::get('/contact', [AaasController::class, 'contact'])->name('contact');
Route::post('/contact', [AaasController::class, 'send'])->name('contact.send');