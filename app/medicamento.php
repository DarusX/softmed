<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicamento extends Model {

    protected $table = 'medicamentos';

    protected $fillable = ['nombre', 'compuesto', 'presentacion'];

    public function receta_medicamento() {
   	return $this->belongsTo(receta_medicamento::class, "medicamento_id", "id");
    }
	
}
