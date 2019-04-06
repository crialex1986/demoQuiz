<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //Nombres de los campos de las tablas que pueden ser editables por el usuario
    protected $fillable = [
        'titulo'
    ];

    public function preguntas()
    {
        return $this->hasMany('App\Pregunta');
    }
}
