<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrigenNormasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origen_normas', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');//EJEM: ISO 9001:2015
            $table->string('tipo');//EJEM: 0/1/2/3/4; 0 = ISO
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
        Schema::dropIfExists('origen_normas');
    }
}
