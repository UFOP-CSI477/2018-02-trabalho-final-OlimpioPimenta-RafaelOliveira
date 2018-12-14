<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    
    protected $fillable=['consultor', 'tipo', 'cliente', 'placa', 'modelo', 'dd', 'telefone', 'data', 'horario', 'data_prometida', 'horario_prometido', 'retorno', 'chegada', 'status' ];

  
}
