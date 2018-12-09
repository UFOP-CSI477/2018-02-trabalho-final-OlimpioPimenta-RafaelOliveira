<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concessionaria extends Model
{
    //
    protected $fillable=[
        'num_dealer',
        'nome_fantasia',
        'razao_social',
        'dvisoes_agenda',
        'hora_inicio_agenda',
        'hora_fim_agenda',
        'divisoes_programacao',
        'hora_inicio_prog',
        'hora_final_prog',
        'fuso_horario',
        'cor_de_intervalos',
        'cor_inicio_apontamento',
        'cor_apontamento_1',
        'porcentagem_apontamento_1',
        'cor_apontamento_2',
        'porcentagem_apontamento_2',
        'porcentagem_apontamento_3',
        'cor_apontamento_terminado',
        'cor_apontamento_orfao',
        'url_logo',
        'url_logo_1',
        'email_interface',
        'versao_layout',
        'estilo_angeda',

    ];
}
