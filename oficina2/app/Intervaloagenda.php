<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervaloagenda extends Model
{
    //
    protected $fillable=['consultor','chapa','hora_inicial','hora_final','tipo'];
}
