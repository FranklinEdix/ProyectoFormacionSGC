<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Facultad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facultad', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sede')->nullable();
            $table->string('Nombre')->nullable();
            $table->timestamps();
            $table->foreign('id_sede')->references('id')->on('sede');//FK CON LA TABLA SEDE
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facultad');
    }
}
