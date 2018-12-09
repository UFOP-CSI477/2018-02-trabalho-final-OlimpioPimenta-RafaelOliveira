<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateOrdensdeservicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordensdeservicos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_de_abertura');
            $table->date('data_prometida');
            $table->String('hora_prometida');
            $table->String('placa');
            $table->String('modelo');
            $table->String('cor_do_veiculo');
            $table->String('cod_cliente');
            $table->String('nome_cliente');
            $table->String('dd_residencial');
            $table->String('fone_residencial');
            $table->String('celular');
            $table->String('dd_comercial');
            $table->String('ramal_comercial');
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
        Schema::dropIfExists('ordensdeservicos');
    }
}
