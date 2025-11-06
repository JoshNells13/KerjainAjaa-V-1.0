<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [AuthController::class, 'showLandingpage']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('ShowDashboard');

    Route::get('/tasks',[TaskController::class, 'index'])->name('ShowTaskPage');
    Route::post('/tasks',[TaskController::class, 'store'])->name('AddTask');
    Route::put('/tasks/{id}',[TaskController::class, 'update'])->name('UpdateTask');
    Route::delete('/tasks/{id}',[TaskController::class,'destroy'])->name('DeleteTask');
    Route::get('/taskscompleted',[TaskController::class, 'TaskCompletedPage'])->name('ShowTaskCompleted');


    Route::get('/category',[CategorieController::class, 'index'])->name('ShowCategoryPage');
    Route::post('/category',[CategorieController::class, 'store'])->name('AddCategory');
    Route::put('/category/{id}',[CategorieController::class, 'update'])->name('UpdateCategory');
    Route::delete('/category/{id}',[CategorieController::class, 'destroy'])->name('DeleteCategory');

});
