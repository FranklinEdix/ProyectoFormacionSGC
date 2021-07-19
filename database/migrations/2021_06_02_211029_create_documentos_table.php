<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->String('SubProceso_id');
            $table->string('Titulo')->nullable();
            $table->string('Descrpción')->nullable();
            $table->unsignedBigInteger('Encargado')->nullable();
            $table->string('RpdfDocumentos');
            $table->dateTime('FechaEntrega');
            $table->string('TiempoVigencia');
            $table->string('EstadoVigencia');
            $table->timestamps();
            $table->foreign('Encargado')->references('id')->on('users');//FK con la tabla user
            $table->foreign('SubProceso_id')->references('SubProceso_id')->on('subprocesos');//FK con la tabla user
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
}
