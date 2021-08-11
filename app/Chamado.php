<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    protected $fillable = ['titulo_chamado','observacao','id_categoria','id_escola','solicitante','quem_solicitou','status','created_at'];

    protected $table ="chamados";
}
