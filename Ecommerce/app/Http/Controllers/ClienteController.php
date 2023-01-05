<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\ClienteCadastro as cliente;

class ClienteController extends Controller
{
    public function cadastrar(Request $request){

        $cliente = new cliente;

        
        $cliente->create($request->all());

        return view ('loginDoCliente');

     
    }

    public function logar(Request $request)
    {

        if(Auth::attempt(['email' => $request->$emailDoCliente, 'password' => $request->$senhaDoCliente])){
            dd('Logou');
        }
            dd('Não logou');
    }
}
