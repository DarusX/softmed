<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receta extends Model {

    protected $table = 'recetas';

    protected $fillable = ['fecha','paciente_id'];
	
}
