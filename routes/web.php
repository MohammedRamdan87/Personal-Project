<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\FormController;


Route::get('/', [PersonalController::class, 'index'])->name('index');
Route::get('/contact', [PersonalController::class, 'contact'])->name('contact');
Route::get('/projects', [PersonalController::class, 'projects'])->name('projects');
Route::get('/resume', [PersonalController::class, 'resume'])->name('resume');
Route::post('/contact', [FormController::class, 'contact_data'])->name('forms.contact');

