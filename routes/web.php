<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/ideas',[App\Http\Controllers\BlogController::class, 'ideas'])->name('ideas');
Route::get('/rmprofiles',[App\Http\Controllers\BlogController::class, 'rms'])->name('rmprofiles');
Route::get('/clientprofiles',[App\Http\Controllers\BlogController::class, 'clientprofiles'])->name('clientprofiles');


Route::get('/client',[App\Http\Controllers\BlogController::class, 'client'])->name('client');
Route::get('/clientblogs',[App\Http\Controllers\BlogController::class, 'fullyproceed'])->name('clientblogs');
Route::get('/clientRms',[App\Http\Controllers\BlogController::class, 'rmss'])->name('clientRms');
Route::get('/clientProfile', function () {
    return view('client.myprofile');
})->name('clientProfile');

// Route::get('/viewblog', function () {
//     return view('viewblog');
// })->name('viewblog');
Route::get('/viewblog/{id}',[App\Http\Controllers\BlogController::class, 'view'])->name('viewblog');
Route::get('/assign/{id}',[App\Http\Controllers\BlogController::class, 'assign'])->name('assign');
Route::get('/viewclientblog/{id}',[App\Http\Controllers\BlogController::class, 'pro'])->name('viewclientblog');

Route::get('/assigned',[App\Http\Controllers\BlogController::class, 'fullassigned'])->name('assigned');
Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/addblog', function () {
    return view('addblog');
})->name('addblog');
Route::get('/manager',[App\Http\Controllers\BlogController::class, 'manager'])->name('manager');

// Route::get('/manager', function () {
//     return view('manager');
// })->name('manager');;
Route::get('/profile', function () {
    return view('creatorprofile');
})->name('profile');

Route::get('/rmprofile', function () {
    return view('manager.rmprofile');
})->name('rmprofile');
Route::post('/add-blog', [App\Http\Controllers\BlogController::class, 'store'])->name('add-blog');
Route::post('/publish', [App\Http\Controllers\BlogController::class, 'update'])->name('publish');
Route::post('/assigned', [App\Http\Controllers\BlogController::class, 'assigned'])->name('assigned');
Route::post('/proceed', [App\Http\Controllers\BlogController::class, 'failupdate'])->name('proceed');


Route::post('/logout', [App\Http\Controllers\BlogController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');