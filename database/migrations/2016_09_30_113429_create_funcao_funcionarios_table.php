<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncaoFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcoes_funcionarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->char('nome')->unique();
            $table->char('ativo',1);
            $table->softDeletes();
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
        Schema::drop('funcoes_funcionarios');
    }
}
