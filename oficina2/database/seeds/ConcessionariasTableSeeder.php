<?php

use Illuminate\Database\Seeder;
use App\Concessionaria;
use Illuminate\Support\Facades\DB;

class ConcessionariasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('concessionarias')->delete();
        Concessionaria::create(array(
            'num_dealer'=>'4528',
            'nome_fantasia'=>'Veloster Center Belo Horizonte',
            'razao_social'=>'Veloster Center Belo Horizonte',
            'dvisoes_agenda'=>'6',
            'hora_inicio_agenda'=>'07:30:00',
            'hora_fim_agenda'=>'18:20:00',
            'divisoes_programacao'=>'4',
            'hora_inicio_prog'=>'08:00:00',
            'hora_final_prog'=>'18:00:00',
            'fuso_horario'=>'0',
            'cor_de_intervalos'=>'#000000',
            'cor_inicio_apontamento'=>'#FFAB34',
            'cor_apontamento_1'=>'#00FF00',
            'porcentagem_apontamento_1'=>'50',
            'cor_apontamento_2'=>'#FFA900',
            'porcentagem_apontamento_2'=>'90',
            'porcentagem_apontamento_3'=>'#FF0000',
            'cor_apontamento_terminado'=>'#0889FB',
            'cor_apontamento_orfao'=>'#010001',
            'url_logo'=>'http://minha.pagina.lin.meu/imagem/url/logo.jpg',
            'url_logo_1'=>'http://minha.pagina.lin.meu/imagem/url/logo1.jpg',
            'email_interface'=>'meuEmailDeContato@veloster.com.br',
            'versao_layout'=>'1.3.0',
            'estilo_angeda'=>'Celular'
         ));
    }
}
