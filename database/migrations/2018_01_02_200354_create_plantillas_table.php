<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantillas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plantillanombre', 45);
            $table->longText('plantillahtml');
            $table->longText('plantillacss');
            $table->string('plantilladescripcion', 45);
            $table->string('plantillaorientacion', 45);
            $table->string('plantillaformato', 45);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('plantillas');
        Schema::drop('plantillas');
    }
}
