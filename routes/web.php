<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SqlController;
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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/users', [PageController::class, 'users'])->name('users');
Route::post('add', [SqlController::class, 'add']);
Route::post('authentication', [SqlController::class, 'authentication']);
