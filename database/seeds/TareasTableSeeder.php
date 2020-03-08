<?php

use App\Tarea;
use Illuminate\Database\Seeder;

class TareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tarea = new Tarea();
        $tarea->nombre_tarea = 'Tarea 1';
        $tarea->descripcion = 'Tarea urgente';
        $tarea->categoria_id = 1;
        $tarea->prioridad_id = 1;
        $tarea->estado_id = 1;
        $tarea->user_id = 1;
        $tarea->fecha_terminado = now();
        $tarea->terminado = 1;
        $tarea->save();

    }
}
