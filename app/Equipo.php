<?php

namespace App;

use App\Tarea;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //
    public $timestamps = false;

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function tareas(){
        return $this->hasMany(Tarea::class);
    }

}
