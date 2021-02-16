<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class alumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alum = [
            [
                'cedula_alumno'=> 20200101,
                'nombre' => 'jair araujo',
                'curso' => 11,
                
            ],
            [
                'cedula_alumno'=> 20200102,
                'nombre' => 'jose benavidez',
                'curso' => 11,
                
            ]


        ];
        DB::table('alumno')->insert($alum);
    }
}
