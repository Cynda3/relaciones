<?php

use Illuminate\Database\Seeder;

class empleado_proyecto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(departamentos::class);
        $this->call(empleados::class);
        $this->call(proyectos::class);
        $this->call(empleado_proyecto::class);
    }
}
