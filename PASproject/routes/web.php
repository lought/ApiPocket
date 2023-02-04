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
Route::get('/categories', [App\Http\Controllers\HomeController::class, 'categories'])->name('categories');
Route::get('/expenses', [App\Http\Controllers\HomeController::class, 'expenses'])->name('expenses');
Route::get('/income', [App\Http\Controllers\HomeController::class, 'income'])->name('income');
