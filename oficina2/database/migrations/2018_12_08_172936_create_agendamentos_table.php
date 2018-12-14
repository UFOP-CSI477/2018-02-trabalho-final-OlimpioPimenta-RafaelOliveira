<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('cliente',191);
            $table->String('placa',191);            
            $table->String('dd',5);
            $table->String('telefone',10);
            $table->date('data');
            $table->time('horario');
            $table->date('data_prometida');
            $table->time('horario_prometido');
            $table->boolean('retorno');
            $table->String('chegada',50);            
            $table->timestamps();
            // chave para utilizar o seed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamentos');
    }
}
