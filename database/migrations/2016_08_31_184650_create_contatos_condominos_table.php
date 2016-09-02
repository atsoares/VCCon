
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosCondominosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos_condominos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('telefone')->nullable();
            $table->string('email')->nullable();
            $table->integer('condomino_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            /*
            * Add constraint e foreign keys
            */
            $table->index('condomino_id');
            $table->foreign('condomino_id')->references('id')->on('condominos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contatos_condominos');
    }
}
