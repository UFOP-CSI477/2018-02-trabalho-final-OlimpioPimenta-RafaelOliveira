<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Statusagendamento;

class Statusagendamentos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('statusagendamentos')->delete();
        
        Statusagendamento::create(array(
            'codigo'=>'0',
            'descricao'=>'agendamento'
        ));
    }
}
