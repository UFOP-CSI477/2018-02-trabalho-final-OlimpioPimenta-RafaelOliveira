<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Usuario;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuarios')->delete();
        
        Usuario::create(array(
            'usuario'=>'godofrildo',
            'chapa'=>'2',
            'senha'=>'123',
            'confirma'=>'123',
            'ativo'=>true,
            'administrador'=>false
        ));

        Usuario::create(array(
            'usuario'=>'zezim',
            'chapa'=>'6',
            'senha'=>'123',
            'confirma'=>'123',
            'ativo'=>true,
            'administrador'=>false
        ));

        Usuario::create(array(
            'usuario'=>'midoria',
            'chapa'=>'2',
            'senha'=>'123',
            'confirma'=>'123',
            'ativo'=>true,
            'administrador'=>false
        ));

        Usuario::create(array(
            'usuario'=>'Ryu',
            'chapa'=>'6',
            'senha'=>'123',
            'confirma'=>'123',
            'ativo'=>true,
            'administrador'=>false
        ));

        Usuario::create(array(
            'usuario'=>'Ken',
            'chapa'=>'2',
            'senha'=>'123',
            'confirma'=>'123',
            'ativo'=>true,
            'administrador'=>false
        ));

        Usuario::create(array(
            'usuario'=>'chunlin',
            'chapa'=>'6',
            'senha'=>'123',
            'confirma'=>'123',
            'ativo'=>true,
            'administrador'=>false
        ));


        Usuario::create(array(
            'usuario'=>'mestekame',
            'chapa'=>'6',
            'senha'=>'123',
            'confirma'=>'123',
            'ativo'=>true,
            'administrador'=>false
        ));

        Usuario::create(array(
            'usuario'=>'saitama',
            'chapa'=>'9',
            'senha'=>'123',
            'confirma'=>'123',
            'ativo'=>true,
            'administrador'=>false
        ));


    }
}
