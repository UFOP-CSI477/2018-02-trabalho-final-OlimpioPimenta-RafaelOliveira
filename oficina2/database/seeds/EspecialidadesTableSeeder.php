<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('especialidades')->delte();

        Funcionario::create(array('nome'=>'Alinhamento'));
        Funcionario::create(array('nome'=>'Chefe.de.oficina'));
        Funcionario::create(array('nome'=>'Lavação'));
        Funcionario::create(array('nome'=>'Mecânica'));
        Funcionario::create(array('nome'=>'Pintura'));
        Funcionario::create(array('nome'=>'Polimento'));
        Funcionario::create(array('nome'=>'Tec.diag'));
        
    }
}
