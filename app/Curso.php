<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    $fillable=['curso','orientacion'];

    public function alumno (){
    	return $this->belongToMany('App\Alumno','alumno_curso')->withPivot('curso_id');
    }

    public function materia (){
    	return $this->belongToMany('App\Materia','curso_materia')->withPivot('curso_id');
    }
}
