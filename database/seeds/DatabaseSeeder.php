<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Primero eliminamos todas las preguntas y quizzs
        \App\Pregunta::query()->delete();
        \App\Quiz::query()->delete();

        //Ejecute el seeder para quiz1
        $this->call(Quiz1Seeder::class);
        //Ejecute el seeder para quiz2
        $this->call(Quiz2Seeder::class);

    }
}
