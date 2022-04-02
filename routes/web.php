<?php

use Illuminate\Support\Facades\Route;
//Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AcknowledgmentController;
use App\Http\Controllers\ComingSoonController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;

Route::get('feed-db', [TestController::class, 'feedDb']); //To be ignored by Front end team
Route::get('/', [HomeController::class , 'getHomepage'])->name('home'); // The homepage: resources/views/home.blade.php
Route::get('/about', [AboutController::class , 'getAbout'])->name('about'); // About us: resources/views/static/about.blade.php
Route::get('/contact', [ContactController::class , 'getContact'])->name('contact.get'); // Contact us: resources/views/contact/contact.blade.php
Route::post('/contact', [ContactController::class , 'postContact'])->name('contact.post');
Route::get('/acknowledgments', [AcknowledgmentController::class , 'getAcknowledgments'])->name('acknowledgments'); // Acknowledgments: resources/views/static/acknowledgments.blade.php
Route::get('/coming-soon', [ComingSoonController::class , 'getComingSoon'])->name('comingSoon'); // Coming Soon: resources/views/static/coming-soon.blade.php
/*
    AUTH SYSTEM
    Auth routes
    Middleware: guest
*/
Route::middleware('guest')->group(function(){
    Route::get('login' , [AuthController::class, 'getLogin'])->name('login.get');
    Route::post('login' , [AuthController::class, 'postLogin'])->name('login.post');
});

/*
    ADMIN PANEL
    Admin panel routes:
    Middleware: admin
    Prefix: /admin/
    */
Route::group(['prefix' => 'admin' , 'middleware' => 'admin'] , function(){
    Route::get('/' , [AdminController::class , 'getHome'])->name('admin.home');
    Route::get('logout' , [AuthController::class, 'logout'])->name('logout');
    Route::prefix('admins')->group(function(){
        Route::get('/' , [UserController::class, 'getAll'])->name('admin.admins.all');
        Route::get('/new' , [UserController::class, 'getNew'])->middleware('super_admin')->name('admin.admins.getNew');
        Route::post('/new' , [UserController::class, 'postNew'])->middleware('super_admin')->name('admin.admins.postNew');
        Route::get('/edit/{id}' , [UserController::class, 'getEdit'])->middleware('super_admin')->name('admin.admins.getEdit');
        Route::post('/edit/{id}' , [UserController::class, 'postEdit'])->middleware('super_admin')->name('admin.admins.postEdit');
    });
});
