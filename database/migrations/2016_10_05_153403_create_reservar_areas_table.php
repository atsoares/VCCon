<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservarAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservar_areas', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->unsignedInteger('condomino_id');
            $table->json('area_externa');
            $table->string('observacao')->nullable();
            $table->timestamp('horario_inicio');
            $table->timestamp('horario_fim');
            $table->char('ativo', 1);
            $table->softDeletes();
            $table->timestamps();


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
        Schema::drop('reservar_areas');
    }
}
