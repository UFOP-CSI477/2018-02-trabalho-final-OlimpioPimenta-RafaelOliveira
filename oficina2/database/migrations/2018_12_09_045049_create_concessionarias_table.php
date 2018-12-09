<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcessionariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concessionarias', function (Blueprint $table) {
            $table->increments('id');
            $table->String('num_dealer',10);
            $table->String('nome_fantasia',90);
            $table->String('razao_social',90);
            $table->String('dvisoes_agenda',10);
            $table->String('hora_inicio_agenda',13);
            $table->String('hora_fim_agenda',13);
            $table->String('divisoes_programacao',3);
            $table->String('hora_inicio_prog',13);
            $table->String('hora_final_prog',13);
            $table->String('fuso_horario',10);
            $table->String('cor_de_intervalos',10);
            $table->String('cor_inicio_apontamento',10);
            $table->String('cor_apontamento_1',10);
            $table->String('porcentagem_apontamento_1',10);
            $table->String('cor_apontamento_2',10);
            $table->String('porcentagem_apontamento_2',10);
            $table->String('porcentagem_apontamento_3',10);
            $table->String('cor_apontamento_terminado',10);
            $table->String('cor_apontamento_orfao',10);
            $table->String('url_logo',120);
            $table->String('url_logo_1',120);
            $table->String('email_interface',60);
            $table->String('versao_layout',10);
            $table->String('estilo_angeda',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concessionarias');
    }
}
