<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietarioregistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietarioregistro', function (Blueprint $table) {
            $table->increments('id');

            $table->string('propietarioregistroentidad', 45);
            $table->integer('propietarioregistroentidadid');
            $table->integer('propietarioregistrousuarioid');

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
        Schema::dropIfExists('propietarioregistro');
    }
}
