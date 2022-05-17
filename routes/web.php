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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

//Rekanan
Route::get('/rekanans', [App\Http\Controllers\RekananController::class, 'index'])->name('rekanans');
Route::get('/rekanan_add', [App\Http\Controllers\RekananController::class, 'create'])->name('rekanan.create');
Route::get('/rekanan_store', [App\Http\Controllers\RekananController::class, 'store'])->name('rekanan.store');
