<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('cadastroDeCliente');
});

Route::get('/cliente/cadastro', function(){
    return view ('cadastroDeCliente');
});

//Clientes

Route::post('/cliente/cadastrar', [ClienteController::class,'cadastrar'])->name('cliente.cadastrar');

Route::post('/cliente/logar', [LoginController::class ,'autenticar'])->name('cliente.login');

Route::get('/cliente/login/{erro?}', [LoginController::class,'index'])->name('cliente.login');

//Produtos

Route::get('/produto/cadastro', [ProdutoController::class,'index'])->name('produto.cadastro');

Route::post('/produto/cadastrar',[ProdutoController::class,'cadastrar'])->name('produto.cadastrar');