<?php

use Illuminate\Database\Seeder;

class proyectos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) { 
        DB::table('proyectos')->insert([
            'nombre' => str_random(10),
            'titulo' => str_random(10),
            'fechainicio' => date('2018/06/11'),
            'fechafin' => date('2018/08/23'),
            'horasestimadas' => 5,
            'empleado_id' => rand(1, 10)
        ]);
    	}
    }
}
