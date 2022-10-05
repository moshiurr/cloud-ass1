<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);
Route::get('/showDatabase', [\App\Http\Controllers\IndexController::class, 'showDatabase']);
Route::post('/', [\App\Http\Controllers\IndexController::class, 'store'])->name('save-user-data');
