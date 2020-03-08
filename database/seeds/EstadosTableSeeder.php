<?php

use App\Estado;
use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $estado = new Estado();
        $estado->nombre = 'Iniciado';
        $estado->save();

        $estado = new Estado();
        $estado->nombre = 'En proceso';
        $estado->save();

        $estado = new Estado();
        $estado->nombre = 'Terminado';
        $estado->save();
        
    }
}
