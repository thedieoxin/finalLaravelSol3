<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestrosTable extends Migration
    {
    public function up()
        {
        /*****************************/
        Schema::create('maestros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo')->unique();
            $table->string('telefono');
            $table->string('descripcion');
            $table->string('foto');
            $table->timestamps();
            $table->integer('categorias_id')->unsigned();
            $table->foreign('categorias_id')->references('id')->on('categorias');
        });
        /*****************************/
    }

    public function down()
        {
        Schema::drop('maestros');
        }

    }
