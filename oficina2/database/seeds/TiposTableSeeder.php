<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Tipo;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipos')->delete();
        
        Tipo::create(array(
            'codigo'=>'A',
            'descricao'=>'Almoço',
            'cor'=>'#F3F915',
            'apresenta_codigo'=>true,
            'apresenta_legenda'=>true
        ));


        Tipo::create(array(
            'codigo'=>'E',
            'descricao'=>'Entregas',
            'cor'=>'#3FF20B',
            'apresenta_codigo'=>true,
            'apresenta_legenda'=>true
        ));

        Tipo::create(array(
            'codigo'=>'G',
            'descricao'=>'Agendados',
            'cor'=>'#FFFFFF',
            'apresenta_codigo'=>true,
            'apresenta_legenda'=>true
        ));

        Tipo::create(array(
            'codigo'=>'P',
            'descricao'=>'Passantes',
            'cor'=>'#3FF1800',
            'apresenta_codigo'=>true,
            'apresenta_legenda'=>true
        ));
    }
}
