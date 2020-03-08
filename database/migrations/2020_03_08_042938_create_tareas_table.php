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
            
            // llave foránea categoría
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            //fin llave foránea categoria - $table->unsignedInteger('categoria_id'); //

            // llave foránea prioridad
            $table->unsignedBigInteger('prioridad_id');
            $table->foreign('prioridad_id')->references('id')->on('prioridades');
            // llave foránea prioridad - $table->unsignedBigInteger('prioridad_id'); //
            
            // llave foránea estado
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');
            // fin llave foránea estado

            // llave foránea estado
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            // fin llave foránea user

            $table->boolean('terminado')->nullable();
            $table->date('fecha_terminado')->nullable();
            
            $table->timestamps();
        });
        /*
        Schema::create('tareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
        */
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
