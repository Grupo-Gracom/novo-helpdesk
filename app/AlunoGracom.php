<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoGracom extends Model
{
    protected $fillable = ['email','senha','matricula','app','_token','_method'];

    protected $primaryKey = 'id_aluno';
    protected $table ="alunos_cadastro";
}
