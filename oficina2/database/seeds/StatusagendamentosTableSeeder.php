<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Statusagendamento;

class StatusagendamentosTableSeeder extends Seeder
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

        Statusagendamento::create(array(
            'codigo'=>'1',
            'descricao'=>'Compareceu'
        ));

        Statusagendamento::create(array(
            'codigo'=>'2',
            'descricao'=>'Atemdimento'
        ));

        Statusagendamento::create(array(
            'codigo'=>'3',
            'descricao'=>'Pronto'
        ));

        Statusagendamento::create(array(
            'codigo'=>'4',
            'descricao'=>'Cliente Aguardando'
        ));
    }
}
