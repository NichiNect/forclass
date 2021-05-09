<?php

use App\Http\Controllers\Frontend\ArticleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/students', [HomeController::class, 'students'])->name('home.students');
Route::get('/schedules', [HomeController::class, 'schedules'])->name('home.schedules');
Route::get('/pickets', [HomeController::class, 'pickets'])->name('home.pickets');

Route::get('/articles', [ArticleController::class, 'index'])->name('frontend.articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('frontend.articles.show');