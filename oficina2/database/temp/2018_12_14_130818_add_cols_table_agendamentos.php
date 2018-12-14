<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColsTableAgendamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agendamentos', function (Blueprint $table) {
            
            // $table->String('consultor',191);
            // $table->String('tipo',191);
            // $table->String('modelo', 100);
            // $table->String('status',50);
            $table->unsignedInteger('funcionario_id');
            $table->unsignedInteger('tipo_id');
            $table->unsignedInteger('status_agenda_id');
            $table->unsignedInteger('modelo_id');

            $table->foreign('funcionario_id')->references('id')->on('Funcionario');
            $table->foreign('modelo_id')->references('id')->on('Modelo');
            $table->foreign('status_agenda_id')->references('id')->on('Statusagendamento');
            $table->foreign('tipo_id')->references('id')->on('Tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agendamentos', function (Blueprint $table) {
            $table->dropColumn('consultor');
            $table->dropColumn('tipo');
            $table->dropColumn('modelo');
            $table->dropColumn('status');

        });
    }
}