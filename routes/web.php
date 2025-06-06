<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PesagemController;
use App\Http\Controllers\ClienteController;
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

Route::get('/home', [UserController::class, 'home'])->name('users.home');

Route::get('/index-user', [UserController::class,'index'])->name('user.index');
Route::get('/show-user/{user}', [UserController::class,'show'])->name('user.show');
Route::get('/create-user', [UserController::class,'create'])->name('user.create');
Route::post('/store-user', [UserController::class,'store'])->name('user.store'); 
Route::get('/edit-user/{user}', [UserController::class,'edit'])->name('user.edit');
Route::put('/update-user/{user}', [UserController::class,'update'])->name('user.update');
Route::delete('/delete-user/{user}', [UserController::class,'destroy'])->name('user.destroy');



Route::group(['middleware' => 'auth'], function () {
    Route::get('/index-material', [MaterialController::class,'index'])->name('material.index');
    Route::get('/show-material/{material}', [MaterialController::class,'show'])->name('material.show');
    Route::get('/create-material', [MaterialController::class,'create'])->name('material.create');
    Route::post('/store-material', [MaterialController::class,'store'])->name('material.store');
    Route::get('/edit-material/{material}', [MaterialController::class,'edit'])->name('material.edit');
    Route::put('/update-material/{material}', [MaterialController::class,'update'])->name('material.update');
    Route::delete('/delete-material/{material}', [MaterialController::class,'destroy'])->name('material.destroy');
    Route::get('/edit-material/{material}', [MaterialController::class,'edit'])->name('material.edit');

    // EXPORTAR VIEW MATERIAL
    Route::get('/materials/export/pdf', [MaterialController::class, 'exportPdf'])->name('materials.export.pdf');
    
    Route::get('/pesagem', [PesagemController::class, 'index'])->name('pesagem.index');
    Route::get('/pesagem/create', [PesagemController::class, 'create'])->name('pesagem.create');
    Route::post('/pesagem/store', [PesagemController::class, 'store'])->name('pesagem.store');
    Route::get('/pesagem/{pesagem}/edit', [PesagemController::class, 'edit'])->name('pesagem.edit');
    Route::put('/pesagem/{pesagem}', [PesagemController::class, 'update'])->name('pesagem.update');

    Route::get('/cliente', [ClienteController::class, 'home'])->name('clientes.home');
    Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::post('/store-cliente', [ClienteController::class, 'store'])->name('clientes.store');
    Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
    Route::get('/cliente/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');

});