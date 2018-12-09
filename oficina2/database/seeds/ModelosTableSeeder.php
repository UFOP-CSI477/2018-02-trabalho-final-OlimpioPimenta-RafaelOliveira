<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Modelo;

class ModelosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('modelos')->delete();

        Modelo::create(array('nome'=>'A1'));
        Modelo::create(array('nome'=>'A1-Diagnóstico'));
        Modelo::create(array('nome'=>'A1-Peço'));
        Modelo::create(array('nome'=>'A1-Revisão'));
        Modelo::create(array('nome'=>'A1-Rv/Dg'));
        Modelo::create(array('nome'=>'A3'));
        Modelo::create(array('nome'=>'A3-Peça'));
        Modelo::create(array('nome'=>'A4'));
        Modelo::create(array('nome'=>'A4-Peça'));
        Modelo::create(array('nome'=>'A4-Revisão'));
        Modelo::create(array('nome'=>'A5'));
        Modelo::create(array('nome'=>'A5-Peça'));
        Modelo::create(array('nome'=>'A6'));
        Modelo::create(array('nome'=>'A7'));
        Modelo::create(array('nome'=>'Q3'));
        Modelo::create(array('nome'=>'Q3-Peça'));
        Modelo::create(array('nome'=>'Q5'));
        Modelo::create(array('nome'=>'Q5-Peça'));
        Modelo::create(array('nome'=>'Q7'));
        Modelo::create(array('nome'=>'Q7-Peça'));


    }
}
