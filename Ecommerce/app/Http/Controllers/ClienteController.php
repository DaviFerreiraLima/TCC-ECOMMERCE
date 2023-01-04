<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function cadastrar(Resquest $request){

        $cliente = new cliente;

        $cliente->nomeDocliente = $request->nomeDoCliente;
        
    }
}
