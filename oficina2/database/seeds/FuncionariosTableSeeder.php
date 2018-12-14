<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Funcionario;

class FuncionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('funcionarios')->delete();
        
        Funcionario::create(array(
        'nome'=>'Mestre Kame',
        'apelido'=>'safadaum',
        'usuario'=>'',
        'chapa'=>'a13',
        'cor_apresentacao'=>'#FF6161',
        'cor_da_letra'=>'#FBF5F5',
        'equipe'=>'Cinzaesc',
        'produtivo'=>true,
        'compartilhado'=>false,
        'especialidade'=>'mecânica',
        'consultor'=>false,        
        'painel_agenda'=>'',
        'cafe_da_manha_inicio'=>'',
        'cafe_da_manha_fim'=>'',
        'almoco_inicio'=>'12:00:00',
        'almoco_fim'=>'13:15:00',
        'cafe_da_tarde_inicio'=>'',
        'cafe_da_tarde_fim'=>'',
        ));

        Funcionario::create(array(
            'nome'=>'Mestre Saitama',
            'apelido'=>'Bocais',
            'usuario'=>'',
            'chapa'=>'EJC',
            'cor_apresentacao'=>'#FF6161',
            'cor_da_letra'=>'#FFFFFF',
            'equipe'=>'Cinzaesc',
            'produtivo'=>true,
            'compartilhado'=>false,
            'especialidade'=>'alinhamento',
            'consultor'=>false,        
            'painel_agenda'=>'',
            'cafe_da_manha_inicio'=>'',
            'cafe_da_manha_fim'=>'',
            'almoco_inicio'=>'12:30:00',
            'almoco_fim'=>'13:45:00',
            'cafe_da_tarde_inicio'=>'',
            'cafe_da_tarde_fim'=>'',
            ));

            Funcionario::create(array(
                'nome'=>'Ryu',
                'apelido'=>'DaHadouken',
                'usuario'=>'',
                'chapa'=>'UN1',
                'cor_apresentacao'=>'#FF6161',
                'cor_da_letra'=>'#FFFFFF',
                'equipe'=>'Cinzaesc',
                'produtivo'=>true,
                'compartilhado'=>false,
                'especialidade'=>'alinhamento',
                'consultor'=>false,        
                'painel_agenda'=>'',
                'cafe_da_manha_inicio'=>'',
                'cafe_da_manha_fim'=>'',
                'almoco_inicio'=>'12:30:00',
                'almoco_fim'=>'13:45:00',
                'cafe_da_tarde_inicio'=>'',
                'cafe_da_tarde_fim'=>'',
                ));

                Funcionario::create(array(
                    'nome'=>'Jiraya',
                    'apelido'=>'EroSenin',
                    'usuario'=>'',
                    'chapa'=>'28',
                    'cor_apresentacao'=>'#FF6161',
                    'cor_da_letra'=>'#FFFFFF',
                    'equipe'=>'Cinzaesc',
                    'produtivo'=>false,
                    'compartilhado'=>false,
                    'especialidade'=>'Chefe.de.oficina',
                    'consultor'=>true,        
                    'painel_agenda'=>'agenda2',
                    'cafe_da_manha_inicio'=>'',
                    'cafe_da_manha_fim'=>'',
                    'almoco_inicio'=>'',
                    'almoco_fim'=>'',
                    'cafe_da_tarde_inicio'=>'',
                    'cafe_da_tarde_fim'=>'',
                    ));

                    Funcionario::create(array(
                        'nome'=>'Godofrido',
                        'apelido'=>'cotoco',
                        'usuario'=>'',
                        'chapa'=>'LND',
                        'cor_apresentacao'=>'#FBFBFB',
                        'cor_da_letra'=>'#286A00',
                        'equipe'=>'Cinzaesc',
                        'produtivo'=>false,
                        'compartilhado'=>false,
                        'especialidade'=>'',
                        'consultor'=>true,        
                        'painel_agenda'=>'agenda2',
                        'cafe_da_manha_inicio'=>'',
                        'cafe_da_manha_fim'=>'',
                        'almoco_inicio'=>'11:30:00',
                        'almoco_fim'=>'13:30:00',
                        'cafe_da_tarde_inicio'=>'',
                        'cafe_da_tarde_fim'=>'',
                        ));
            

                        Funcionario::create(array(
                            'nome'=>'Cebesta',
                            'apelido'=>'noia',
                            'usuario'=>'',
                            'chapa'=>'RMJ',
                            'cor_apresentacao'=>'#FBFBFB',
                            'cor_da_letra'=>'#286A00',
                            'equipe'=>'Cinzaesc',
                            'produtivo'=>false,
                            'compartilhado'=>false,
                            'especialidade'=>'tec.diag',
                            'consultor'=>true,        
                            'painel_agenda'=>'agenda2',
                            'cafe_da_manha_inicio'=>'',
                            'cafe_da_manha_fim'=>'',
                            'almoco_inicio'=>'11:30:00',
                            'almoco_fim'=>'13:30:00',
                            'cafe_da_tarde_inicio'=>'',
                            'cafe_da_tarde_fim'=>'',
                            ));
                
    }
}
