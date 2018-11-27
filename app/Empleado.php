<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
	
    public function proyectos(){
    	return $this->belongsToMany('App\Proyecto');
    }
    public function proyecto(){
        return $this->hasOne('App\Proyecto');
    }

    public function departamento(){
    	return $this->belongsTo('App\Departamento')->withPivot('fechainicio', 'fechafin');
    }
}
