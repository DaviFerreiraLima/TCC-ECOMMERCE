<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteCadastro extends Model
{
    protected $fillable =['nomeDoCliente', 'emailDoCliente', 'cpfDoCliente', 'telefoneDoCliente', 'dataDeNascimento', 'senhaDoCliente'];
}
