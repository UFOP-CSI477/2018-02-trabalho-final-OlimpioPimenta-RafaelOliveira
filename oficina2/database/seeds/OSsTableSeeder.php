<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\OS;
class OSsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('oss')->delete();

        OS::create(array(
            'numero_os'=>'1',
            'consultor'=>'Mestre Kame',
            'data_de_abertura'=>'01/12/2018',
            'data_prometida'=>'01/12/2018',
            'hora_prometida'=>'16:00:00',
            'placa'=>'GGN9090',
            'modelo'=>'AUDI A SD LM',
            'cor_do_veiculo'=>'Prata Aluminio Metal',
            'prisma'=>'',
            'status'=>'Programada',
            'codigo_cliente'=>'0164141',
            'nome_cliente'=>'Veloster center BR',
            'ddd_residencial'=>'11',
            'fone_residencial'=>'215434800',
            'inclusao'=>'01/03/2018 11:30:54-programação-Mestre Kame',    
            'ddd_celular'=>'11',
            'fone_celular'=>'',
            'ddd_comercial'=>'',
            'fone_comerical'=>'',
            'ramal_comerica'=>'',       
        ));

        OS::create(array(
            'numero_os'=>'2',
            'consultor'=>'Mestre Kame',
            'data_de_abertura'=>'14/12/2018',
            'data_prometida'=>'14/12/2018',
            'hora_prometida'=>'17:00:00',
            'placa'=>'G0W8989',
            'modelo'=>'AUDI A NACIONAL',
            'cor_do_veiculo'=>'Preto Orca Metalico',
            'prisma'=>'',
            'status'=>'4-Pronto',
            'codigo_cliente'=>'0538621',
            'nome_cliente'=>'Veloster center BR',
            'ddd_residencial'=>'11',
            'fone_residencial'=>'36424921',
            'inclusao'=>'14/03/2018 11:30:54-carga',    
            'ddd_celular'=>'11',
            'fone_celular'=>'',
            'ddd_comercial'=>'',
            'fone_comerical'=>'',
            'ramal_comerica'=>'',       
        ));


        OS::create(array(
            'numero_os'=>'1',
            'consultor'=>'Mestre Kame',
            'data_de_abertura'=>'01/12/2018',
            'data_prometida'=>'01/12/2018',
            'hora_prometida'=>'16:00:00',
            'placa'=>'GGN9090',
            'modelo'=>'AUDI A SD LM',
            'cor_do_veiculo'=>'Prata Aluminio Metal',
            'prisma'=>'',
            'status'=>'Programada',
            'codigo_cliente'=>'0164141',
            'nome_cliente'=>'',
            'ddd_residencial'=>'11',
            'fone_residencial'=>'215434800',
            'inclusao'=>'01/03/2018 11:30:54-programação-Mestre Kame',    
            'ddd_celular'=>'11',
            'fone_celular'=>'',
            'ddd_comercial'=>'',
            'fone_comerical'=>'',
            'ramal_comerica'=>'',       
        ));


        OS::create(array(
            'numero_os'=>'3',
            'consultor'=>'Mestre Saitama',
            'data_de_abertura'=>'14/12/2018',
            'data_prometida'=>'14/12/2018',
            'hora_prometida'=>'18:00:00',
            'placa'=>'PVX9090',
            'modelo'=>'AUDI A SD LM',
            'cor_do_veiculo'=>'BRANCO GELEIRA METAL',
            'prisma'=>'',
            'status'=>'2-Em Execução',
            'codigo_cliente'=>'0164141',
            'nome_cliente'=>'MARTINS AMDINISTRAÇÃO S/A',
            'ddd_residencial'=>'11',
            'fone_residencial'=>'215434800',
            'inclusao'=>'01/03/2018 11:30:54-Carga',    
            'ddd_celular'=>'11',
            'fone_celular'=>'',
            'ddd_comercial'=>'',
            'fone_comerical'=>'',
            'ramal_comerica'=>'',       
        ));

        OS::create(array(
            'numero_os'=>'4',
            'consultor'=>'Ryu',
            'data_de_abertura'=>'01/12/2018',
            'data_prometida'=>'01/12/2018',
            'hora_prometida'=>'16:00:00',
            'placa'=>'PXK1116',
            'modelo'=>'MITSUBISHI USADOS',
            'cor_do_veiculo'=>'Prata',
            'prisma'=>'',
            'status'=>'2-Em Execução',
            'codigo_cliente'=>'0162141',
            'nome_cliente'=>'Randown',
            'ddd_residencial'=>'11',
            'fone_residencial'=>'215434800',
            'inclusao'=>'01/03/2018 11:30:54-Carga',    
            'ddd_celular'=>'11',
            'fone_celular'=>'',
            'ddd_comercial'=>'',
            'fone_comerical'=>'',
            'ramal_comerica'=>'',       
        ));

    }
}
