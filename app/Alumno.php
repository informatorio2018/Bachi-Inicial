<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable=['dni','apellido','nombre','nacido_en','fecha_nacimiento','proviene_de','tutor','direccion','telefono','email','nacionalidad'];

    public function calificacion (){
    	return $this->belongsTo('App\Calificacion');
    }

    public function asistencia (){
    	return $this->belongsTo('App\Asistencia');
    }

    public function curso (){
    	return $this->belongToMany('App\Curso','alumno_curso')->withPivot('alumno_id');
    }

}

