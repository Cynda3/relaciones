<?php

use Illuminate\Database\Seeder;

class empleados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) { 
        DB::table('empleados')->insert([
            'nombre' => str_random(10),
            'apellido1' => str_random(10),
            'apellido2' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'telefono' => '123456789',
            'departamento_id' => rand(1, 10)
        ]);
    	}
    }
}
