<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->increments('id');
            $table->String('cod_equipe',50);
            $table->String('descricao',90);
            $table->String('tipe_letra_prog',20);
            $table->boolean('negrito_letra_prog');
            $table->String('tam_letra_prog',20);
            $table->String('altura_linha_prog',20);
            $table->String('caracters_por_divisao',5);
            $table->String('altura_linha_apont',5);
            $table->String('tipo_letra_produt',20);
            $table->boolean('negrito_produt');
            $table->String('tam_letra_produt',5);
            $table->String('tam_letra_hora',5);
            $table->String('altura_linha_hora',5);
            $table->String('tempo_de_atualizacao',5);
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
        Schema::dropIfExists('equipes');
    }
}
