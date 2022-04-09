<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('delete-user' , [UserController::class, 'postDeleteUser'])->name('delete-user-api');
Route::post('delete-contact-request' , [ContactController::class, 'postDeleteContact'])->name('delete-contact-request-api');


