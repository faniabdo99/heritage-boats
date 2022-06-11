<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClubController;

Route::post('delete-user' , [UserController::class, 'postDeleteUser'])->name('delete-user-api');
Route::post('delete-contact-request' , [ContactController::class, 'postDeleteContact'])->name('delete-contact-request-api');
Route::post('delete-category' , [CategoryController::class, 'postDeleteCategory'])->name('delete-category-api');
Route::post('delete-blog' , [BlogController::class, 'postDeleteBlog'])->name('delete-blog-api');
Route::post('delete-club' , [ClubController::class, 'postDeleteClub'])->name('delete-club-api');
Route::post('upload-club-images' , [ClubController::class, 'postGalleryImages'])->name('upload-club-gallery-images');



