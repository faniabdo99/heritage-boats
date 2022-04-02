<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('delete-user' , [UserController::class, 'postDeleteUser'])->name('delete-user-api');


