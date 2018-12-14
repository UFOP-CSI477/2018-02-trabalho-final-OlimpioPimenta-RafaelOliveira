<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statusagendamento extends Model
{
    //
    protected $fillable=[
        'codigo',
        'descricao'
    ];


    public function Agendamentos(){

    	return $this->belongsTo('App\Agendamento', 'id');
    }
}
