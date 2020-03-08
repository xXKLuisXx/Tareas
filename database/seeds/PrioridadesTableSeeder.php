<?php

use App\Prioridad;
use Illuminate\Database\Seeder;

class PrioridadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $prioridad = new Prioridad();
        $prioridad->nombre = 'Baja';
        $prioridad->save();

        $prioridad = new Prioridad();
        $prioridad->nombre = 'Media';
        $prioridad->save();

        $prioridad = new Prioridad();
        $prioridad->nombre = 'Alta';
        $prioridad->save();

    }
}
