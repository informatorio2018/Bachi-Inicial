<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    $fillable= ['nombre'];

    public function curso (){
    	return $this->belongToMany('App\Curso','curso_materia')->withPivot('materia_id');
    }

    public function profesor(){
    	return $this->belongToMany('App\Profesor','materia_profesor')->withPivot('materia_id');
    }
}
