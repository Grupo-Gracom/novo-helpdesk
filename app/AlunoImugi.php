<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoImugi extends Model
{
    protected $fillable = ['email','senha','matricula','app','aluno_atualizado','_method'];

    protected $primaryKey = 'id_aluno';
    protected $table ="alunos_cadastro";
}
 