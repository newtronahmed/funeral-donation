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
Route::post('/donate', [App\Http\Controllers\HomeController::class, 'store'])->name('donate');
Route::get('/thankYou/{hashId}', [App\Http\Controllers\HomeController::class, 'thankYou'])->name('thankYou');
Route::get('/download/{hashId}', [App\Http\Controllers\HomeController::class, 'download'])->name('download');
// Route::get('/donate'[])

