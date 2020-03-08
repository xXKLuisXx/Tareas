<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categoria = new Categoria();
        $categoria->nombre = 'Programación para Internet';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Seminario de Inteligencia Artificial II';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Inteligencia Artificial II';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Sistemas Concurrentes y Distribuidos';
        $categoria->save();

    }
}
