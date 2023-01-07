<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\ClienteCadastro as cliente;

class ClienteController extends Controller
{
    public function cadastrar(Request $request){

        $cliente = new cliente;

        
        $cliente->create($request->all());

        return redirect('/cliente/login');

     
    }

    
}
