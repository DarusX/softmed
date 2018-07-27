<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consulta extends Model {

    protected $table = 'consultas';

    protected $fillable = ["paciente_id",'fecha', 'hora_id'];

    public function paciente() {
    	return $this->belongsTo(paciente::class, "paciente_id", "id");
    }
	
	public function nota(){
		return $this->hasOne(nota::class, "consulta_id", "id");
	}

	public function recetas(){
		return $this->hasMany(receta::class, "consulta_id", "id");
	}
	
	public function hora(){
		return $this->belongsTo(hora::class, "hora_id", "id");
	}

	public function getFecha_HoraAttribute(){
		$dateTime = Carbon::parse($this->fecha, hora);
		return($dateTime);
	}
}
