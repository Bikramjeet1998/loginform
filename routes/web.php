<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/create', [UserController::class, 'createNewUser']);
Route::post('/create', [UserController::class, 'store'])->name('createuser');
Route::post('/login', [UserController::class, 'login'])->name('loginDashboard');
