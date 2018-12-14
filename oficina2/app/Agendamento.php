<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    
    protected $fillable=['consultor', 'tipo', 'cliente', 'placa', 'modelo', 'dd', 'telefone', 'data', 'horario', 'data_prometida', 'horario_prometido', 'retorno', 'chegada', 'status' ];

    // public function funcionarios(){

    // 	return $this->hasOne('App\Funcionario', 'funcionario_id');

    // }
    // public function modelos(){

    // 	return $this->hasOne('App\Modelo', 'modelo_id');
    	
    // }
    // public function tipos(){

    // 	return $this->hasOne('App\Tipo', 'tipo_id');
    	
    // }   
    // public function status(){

    // 	return $this->hasOne('App\Statusagendamento', 'status_agenda_id');
    	
    // } 'funcionario_id', 'modelo_id', 'tipo_id',  'status'

}
