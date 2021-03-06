<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts', function () {
    $posts = [1, 2, 3, 4, 5];
    return view('posts.list', ['posts' => $posts]);
});

Route::get('/posts/{id}', function () {
    return view('posts.show');
});
