<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['name', 'email', 'password', 'nivel', 'unidade_id'];

    protected $primaryKey = 'id';
    protected $table = "users";
}
