<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class paciente extends Model {

    protected $table = 'pacientes';

    protected $fillable = ['nombre, paterno, materno, nacimiento, curp, domicilio'];
	
	public function consultas(){
		return $this->hasMany(consulta::class, "paciente_id", "id");
	}

	public function getNombreCompletoAttribute()
	{
		return $this->paterno . ' ' . $this->materno . ' ' . $this->nombre;
	}

	public function scopeSearch($query, $nombre)
	{
		return $query->where('nombre', 'LIKE', '%' . $nombre . '%')
		->orWhere('paterno', 'LIKE', '%' . $nombre . '%')
		->orWhere('materno', 'LIKE', '%' . $nombre . '%');
	}

	public function Edad()
	{
		$edad = Carbon::createFromDate($paciente->nacimiento)->age;
	}
	
}