<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordensdeservico extends Model
{
    //
    protected $fillable=[        
        'data_de_abertura',
        'data_prometida',
        'hora_prometida',
        'placa',
        'modelo',
        'cor_do_veiculo',
        'cod_cliente',
        'nome_cliente',
        'dd_residencial',
        'fone_residencial',
        'celular',
        'dd_comercial',
        'ramal_comercial'
    ];
}
