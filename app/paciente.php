<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model {

    protected $table = 'pacientes';

    protected $fillable = ['nombre, paterno, materno, nacimiento, curp, domicilio'];
	
	public function consultas(){
		return $this->hasMany(consulta::class, "paciente_id", "id");
	}

	public function getNombreCompletoAttribute()
	{
		return $this->nombre . ' ' . $this->paterno . ' ' . $this->materno;
	}
}