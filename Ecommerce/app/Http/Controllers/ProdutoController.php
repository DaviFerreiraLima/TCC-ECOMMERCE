<?php

namespace App\Http\Controllers;
use App\Models\ProdutoCadastro;
use Illuminate\Http\Request;
use App\resources\views;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    public function index(){
        return view('cadastroDeProdutos');
    }

    public function cadastrar(Request $request){

        $produto= new ProdutoCadastro();

        $produto->create($request->all());
       
        return redirect()-route('produto.cadastro');
    }
}
