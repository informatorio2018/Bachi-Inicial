<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    $fillable=['nombre','matricula','dni','direccion','telefono','email'];

    public function materia (){
    	return $this->belongsToMany('App\Materia','materia_profesor')->withPivot('profesor_id');
    }
}
