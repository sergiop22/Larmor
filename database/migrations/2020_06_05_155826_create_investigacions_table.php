<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 100);
            $table->string('descripcion', 200);
            $table->text('contenido');
            $table->string('imagen');
            $table->tinyInteger('habilitado')->default(1);
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
        Schema::dropIfExists('investigacions');
    }
}
