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

    public function receta_medicamento()
    {
    	return $this->hasMany(receta_medicamento::class, 'receta_id', 'id');
    }

	
}


//$receta = Receta::find($id);

//$receta->consulta->paciente->nombreCompleto;