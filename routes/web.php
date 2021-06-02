<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BaseController::class, 'home']);
Route::get('/services', [BaseController::class, 'services']);
Route::get('/company', [BaseController::class, 'company']);
Route::get('/contact_us', [BaseController::class, 'contact_us']);

Route::get('/admin', [AdminController::class, 'index'])->name('login');
Route::post('/admin', [AdminController::class, 'makeLogin']);

Route::group(['middleware' => 'auth:admin'], function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
});
