<?php

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
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('cadastroDeCliente');
});

Route::get('/cliente/cadastro', function(){
    return view ('cadastroDeCliente');
});


Route::get('/cliente/login', function(){
    return view ('loginDoCliente');
});

Route::post('/cliente/cadastrar', [ClienteController::class,'cadastrar']);

Route::post('/cliente/logar', [ClienteController::class ,'logar']);
