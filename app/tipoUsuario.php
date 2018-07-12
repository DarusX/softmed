<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoUsuario extends Model {

    protected $table = 'tipo_Usuarios';

    protected $fillable = ['descripcion'];
	
}
