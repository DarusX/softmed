<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nota extends Model {

    protected $table = 'notas';

    protected $fillable = ["consulta_id", 'nota'];
	

	public function consulta(){
    	return $this->belongsTo(consulta::class, "consulta_id", "id");
    }


}