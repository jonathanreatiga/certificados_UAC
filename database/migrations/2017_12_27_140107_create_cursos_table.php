<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id'); //id

            $table->string('cursonombre', 200);
            $table->string('cursodescripcion', 200);
            $table->integer('cursonumerohoras');
            
            $table->timestamps();
            $table->softDeletes();
            //$table->engine = 'InnoDB';	//Specify the table storage engine (MySQL).
            //$table->charset = 'utf8';	//Specify a default character set for the table (MySQL).
            //$table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('cursos');
        Schema::drop('cursos');
    }
}
