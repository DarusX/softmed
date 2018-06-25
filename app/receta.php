<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receta extends Model {

    protected $table = 'recetas';

    protected $fillable = ['fecha','consulta_id'];

    public function consulta()
    {
    	return $this->belongsTo(consulta::class, 'consulta_id', 'id');
    }

    public function medicamentos()
    {
    	return $this->belongsToMany(medicamento::class, 'recetas_medicamentos', 'receta_id', 'medicamento_id')->withPivot([
            'dosis'
        ])->withTimestamps();
    }

    public function enfermedades()
    {
        return $this->belongsToMany(enfermedad::class, 'recetas_enfermedades', 'receta_id', 'enfermedad_id');
    }
}