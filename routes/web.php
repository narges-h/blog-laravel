<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Models\Admin;


Route::get('/login', [LoginController::class, 'loginForm']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/main', [PostController::class, 'mainPage']);
Route::delete('/main/{id}' ,[PostController::class, 'delete']); 
Route::get('/main/{id}', [PostController::class, 'update']);
Route::put('/main/{id}', [PostController::class, 'updating']);
Route::get('/admin', [PostController::class, 'adminPage']);
Route::get('/addPost', [PostController::class, 'postsPage']);
Route::post('/addPost', [PostController::class, 'addPost']);
