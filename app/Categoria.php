<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    public function tareas(){
        return $this->hasMany(Tarea::class);
    }
}
