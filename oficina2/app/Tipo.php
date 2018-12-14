<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    //
    protected $fillable=[
        'codigo',
        'descricao',
        'cor',
        'apresenta_codigo',
        'apresenta_legenda'
    ];

    public function tipo(){
        
        return $this->belongsTo('App\Agendamento', 'id');
    }

}
