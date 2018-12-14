<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Intervaloagenda;

class IntervaloagendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intervaloagendas')->delete();
        
        Intervaloagenda::create(array(
            'consultor'=>'Mestre kame',
            'chapa'=>'1',
            'hora_inicial'=>'11:00',
            'hora_final'=>'12:00',
            'tipo'=>'2-Agendado'
        ));
//

    }
}
