<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('nome');
            $table->string('telefone');
            $table->char('cpf', 11)->comment('CPF do funcionário.')->unique();
            $table->unsignedInteger('funcao_id');
            $table->char('ativo', 1);
            $table->softDeletes();
            $table->timestamps();


            $table->index('funcao_id');
            $table->foreign('funcao_id')->references('id')->on('funcoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funcionarios');
    }
}
