<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\ClienteCadastro as cliente;

class ClienteController extends Controller
{
    public function cadastrar(Request $request){

        

        $this->validate($request,
        ['nomeDoCliente' => 'required',
         'emailDoCliente' => 'required', 
          'cpfDoCliente'  => 'required',
          'telefoneDoCliente' => 'required',
          'dataDeNascimento' => 'required',
          'senhaDoCliente' => 'required'
          
        ],

        [
         'nomeDoCliente' => 'O campo do Nome é obrigatorio',
         'emailDoCliente' => 'O campo do E-mail é obrigatorio', 
          'cpfDoCliente'  => 'O campo do CPF é obrigatorio',
          'telefoneDoCliente' => 'O campo do telefone é obrigatorio',
          'dataDeNascimento' => 'O campo da Data de Nascimento é obrigatorio',
          'senhaDoCliente' => 'O campo da Senha é obrigatorio'
        ]
    );

    
         $cliente = new cliente;
        $cliente->create($request->all());

        return redirect('/cliente/login');

     
    }

    
}
