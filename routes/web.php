<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario',[UsuarioController::class,'create']);
Route::get('usuario/menu',[UsuarioController::class,'index'])->name('usuario.index');
Route::post('/usuario', [UsuarioController::class,'store'])->name('usuario.store');


Route::get('/usuario/{usuario}',[UsuarioController::class,'show'])->name('usuario.show');
Route::delete('/usuario/{usuario}',[UsuarioController::class,'destroy'])->name('usuario.destroy');
Route::put('/usuario/{usuario}',[UsuarioController::class,'update'])->name('usuario.update');
Route::get('/usuario/{usuario}/editar',[UsuarioController::class,'edit'])->name('usuario.edit');
