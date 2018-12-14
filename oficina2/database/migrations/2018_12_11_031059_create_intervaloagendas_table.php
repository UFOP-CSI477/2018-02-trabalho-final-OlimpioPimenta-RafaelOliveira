<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntervaloagendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervaloagendas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('consultor',20);
            $table->String('chapa',20);
            $table->String('hora_inicial',20);
            $table->String('hora_final',20);
            $table->String('tipo',20);
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
        Schema::dropIfExists('intervaloagendas');
    }
}
