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
Route::get('/task/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::delete('task/delete', [TaskController::class, 'destroy'])->name('tasks.delete');


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');