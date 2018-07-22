<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    protected $table = 'horas';

    protected $fillable = ['hora'];

    public function consulta() {
    	return $this->belongsTo(consulta::class, "hora_id", "id");
    }
}
