<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Models\Admin;


Route::get('/login', [LoginController::class, 'loginForm']);
Route::get('/main', [PostController::class, 'mainPage']);
Route::get('/admin', [PostController::class, 'adminPage']);
Route::get('/addPost', [PostController::class, 'postsPage']);