<?php

namespace Chasquillas;

use Illuminate\Database\Eloquent\Model;

class Maestros extends Model
    {
    protected $table = "maestros";
    protected $fillable = ['nombre','apellido','correo','telefono','descripcion','foto','categorias_id'];
    }
