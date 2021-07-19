<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacionNormasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacion_normas', function (Blueprint $table) {//
            $table->id();
            $table->string('id_proceso')->nullable(); //SOLO FORMACION NULL
            $table->string('id_proceso_detalle')->nullable(); //SOLO FORMACION->NIVELACION NULL
            $table->string('puntosnorma');
            $table->text('descripcion');
            $table->string('rpdfNorma');
            $table->integer('origen');
            $table->timestamps();
            $table->foreign('origen')->references('id')->on('origen_normas');//FK con la tabla origen_normas
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formacion_normas');
    }
}
