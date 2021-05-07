<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/template', function() {
    return view('layouts.admin');
});

Route::get('/frontend', function () {
    return view('layouts.app');
});

Route::get('/auth', function() {
    return view('layouts.auth');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
