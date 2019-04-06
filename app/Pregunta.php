<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //Nombres de los campos de las tablas que pueden ser editables por el usuario
    protected $fillable = [
        'enunciado', 'respuesta','opcion1', 'opcion2', 'opcion3', 'opcion4'
    ];

    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    } 
}
