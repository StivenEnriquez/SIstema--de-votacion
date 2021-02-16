<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class candidatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $candi = [
            [
                'cedula_candidato'=> 1087188689,
                'nombre' => 'cleudia elena torres',
                'cod_candidato'=> 001,
                'foto'=> '1.jpg',
            ],
    
            [
                'cedula_candidato'=> 1080123456,
                'nombre' => 'andres felipes viveros',
                'cod_candidato'=> 002,
                'foto'=> '2.jpg',
            ]
        ];
        DB::table('candidato')->insert($candi);
    }

}
