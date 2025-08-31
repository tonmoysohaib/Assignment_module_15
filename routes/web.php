<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ResumeController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index']);
Route::get('contact',[ContactController::class,'index'])->name('contact.index');
Route::get('projects',[ProjectsController::class,'index']);
Route::get('resume',[ResumeController::class,'index']);
Route::post('contact/submit',[ContactController::class,'submit'])->name('contact.submit');
Route::get('/contact/confirmation', [ContactController::class, 'confirmation'])->name('contact.confirmation');

