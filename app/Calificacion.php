<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
   	protected $fillable= ['id_alumno','1_timestre','2_trimestre','3_trimestre','integral','diciembre','marzo','final'];

   	public function alumno(){
   		return $this->hasMany('App\Alumno');
   	}
}
