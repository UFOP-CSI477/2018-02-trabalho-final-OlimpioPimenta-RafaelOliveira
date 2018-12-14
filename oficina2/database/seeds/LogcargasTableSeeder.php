<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Logcarga;

class LogcargasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('logcargas')->delete();

        Logcarga::create(array(
        'codigo_concessionaria'=>'4528-Veloster Center Belo Horizonte',
        'tipo_registro'=>'OS',
        'acao'=>'1',
        'chapa'=>'Q12',
        'numero_os'=>'94361',
        'prisma'=>'',
        'placa'=>'QNT1010',
        'modelo'=>'AUDI A SD LM',
        'cor_veiculo'=>'Preto ORCA METALICO',
        'data_abertura'=>'14/12/18',
        'data_prometida'=>'14/12/18',
        'hora_prometida'=>'17:00',
        'codigo_cliente'=>'2',
        'nome_cliente'=>'tamagotchi',
        'ddd_residencial'=>'31',
        'fone_residencial'=>'3691-4412',
        'ddd_celular'=>'80',
        'fone_celular'=>'998740218',
        'ddd_comercial'=>'34',
        'fone_comerical'=>'998740218',
        'ramal_comerica'=>'',
        'status'=>'5',
        'data_carga'=>'2018-12-27 15:22:01',
        'arquivo'=>'meuarquivocodigo.txt',
        'processado'=>'3',
        'erro_carga'=>'Consuktor (Q12) não encontrado'));

        Logcarga::create(array(
            'codigo_concessionaria'=>'4528-Veloster Center Belo Horizonte',
            'tipo_registro'=>'Apontamento',
            'acao'=>'1',
            'chapa'=>'AAM',
            'numero_os'=>'94341',
            'prisma'=>'',
            'placa'=>'',
            'modelo'=>'',
            'cor_veiculo'=>'',
            'data_abertura'=>'14/12/18',
            'data_prometida'=>'14/12/18',
            'hora_prometida'=>'17:00',
            'codigo_cliente'=>'2',
            'nome_cliente'=>'tamagotchi',
            'ddd_residencial'=>'31',
            'fone_residencial'=>'',
            'ddd_celular'=>'',
            'fone_celular'=>'',
            'ddd_comercial'=>'',
            'fone_comerical'=>'',
            'ramal_comerica'=>'',
            'status'=>'1',
            'data_carga'=>'2018-12-27 15:20:01',
            'arquivo'=>'meuarquivocodigo2.txt',
            'processado'=>'1',
            'erro_carga'=>''));
    
    }
}
