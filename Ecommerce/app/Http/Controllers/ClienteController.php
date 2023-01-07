<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\ClienteCadastro as cliente;

class ClienteController extends Controller
{
    public function cadastrar(Request $request){

        
        //Validação de preenchimento dos campos
        $this->validate($request,
            //Imposição de regras( todos os campos descritos são requeridos)
                ['nomeDoCliente' => 'required',
                'emailDoCliente' => 'required', 
                'cpfDoCliente'  => 'required',
                'telefoneDoCliente' => 'required',
                'dataDeNascimento' => 'required',
                'senhaDoCliente' => 'required'
                
                ],
                //Em caso de não preenchimento, as mensagens a seguir aparecerão nos campos não preenchidos
                [
                'nomeDoCliente' => 'O campo do Nome é obrigatorio',
                'emailDoCliente' => 'O campo do E-mail é obrigatorio', 
                'cpfDoCliente'  => 'O campo do CPF é obrigatorio',
                'telefoneDoCliente' => 'O campo do telefone é obrigatorio',
                'dataDeNascimento' => 'O campo da Data de Nascimento é obrigatorio',
                'senhaDoCliente' => 'O campo da Senha é obrigatorio'
                ]
        );
            

                            $clienteEmail = cliente::where('emailDoCliente',  $request->get('emailDoCliente'))->first();
                            $clienteCPF = cliente::where('cpfDoCliente', $request->get('cpfDoCliente'))->first();
                            
                            
                            //Verifica se usuario existe
                            if(isset($clienteEmail->emailDoCliente) || isset($clienteCPF->cpfDoCliente) ){
                                //Caso exista, ele verifica se os valores postos são "iguais" a contidos no banco e bloqueia o cadastro 


                                // BUG EXISTENTE( CASO CPF NÃO EXISTA, ELE BUGA NA VERIFICAÇÃO porque nao foi criado objeto cpf antes. MAS ISSO NÃO OCORRE NO EMAIL)

                                //Para resolver o bug
                                    if(!(isset($clienteCPF->cpfDoCliente))){
                                        $clienteCPF=new cliente;

                                        $clienteCPF->cpfDoCliente=000;
                                    }

                                if(($clienteCPF->cpfDoCliente == $request->cpfDoCliente)){
                                    
                                    echo (' cliente já cadastrado');
                                    return ;
                                   // return redirect()->back()->with('danger','Cliente já cadastrado');
                                }
                                else if(($clienteEmail->emailDoCliente == $request->emailDoCliente)){

                
                                    echo (' cliente já cadastrado');
                                    return ;
                                }
                                //Caso o usuario nao existe é executada a criação de cliente e redirecionamento 
                            } else{
                                
                                $cliente = new cliente;
                                $cliente->create($request->all());

                                return redirect('/cliente/login') ;
                                
                            }     
                                    
                                   
                    
               
            

        
        }

    
}
