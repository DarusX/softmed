<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receta_medicamento extends Model {

    protected $table = 'recetas_medicamentos';

    protected $fillable = ['receta_id', 'medicamento_id', 'dosis'];
	
	public function receta()
    {
    	return $this->belongsTo(Receta::class, 'receta_id', 'id');
    }
    public function medicamento()
    {
    	return $this->hasMany(Medicamento::class, 'medicamento_id', 'id');
    }
}
