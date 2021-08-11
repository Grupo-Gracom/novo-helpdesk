<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NossasUnidades extends Model
{
    protected $fillable = ['id_unidade','cidade', 'cod_unidade'];

    protected $primaryKey = 'id_unidade';
    protected $table ="nossas_unidades";

}
