<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    //
    protected $fillable=[
        'nome',
        'apelido',
        'usuario',
        'chapa',
        'cor_apresentacao',
        'cor_da_letra',
        'equipe',
        'produtivo',
        'compartilhado',
        'especialidade',
        'consultor',        
        'painel_agenda',
        'cafe_da_manha_inicio',
        'cafe_da_manha_fim',
        'almoco_inicio',
        'almoco_fim',
        'almoco_inicio',
        'cafe_da_tarde_inicio',
        'cafe_da_tarde_fim',
    ];
}
