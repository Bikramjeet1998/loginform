<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/adminlogin', [AdminController::class, 'index'])->name('adminlogin');
Route::post('/adminlogin', [AdminController::class, 'login'])->name('adminlogin');
Route::get('/admindashboard', [AdminController::class, 'dashboard'])->name('admindashboard');
// Route::get('/createAdmin', [AdminController::class, 'createNewAdmin']);
// Route::post('/createAdmin', [AdminController::class, 'store'])->name('createadmin');
