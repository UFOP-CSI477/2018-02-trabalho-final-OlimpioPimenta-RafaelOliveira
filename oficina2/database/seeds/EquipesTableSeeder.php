<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Equipe;
class EquipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('equipes')->delete();

        Equipe::create(array(
        'cod_equipe'=>'1',
        'descricao'=>'Cinzaesc',
        'tipe_letra_prog'=>'Arial',
        'negrito_letra_prog'=>true,
        'tam_letra_prog'=>'12',
        'altura_linha_prog'=>'44',
        'caracters_por_divisao'=>'5',
        'altura_linha_apont'=>'16',
        'tipo_letra_produt'=>'Tahoma',
        'negrito_produt'=>true,
        'tam_letra_produt'=>'18',
        'tam_letra_hora'=>'14',
        'altura_linha_hora'=>'12',
        'tempo_de_atualizacao'=>'60',
        ));

        Equipe::create(array(
            'cod_equipe'=>'2',
            'descricao'=>'Cinzacla',
            'tipe_letra_prog'=>'Arial',
            'negrito_letra_prog'=>true,
            'tam_letra_prog'=>'12',
            'altura_linha_prog'=>'48',
            'caracters_por_divisao'=>'5',
            'altura_linha_apont'=>'16',
            'tipo_letra_produt'=>'Tahoma',
            'negrito_produt'=>true,
            'tam_letra_produt'=>'22',
            'tam_letra_hora'=>'14',
            'altura_linha_hora'=>'16',
            'tempo_de_atualizacao'=>'60',
            ));

            Equipe::create(array(
                'cod_equipe'=>'2',
                'descricao'=>'Express',
                'tipe_letra_prog'=>'Arial',
                'negrito_letra_prog'=>true,
                'tam_letra_prog'=>'12',
                'altura_linha_prog'=>'48',
                'caracters_por_divisao'=>'5',
                'altura_linha_apont'=>'16',
                'tipo_letra_produt'=>'Tahoma',
                'negrito_produt'=>true,
                'tam_letra_produt'=>'22',
                'tam_letra_hora'=>'14',
                'altura_linha_hora'=>'16',
                'tempo_de_atualizacao'=>'60',
                ));
    }
}
