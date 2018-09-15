<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable=['id_alumno','fecha','asistencia','comentario'];

    public function alumno(){
    	return $this->hasMany('App\Alumno');
    }
}
