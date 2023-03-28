<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/client', function () {
    return view('client');
});
Route::get('/viewblog', function () {
    return view('viewblog');
});
Route::get('/manager', function () {
    return view('manager');
});
Route::get('/profile', function () {
    return view('creatorprofile');
});