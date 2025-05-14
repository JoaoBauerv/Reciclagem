<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\LoginController;
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
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginProcess'])->name('login.process');
Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy');

Route::get('/index-user', [UserController::class,'index'])->name('user.index');
Route::get('/show-user/{user}', [UserController::class,'show'])->name('user.show');
Route::get('/create-user', [UserController::class,'create'])->name('user.create');
Route::post('/store-user', [UserController::class,'store'])->name('user.store'); 
Route::get('/edit-user/{user}', [UserController::class,'edit'])->name('user.edit');
Route::put('/update-user/{user}', [UserController::class,'update'])->name('user.update');
Route::delete('/delete-user/{user}', [UserController::class,'destroy'])->name('user.destroy');


Route::group(['middleware' => 'auth'], function () {

    
});