<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSesionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesiones', function (Blueprint $table) {
            $table->increments('id');
            
            $table->date('sesionfechainicio');
            $table->date('sesionfechafinal');
            $table->integer('curso_id')->unsigned()->nullable();
            $table->integer('plantilla_id')->unsigned()->nullable();

            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('set null');
            $table->foreign('plantilla_id')->references('id')->on('plantillas')->onDelete('set null');
            
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
        Schema::dropIfExists('sesiones');
    }
}
