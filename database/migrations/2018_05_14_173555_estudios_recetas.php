<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstudiosRecetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios_recetas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estudio_id');
            $table->string('receta_id');
            $table->string('dosis');
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
        Schema::dropIfExists('estudios_recetas');
    }
}
