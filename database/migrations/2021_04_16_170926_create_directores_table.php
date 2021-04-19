<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directores', function (Blueprint $table) {
            $table->id();
            $table->string('IDescuela',3);
            $table->string('IDfacultad',2);
            $table->string('IDsede',2); 
            $table->boolean('estado');
            $table->string('nombre',50);
            $table->string('ape_paterno',50);
            $table->string('ape_materno',50);
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
        Schema::dropIfExists('directores');
    }
}
