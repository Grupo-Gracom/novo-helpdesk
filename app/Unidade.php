<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = ['unidade_nome', 'unidade_codigo'];

    protected $primaryKey = 'unidade_id';
    protected $table = "fp_unidades";
}
