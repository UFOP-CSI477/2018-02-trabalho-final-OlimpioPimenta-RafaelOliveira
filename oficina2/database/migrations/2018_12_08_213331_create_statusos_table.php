<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statusos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('descricao',50);
            $table->boolean('libera_prisma');
            $table->boolean('consulta_web');
            $table->boolean('envia_sms');
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
        Schema::dropIfExists('statusoss');
    }
}
