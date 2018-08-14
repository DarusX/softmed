<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class consulta extends Model {

    protected $table = 'consultas';

	protected $fillable = ["paciente_id",'fecha', 'hora_id'];
	
	protected $appends = [
		'start_date', 'end_date', 'text'
	];

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

	public function getStartDateAttribute()
	{
		return $this->fecha . ' ' . $this->hora->hora;
	}
	
	public function getEndDateAttribute()
	{
		return $this->fecha . ' ' . DB::table('horas')->select(DB::raw('(hora + INTERVAL 15 MINUTE) AS hora'))->where('id', $this->hora_id)->first()->hora;
	}

	public function getTextAttribute()
	{
		return $this->paciente->nombre_completo;
	}
}
