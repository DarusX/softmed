<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecetasEnfermedades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas_enfermedades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('receta_id');
            $table->string('medicamento_id');
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
        Schema::dropIfExists('recetas_enfermedades');
    }
}
