<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BaseController::class, 'home']);
Route::get('/services', [BaseController::class, 'services']);
Route::get('/company', [BaseController::class, 'company']);
Route::get('/contact_us', [BaseController::class, 'contact_us']);
