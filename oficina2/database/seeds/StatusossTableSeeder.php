<?php

use Illuminate\Database\Seeder;
use App\Statusos;
use Illuminate\Support\Facades\DB;
class StatusossTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('statusos')->delete();

        Statusos::create(array(
        'descricao'=>'Pendente (a Programar)',
        'libera_prisma'=>true,
        'consulta_web'=>false,
        'envia_sms'=>false
          ));

        Statusos::create(array(
          'descricao'=>'Programada',
          'libera_prisma'=>true,
          'consulta_web'=>false,
          'envia_sms'=>false
          ));

        Statusos::create(array(
          'descricao'=>'Em Execução',
          'libera_prisma'=>true,
          'consulta_web'=>false,
          'envia_sms'=>false
        ));          

        Statusos::create(array(
            'descricao'=>'Pronta',
            'libera_prisma'=>true,
            'consulta_web'=>false,
            'envia_sms'=>false
              ));
    
            Statusos::create(array(
              'descricao'=>'Entrege',
              'libera_prisma'=>true,
              'consulta_web'=>false,
              'envia_sms'=>false
              ));
    
            Statusos::create(array(
              'descricao'=>'Lavagem',
              'libera_prisma'=>true,
              'consulta_web'=>false,
              'envia_sms'=>false
            ));          

            
        Statusos::create(array(
            'descricao'=>'Aguardando Peça',
            'libera_prisma'=>true,
            'consulta_web'=>false,
            'envia_sms'=>false
              ));
    
            Statusos::create(array(
              'descricao'=>'Aguardando Aprovação',
              'libera_prisma'=>true,
              'consulta_web'=>false,
              'envia_sms'=>false
              ));
    
            Statusos::create(array(
              'descricao'=>'Cancelada',
              'libera_prisma'=>true,
              'consulta_web'=>false,
              'envia_sms'=>false
            ));          

            Statusos::create(array(
                'descricao'=>'Reprogramar',
                'libera_prisma'=>true,
                'consulta_web'=>false,
                'envia_sms'=>false
                  ));
        
                Statusos::create(array(
                  'descricao'=>'Demonstração',
                  'libera_prisma'=>true,
                  'consulta_web'=>false,
                  'envia_sms'=>false
                  ));
    }
}
