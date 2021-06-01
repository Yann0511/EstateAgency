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

Route::get('/', function () 
{
    return view('pages.index');
});

Route::get('/immobporto', function () 
{
    return view('pages.index');
});


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::resource('user', 'App\Http\Controllers\UserController');
Route::post('update_avatar', [App\Http\Controllers\UserController::class, 'update_avatar'])->name('update_avatar');