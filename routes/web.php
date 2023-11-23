<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LayoutController::class, 'index'])->name('Layout');


Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login', 'login')->name('login');
    Route::get('logout', 'logout');
});


Route::middleware(['auth', 'CekUserLogin:1'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});
Route::middleware(['auth', 'CekUserLogin:2'])->group(function () {
    Route::get('/user', [UserController::class, 'index']);
});
