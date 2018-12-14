<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logcarga extends Model
{
    //
    protected $fillable=[
            'codigo_concessionaria',
            'tipo_registro',
            'acao',
            'chapa',
            'numero_os',
            'prisma',
            'placa',
            'modelo',
            'cor_veiculo',
            'data_abertura',
            'data_prometida',
            'hora_prometida',
            'codigo_cliente',
            'nome_cliente',
            'ddd_residencial',
            'fone_residencial',
             'ddd_celular',
            'fone_celular',
            'ddd_comercial',
            'fone_comerical',
            'ramal_comerica',
            'status',
            'data_carga',
            'arquivo',
            'processado',
            'erro_carga',
    ];
}
