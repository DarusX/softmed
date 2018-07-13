<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consulta extends Model {

    protected $table = 'consultas';

    protected $fillable = ["paciente_id",'fecha', 'hora'];

    public function paciente() {
    	return $this->belongsTo(paciente::class, "paciente_id", "id");
    }
	
	public function nota(){
		return $this->hasOne(nota::class, "consulta_id", "id");
	}

	public function recetas(){
		return $this->hasMany(receta::class, "consulta_id", "id");
	}
}
