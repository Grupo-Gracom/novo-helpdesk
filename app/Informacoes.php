<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informacoes extends Model
{
    protected $fillable = ['nome','email','sexo','telefone','id_cliente'];

    protected $table ="informacoes_pessoais";
}
