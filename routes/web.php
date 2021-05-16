<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Frontend\ArticleController;

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

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('students')->group(function() {
        Route::get('', [StudentController::class, 'index'])->name('admin.students.index');
        Route::get('/create-new-student', [StudentController::class, 'create'])->name('admin.students.create');
        Route::post('/store-new-student', [StudentController::class, 'store'])->name('admin.students.store');
        Route::get('/data-student/{id}', [StudentController::class, 'show'])->name('admin.students.show');
        Route::get('/edit-data-student/{id}', [StudentController::class, 'edit'])->name('admin.students.edit');
        Route::put('/edit-data-student/{id}', [StudentController::class, 'update'])->name('admin.students.update');
        Route::delete('/delete-data-student/{id}', [StudentController::class, 'destroy'])->name('admin.students.destroy');
    });
});