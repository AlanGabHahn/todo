<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, AuthController, TaskController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/task', [TaskController::class, 'index'])->name('tasks');
Route::get('/task/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::post('/task/update', [TaskController::class, 'update'])->name('task.update');
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::get('task/delete/{id}', [TaskController::class, 'destroy'])->name('tasks.delete');


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');