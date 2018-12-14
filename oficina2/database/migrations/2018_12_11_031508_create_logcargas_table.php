<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogcargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logcargas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('codigo_concessionaria',191);
            $table->String('tipo_registro',30);
            $table->String('acao',30);
            $table->String('chapa',30);
            $table->String('numero_os',30);
            $table->String('prisma',30);
            $table->String('placa',30);
            $table->String('modelo',30);
            $table->String('cor_veiculo',30);
            $table->String('data_abertura',30);
            $table->String('data_prometida',30);
            $table->String('hora_prometida',30);
            $table->String('codigo_cliente',30);
            $table->String('nome_cliente',30);
            $table->String('ddd_residencial',30);
            $table->String('fone_residencial',30);
            $table->String( 'ddd_celular',30);
            $table->String('fone_celular',30);
            $table->String('ddd_comercial',30);
            $table->String('fone_comerical',30);
            $table->String('ramal_comerica',30);
            $table->String('status',30);
            $table->String('data_carga',30);
            $table->String('arquivo',30);
            $table->String('processado',30);
            $table->String('erro_carga',30);
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
        Schema::dropIfExists('logcargas');
    }
}
