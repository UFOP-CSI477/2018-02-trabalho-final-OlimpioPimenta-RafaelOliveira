<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    //
    protected $fillable=[

        'cod_equipe',
        'descricao',
        'tipe_letra_prog',
        'negrito_letra_prog',
        'tam_letra_prog',
        'altura_linha_prog',
        'caracters_por_divisao',
        'altura_linha_apont',
        'tipo_letra_produt',
        'negrito_produt',
        'tam_letra_produt',
        'tam_letra_hora',
        'altura_linha_hora',
        'tempo_de_atualizacao',


    ];
}
