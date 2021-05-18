<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserManagement;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ScheduleController;
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
    Route::prefix('users-management')->group(function() {
        Route::get('', [UserManagement::class, 'index'])->name('admin.users.index');
        Route::get('/create-new-user', [UserManagement::class, 'create'])->name('admin.users.create');
        Route::post('/create-new-user', [UserManagement::class, 'store'])->name('admin.users.store');
        Route::get('/{id}/detail-data-user', [UserManagement::class, 'show'])->name('admin.users.show');
        Route::get('/{id}/edit-data-user', [UserManagement::class, 'edit'])->name('admin.users.edit');
        Route::put('/{id}/edit-data-user', [UserManagement::class, 'update'])->name('admin.users.update');
        Route::get('/users-confirmation', [UserManagement::class, 'userConfirmation'])->name('admin.users.userconfirmation');
        Route::put('/{id}/acc-users-confirmation', [UserManagement::class, 'accUserConfirmation'])->name('admin.users.accuserconfirmation');
    });
    Route::prefix('students')->group(function() {
        Route::get('', [StudentController::class, 'index'])->name('admin.students.index');
        Route::get('/create-new-student', [StudentController::class, 'create'])->name('admin.students.create');
        Route::post('/store-new-student', [StudentController::class, 'store'])->name('admin.students.store');
        Route::get('/data-student/{id}', [StudentController::class, 'show'])->name('admin.students.show');
        Route::get('/edit-data-student/{id}', [StudentController::class, 'edit'])->name('admin.students.edit');
        Route::put('/edit-data-student/{id}', [StudentController::class, 'update'])->name('admin.students.update');
        Route::delete('/delete-data-student/{id}', [StudentController::class, 'destroy'])->name('admin.students.destroy');
    });
    Route::prefix('subjects')->group(function() {
        Route::get('', [SubjectController::class, 'index'])->name('admin.subjects.index');
        Route::get('/create-new-subject', [SubjectController::class, 'create'])->name('admin.subjects.create');
        Route::post('/create-new-subject', [SubjectController::class, 'store'])->name('admin.subjects.store');
        Route::get('/edit-data-subject/{id}', [SubjectController::class, 'edit'])->name('admin.subjects.edit');
        Route::put('/edit-data-subject/{id}', [SubjectController::class, 'update'])->name('admin.subjects.update');
        Route::delete('/delete-data-subject/{id}', [SubjectController::class, 'destroy'])->name('admin.subjects.destroy');
    });
    Route::prefix('schedules')->group(function() {
        Route::get('', [ScheduleController::class, 'index'])->name('admin.schedules.index');
        Route::get('/create-new-subject-schedule', [ScheduleController::class, 'create'])->name('admin.schedules.create');
        Route::post('/create-new-subject-schedule', [ScheduleController::class, 'store'])->name('admin.schedules.store');
        Route::get('/{id}/edit-subject-schedule', [ScheduleController::class, 'edit'])->name('admin.schedules.edit');
        Route::put('/{id}/edit-subject-schedule', [ScheduleController::class, 'update'])->name('admin.schedules.update');
        Route::delete('/{id}/delete-subject-schedule', [ScheduleController::class, 'destroy'])->name('admin.schedules.destroy');
    });
});