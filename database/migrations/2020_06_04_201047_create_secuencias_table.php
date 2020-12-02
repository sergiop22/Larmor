<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecuenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secuencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('caso_id')->unsigned();
            $table->string('nombre');
            $table->string('plano');
            $table->string('tipo_secuencia');
            $table->string('te');
            $table->string('tr');
            $table->string('ti');
            $table->string('grosor_corte');
            $table->integer('campo_vision');
            $table->string('matriz');
            $table->integer('adquisiciones');
            $table->string('direccion_fase');
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
        Schema::dropIfExists('secuencias');
    }
}
