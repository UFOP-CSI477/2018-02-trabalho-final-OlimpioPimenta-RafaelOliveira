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
            
            $table->String('consultor',191);
            $table->String('tipo',191);
            $table->String('modelo', 100);
            $table->String('status',50);
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