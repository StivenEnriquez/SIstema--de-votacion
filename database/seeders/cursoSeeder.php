<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class cursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cur = [
            [
                'curso' => 1,
                
            ],
            [
                'curso' => 2,
                
            ],
            [
                'curso' => 3,
                
            ],
            [
                'curso' => 4,
                
            ],
            [
                'curso' => 5,
                
            ],
            [
                'curso' => 6,
                
            ],
            [
                'curso' => 7,
                
            ],
            [
                'curso' => 8,
                
            ],
            [
                'curso' => 9,
                
            ],
            [
                'curso' => 10,
                
            ],
            [
                'curso' => 11,
                
            ]

        ];
        DB::table('cursos')->insert($cur);

    }
}
