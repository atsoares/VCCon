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
            $table->unsignedInteger('area_externa_id');
            $table->string('observacao')->nullable();
            $table->string('event_id');
            $table->timestamp('horario_inicio');
            $table->timestamp('horario_fim');
            $table->char('ativo', 1);
            $table->softDeletes();
            $table->timestamps();


            $table->index('condomino_id');
            $table->foreign('condomino_id')->references('id')->on('condominos')->onDelete('cascade');

            $table->index('area_externa_id');
            $table->foreign('area_externa_id')->references('id')->on('areas_externas')->onDelete('cascade');
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
