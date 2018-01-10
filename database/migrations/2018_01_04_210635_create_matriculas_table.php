<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matriculadescargas')->nullable();
            $table->integer('sesiones_id')->unsigned()->nullable();
            $table->integer('rol_id')->unsigned()->nullable();
            $table->integer('estados_id')->unsigned()->nullable();
            //$table->integer('usuarios_id')->unsigned()->nullable();

            $table->foreign('sesiones_id')->references('id')->on('sesiones')->onDelete('set null');
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('set null');
            $table->foreign('estados_id')->references('id')->on('estados')->onDelete('set null');
            //$table->foreign('usuarios_id')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('matriculas');
    }
}
