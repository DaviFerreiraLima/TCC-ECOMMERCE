<?php

namespace App\Http\Controllers;
use App\Models\ClienteCadastro;
use Illuminate\Http\Request;
use App\resources\views;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view ('loginDoCliente');
    }

    public function autenticar(Request $request)
    {

        //verificação de preenchimento dos campos

        $this->validate($request,[
            //regras de validação
            'emailDoCliente' => 'required', 'senhaDoCliente' => 'required' ] ,

            //feedback em caso de invalidação das regras
            ['emailDoCliente.required'=>'O campo do E-mail é obrigatorio',
             'senhaDoCliente.required'=>'O campo da senha é obrigatorio']
        
        );
       /* $email = $request->get('emailDoCliente');
        $senha = $request->get('senhaDoCliente');*/

       //iniciar o model Cliente , que se conecta com o BD
       

       
       $cliente = new ClienteCadastro();
       $cliente = $cliente->where('emailDoCliente',  $request->get('emailDoCliente'))
                         ->where('senhaDoCliente',$request->get('senhaDoCliente'))
                         ->first();
       //Verifica se o usuario existe ou não
       
       if(isset($cliente->nomeDoCliente )){
        echo 'Usuario existe <br>';
        //existindo, ele faz a validação de senha
            if($cliente and ($cliente->senhaDoCliente ==  $request->senhaDoCliente)){
                echo 'Usuario logado';
            }
           } else{
            echo 'Email e/ou senha invalidos';
            }
       
       //isolaos dados do request em variaveis "locais" para teste
      /* $email = $request->get('emailDoCliente');
       $senha = $request->get('senhaDoCliente');
            echo 'senha do cliente'.$cliente->senhaDoCliente;
       echo 'senha do request'. $request->senhaDoCliente;
       echo "Email: $email" . "Senha: $senha";
       echo "<br>";*/
    }

}
