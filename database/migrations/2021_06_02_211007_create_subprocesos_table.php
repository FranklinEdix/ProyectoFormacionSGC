<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubprocesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subprocesos', function (Blueprint $table) {
            //$table->id();
            $table->string('SubProceso_id',8)->primary();
            $table->String('Proceso_id')->unsigned();
            $table->string('Nombre')->nullable();
            $table->timestamps();
            $table->foreign('Proceso_id')->references('idproceso')->on('procesos');//FK con la tabla procesos
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subprocesos');
    }
}
