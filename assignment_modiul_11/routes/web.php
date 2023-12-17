<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\resourceController;
use Illuminate\Support\Facades\Route;

Route::get('/home',[homeController::class,'home']);



Route::resource('/store',resourceController::class)->only(['index','store']);
