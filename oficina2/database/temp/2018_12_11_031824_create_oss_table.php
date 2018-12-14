<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oss', function (Blueprint $table) {
            $table->increments('id');
            $table->String('numero_os',100);
            $table->String('consultor',100);
            $table->String('data_de_abertura',100);
            $table->String('data_prometida',100);
            $table->String('hora_prometida',100);
            $table->String('placa',100);
            $table->String('modelo',100);
            $table->String('cor_do_veiculo',100);
            $table->String('prisma',100);
            $table->String('status',100);
            $table->String('codigo_cliente',100);
            $table->String('nome_cliente',100);
            $table->String('ddd_residencial',100);
            $table->String('fone_residencial',100);
            $table->String('inclusao',191);
            $table->String('ddd_celular',100);
            $table->String('fone_celular',100);
            $table->String('ddd_comercial',100);
            $table->String('fone_comerical',100);
            $table->String('ramal_comerica',100);       
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
        Schema::dropIfExists('oss');
    }
}
