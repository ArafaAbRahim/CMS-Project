<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Models\Page;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $home = Page::where('page_title', 'home')->get();
    return view('home', ['home' => $home]);
});

Route::get('/home', [BaseController::class, 'home']);
Route::get('/services', [BaseController::class, 'services']);
Route::get('/company', [BaseController::class, 'company']);
Route::get('/contact_us', [BaseController::class, 'contact_us']);

Route::get('/admin', [AdminController::class, 'index'])->name('login');
Route::post('/admin', [AdminController::class, 'makeLogin']);

Route::group(['middleware' => 'auth:admin'], function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard']);

    Route::get('/page-add', [PageController::class, 'addPage'])->name('page-add');
    Route::post('/page-create', [PageController::class, 'createPage'])->name('page-create');
    Route::get('/company-page-add', [PageController::class, 'ourcompany'])->name('company.page-add');
    
    //Post routes
    Route::get('/post-add', [PostController::class, 'create'])->name('post-add');
    Route::post('/post-add/{post_id?}', [PostController::class, 'store'])->name('post-store');
    Route::get('/post-show', [PostController::class, 'show'])->name('post-show');
    Route::get('/post-edit/{post_id?}', [PostController::class, 'create'])->name('post-edit');
    Route::post('/post-delete', [PostController::class, 'delete'])->name('post-delete');
});
