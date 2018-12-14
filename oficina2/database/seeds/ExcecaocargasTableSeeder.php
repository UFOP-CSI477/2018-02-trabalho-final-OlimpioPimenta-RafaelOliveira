<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Excecaocarga;

class ExcecaocargasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('excecaocargas')->delete();

        Excecaocarga::create(array(
            'chapa'=>'4003671',
            'produtivo'=>false,
            'consultor'=>true
        ));

        Excecaocarga::create(array(
            'chapa'=>'cjq',
            'produtivo'=>false,
            'consultor'=>true
        ));

        Excecaocarga::create(array(
            'chapa'=>'JDM',
            'produtivo'=>false,
            'consultor'=>true
        ));


        Excecaocarga::create(array(
            'chapa'=>'LMC',
            'produtivo'=>false,
            'consultor'=>true
        ));


        Excecaocarga::create(array(
            'chapa'=>'REG',
            'produtivo'=>false,
            'consultor'=>true
        ));

        Excecaocarga::create(array(
            'chapa'=>'VFM',
            'produtivo'=>false,
            'consultor'=>true
        ));

 
    }
}
