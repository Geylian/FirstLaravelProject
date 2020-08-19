<?php

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
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/users/{name}/{age}', function ($name, $age) {
    return 'Hello ' . $name . ', you are ' . $age . ' years old ;p';
});
