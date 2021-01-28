<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // Creo la tabla
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->string('email',255);
            $table->string('password',255);
            $table->integer('edad');
            $table->timestamps(); // Permite crear campos con la fecha de creacion y la ultima vez que se modifico
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //Borro la tabla
    {
        Schema::drop('usuarios');
    }
}
