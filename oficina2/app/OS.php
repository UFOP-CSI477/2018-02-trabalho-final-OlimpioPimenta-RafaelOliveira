<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OS extends Model
{
    //
    protected $fillable=[
        'numero_os',
        'consultor',
        'data_de_abertura',
        'data_prometida',
        'hora_prometida',
        'placa',
        'modelo',
        'cor_do_veiculo',
        'prisma',
        'codigo_cliente',
        'ddd_residencial',
        'fone_residencial',
         'ddd_celular',
        'fone_celular',
        'ddd_comercial',
        'fone_comerical',
        'ramal_comerica',       
        ];
}
