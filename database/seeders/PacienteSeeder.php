<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Paciente::factory(10)->create();
/*        $data = [
            'ci' => '1326546',
            'nombre' => 'Marcelo',
            'paterno' => 'Flores',
            'materno' => 'Calderon',
            'edad' => 99,
            'telefono' => 92346546,
            'sexo' => 'Masculino',
            'persona' => 'Adulta'

        ]; 
        DB::table('pacientes')->insert($data); */
    }
}
