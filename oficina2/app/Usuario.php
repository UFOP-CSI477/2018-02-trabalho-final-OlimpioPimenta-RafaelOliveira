<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $fillable=['usuario', 'chapa', 'senha', 'confirma', 'ativo', 'administrador'];
}
