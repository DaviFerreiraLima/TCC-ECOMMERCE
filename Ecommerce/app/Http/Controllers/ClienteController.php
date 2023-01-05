<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function cadastrarCliente(Resquest $request){

        $cliente = new cliente;

        $cliente->nomeDocliente = $request->nomeDoCliente;

        $cliente->emailDoCliente = $request->emailDoCliente;

        $cliente->cpfDoCliente = $request->cpfDoCliente;

        $cliente->telefoneDoCliente = $request->telefoneDoCliente;

        $cliente->dataDeNascimento = $request->dataDeNascimento;

        $cliente->senhaDoCliente = $request->senhaDoCliente;

        $cliente->save();

        return view('loginDoCliente');
    }

    public function logarCliente(Resquest $request)
    {

        if(Auth::attempt(['email' => $request->$emailDoCliente, 'password' => $request->$senhaDoCliente])){
            dd('Logou');
        }
            dd('Não logou');
    }
}
