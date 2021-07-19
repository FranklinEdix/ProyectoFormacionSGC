<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Escuela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuela', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_facultad')->nullable();
            $table->unsignedBigInteger('id_sede')->nullable();
            $table->string('nombre')->nullable();
            $table->foreign('id_facultad')->references('id')->on('facultad');//FK con la tabla facultad
            $table->foreign('id_sede')->references('id')->on('sede');//FK con la tabla sede 
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
        Schema::dropIfExists('escuela');
    }
}