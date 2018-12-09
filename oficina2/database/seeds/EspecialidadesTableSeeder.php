<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Especialidade;

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
        DB::table('especialidades')->delete();

        Especialidade::create(array('nome'=>'Alinhamento'));
        Especialidade::create(array('nome'=>'Chefe.de.oficina'));
        Especialidade::create(array('nome'=>'Lavação'));
        Especialidade::create(array('nome'=>'Mecânica'));
        Especialidade::create(array('nome'=>'Pintura'));
        Especialidade::create(array('nome'=>'Polimento'));
        Especialidade::create(array('nome'=>'Tec.diag'));
        
    }
}
