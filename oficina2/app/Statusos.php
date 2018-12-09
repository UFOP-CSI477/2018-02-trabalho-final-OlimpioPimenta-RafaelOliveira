<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statusos extends Model
{
    //
    protected $fillable=[
        'descricao',
        'libera_prisma',
        'consulta_web',
        'envia_sms'
    ];
}
