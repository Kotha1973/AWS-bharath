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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/admin',[App\Http\Controllers\BlogController::class, 'index'])->name('admin');

Route::get('/client', function () {
    return view('client');
})->name('client');;
Route::get('/viewblog', function () {
    return view('viewblog');
})->name('viewblog');;
Route::get('/addblog', function () {
    return view('addblog');
})->name('addblog');;
Route::get('/manager', function () {
    return view('manager');
})->name('manager');;
Route::get('/profile', function () {
    return view('creatorprofile');
})->name('profile');;
Route::post('/add-blog', [App\Http\Controllers\BlogController::class, 'store'])->name('add-blog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
