<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosCondominosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros_condominos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modelo');
            $table->string('marca');
            $table->string('placa')->unique();
            $table->integer('ano');
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
        Schema::drop('carros_condominos');
    }
}