<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToContatosCondominosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contatos_condominos', function (Blueprint $table) {
            $table->char('ativo', 1)->after('condomino_id')->comment('Indica se o carro do condômino está ativo.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contatos_condominos', function (Blueprint $table) {
            $table->dropColumn('ativo');
        });
    }
}
