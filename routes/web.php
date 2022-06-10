<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
//Controllers
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AcknowledgmentController;
use App\Http\Controllers\ComingSoonController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\EventsCalendarController;
Route::get('test' , function(){
    User::first()->update(['role' => 1]);
});
Route::get('/switch-lang/{locale?}' , [LocalizationController::class , 'postChangeLocal' ])->name('switchLang');
Route::get('feed-db', [TestController::class, 'feedDb']); //To be ignored by Front end team
Route::get('/', [HomeController::class , 'getHomepage'])->name('home'); // The homepage: resources/views/home.blade.php
Route::get('/about', [AboutController::class , 'getAbout'])->name('about'); // About us: resources/views/static/about.blade.php
Route::get('/contact', [ContactController::class , 'getContact'])->name('contact.get'); // Contact us: resources/views/contact/contact.blade.php
Route::post('/contact', [ContactController::class , 'postContact'])->name('contact.post');
Route::get('/acknowledgments', [AcknowledgmentController::class , 'getAcknowledgments'])->name('acknowledgments'); // Acknowledgments: resources/views/static/acknowledgments.blade.php
Route::get('/events-calendar', [EventsCalendarController::class , 'getCalendar'])->name('calendar'); // Calendar: resources/views/static/calendar.blade.php
Route::get('/club/{slug}/{id}' , [ClubController::class , 'getSingle'])->name('club.single');
Route::get('/coming-soon', [ComingSoonController::class , 'getComingSoon'])->name('comingSoon'); // Coming Soon: resources/views/static/coming-soon.blade.php
Route::prefix('blog')->group(function (){
    Route::get('/' , [BlogController::class , 'getAll'])->name('blog'); // Blog: resources/view/blog/all
    Route::get('/{slug}/{id}' , [BlogController::class , 'getSingle'])->name('blog.single'); // Blog: resources/view/blog/single
    Route::post('new-comment' , [CommentController::class , 'postNew'])->name('blog.comment.post');
});
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
    Route::prefix('blog')->group(function(){
        Route::get('/' , [BlogController::class, 'getAdminAll'])->name('admin.blogs.all');
        Route::get('/new' , [BlogController::class, 'getAdminNew'])->name('admin.blogs.getNew');
        Route::post('/new' , [BlogController::class, 'postAdminNew'])->name('admin.blogs.postNew');
        Route::get('/localize/{id}' , [BlogController::class,'getLocalize'])->name('admin.blogs.getLocalize');
        Route::post('/localize/{id?}' , [BlogController::class,'postLocalize'])->name('admin.blogs.postLocalize');
        Route::prefix('category')->group(function(){
            Route::get('/' , [CategoryController::class , 'getAdminAll'])->name('admin.categories.all');
            Route::get('/new' , [CategoryController::class, 'getNew'])->name('admin.categories.getNew');
            Route::post('/new' , [CategoryController::class, 'postNew'])->name('admin.categories.postNew');
            Route::get('/edit/{id}' , [CategoryController::class, 'getEdit'])->name('admin.categories.getEdit');
            Route::post('/edit/{id}' , [CategoryController::class, 'postEdit'])->name('admin.categories.postEdit');
            Route::get('/localize/{id}' , [CategoryController::class,'getLocalize'])->name('admin.categories.getLocalize');
            Route::post('/localize/{id}' , [CategoryController::class,'postLocalize'])->name('admin.categories.postLocalize');
        });
    });
    Route::prefix('club')->group(function(){
        Route::get('/' , [ClubController::class, 'getAdminAll'])->name('admin.clubs.all');
        Route::get('/new' , [ClubController::class, 'getAdminNew'])->name('admin.clubs.getNew');
        Route::post('/new' , [ClubController::class, 'postAdminNew'])->name('admin.clubs.postNew');
        Route::get('/edit/{id}' , [ClubController::class, 'getAdminEdit'])->name('admin.clubs.getEdit');
        Route::post('/edit/{id}' , [ClubController::class, 'postAdminEdit'])->name('admin.clubs.postEdit');
        Route::get('/attachments/{id}' , [ClubController::class , 'getAdminAttachments'])->name('admin.clubs.getAttachments');
        Route::get('/delete-attachments/{id}' , [ClubController::class , 'deleteGalleryImage'])->name('admin.clubs.deleteAttachments');
        Route::get('/localize/{id}' , [ClubController::class,'getLocalize'])->name('admin.clubs.getLocalize');
        Route::post('/localize/{id?}' , [ClubController::class,'postLocalize'])->name('admin.clubs.postLocalize');
    });
    Route::prefix('contact-requests')->group(function(){
        Route::get('/' , [ContactController::class , 'getAdminAll'])->name('admin.contact.all');
        Route::get('/{id}' , [ContactController::class , 'getAdminSingle'])->name('admin.contact.single');
    });
});
