<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/blogs', [BlogController::class, 'index']);

// Route::get('/blogs/create', [BlogController::class,'create']);

// Route::post('/blogs', [BlogController::class,'store']);

// Route::get('/blogs/{blog}', [BlogController::class,'show']);

Route::resource('blogs', BlogController::class);

Route::get('/contact', function () {
    return view('contact');
});
