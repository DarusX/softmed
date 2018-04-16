<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model {

    protected $table = 'pacientes';

    protected $fillable = ['nombre, paterno, materno, nacimiento, curp, domicilio'];
	
}
