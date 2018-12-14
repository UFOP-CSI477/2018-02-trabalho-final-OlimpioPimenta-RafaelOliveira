<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    //
    protected $fillable=['nome'];


    public function agendamentos(){

        return $this->belongsTo('App\Modelo', 'id');
    }
}
