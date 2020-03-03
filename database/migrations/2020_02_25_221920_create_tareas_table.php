<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->bigIncrements('id'); //
            $table->text('nombre_tarea'); //
            $table->text('descripcion')->nullable(); //
            $table->unsignedInteger('categoria_id'); //
            $table->unsignedSmallInteger('prioridad'); //
            $table->text('estatus');
            $table->boolean('terminado')->nullable();
            $table->date('fecha_terminado')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}
