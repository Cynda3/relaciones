<?php

use Illuminate\Database\Seeder;

class empleado_proyectotable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        	for ($i=0; $i < 10; $i++) { 
            DB::table('empleado_proyecto')->insert([
                'proyecto_id' => rand(1, 10),
                'empleado_id' => rand(1, 10),
                'fechainicio' => '2018/03/18',
                'fechafin' => '2018/03/28'
            ]);
    }
}
}