<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\user;
use Illuminate\support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([

            'name' => 'admin hector',
            'email' => 'flowchino94@gmail.com',
            'password' => Hash::make('root1234'),
            'fullacces' => '1',
            //'codigo' => 'adm1',
            ]);
        $user1=User::create([

                'name' => 'jorge mario',
                'email' => 'helusaba@hotmail.com',
                'password' => Hash::make('jorge'),
                'fullacces' => '2',
                //'codigo' => 'casa1',
                ]);
                
    }
}
