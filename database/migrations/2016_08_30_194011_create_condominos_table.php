
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondominosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominos', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->char('cpf', 11)->comment('CPF do condômino.')->unique();
            $table->integer('telefone');
            $table->integer('unidade_id')->comment('Unidade que o condômino está morando.')->unsigned()->nullable();
            $table->char('ativo', 1)->comment('Indica se o condômino está ativo.');
            $table->softDeletes();
            $table->timestamps();


            $table->index('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('condominos');
    }
}
