<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [
        'categoria_id',
        'descripcion',  
        'user_id', 
        'nombre_tarea', 
        'prioridad_id' , 
        'fecha_termino',
        'fecha_inicio']; // asignacion masiva de datos
    protected $dates = ['fecha_inicio', 'fecha_termino', 'created_at', 'updated_at'];// columnas instancias de carbon
    //
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function prioridad(){
        return $this->belongsTo(Prioridad::class);
    }

    public function estado(){
        return $this->belongsTo(Estado::class);
    }
    
}
