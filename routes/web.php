<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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



Route::middleware('auth')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/users', [App\Http\Controllers\admin\UserController::class, 'index'])->name('admin.user.index');
    Route::get('/users/create', [App\Http\Controllers\admin\UserController::class, 'create'])->name('admin.user.create');
    Route::get('/users/show/{userId}', [App\Http\Controllers\admin\UserController::class, 'show'])->name('admin.user.show');
    Route::get('/users/edit/{userId}', [App\Http\Controllers\admin\UserController::class, 'edit'])->name('admin.user.edit');
});
