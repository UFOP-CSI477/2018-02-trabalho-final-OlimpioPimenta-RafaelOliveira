<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColsTableFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funcionario', function (Blueprint $table) {
            $table->String('nome',20);
            $table->String('apelido',20);
            $table->String('usuario',20);
            $table->String('chapa',20);
            $table->String('cor_apresentacao',20);
            $table->String('cor_da_letra',20);
            $table->String('equipe',20);
            $table->boolean('produtivo');
            $table->boolean('compartilhado');
            $table->String('especialidade',20);
            $table->boolean('consultor');        
            $table->String('painel_agenda',20);
            $table->String('cafe_da_manha_inicio',20);
            $table->String('cafe_da_manha_fim',20);
            $table->String('almoco_inicio',20);
            $table->String('almoco_fim',20);
            $table->String('cafe_da_tarde_inicio',20);
            $table->String('cafe_da_tarde_fim',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funcionario', function (Blueprint $table) {
            //
        });
    }
}
