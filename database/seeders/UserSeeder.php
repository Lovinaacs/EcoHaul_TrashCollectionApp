<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'=>'Alisha',
                'age'=>21,
                'gender'=>'Female',
                'address'=>'Jakarta Barat',
                'phone'=>'628554613154',
                'points'=>5500,
                'email'=>'alisha@gmail.com',
                'password'=>'alisha123'

            ],
            [
                'name'=>'Cyntia',
                'age'=>20,
                'gender'=>'Female',
                'address'=>'Jakarta Barat',
                'phone'=>'628549913154',
                'points'=>13400,
                'email'=>'cyntia@gmail.com',
                'password'=>'cyntia123'
            ],
            [
                'name'=>'Diva',
                'age'=>20,
                'gender'=>'Female',
                'address'=>'Tangerang',
                'phone'=>'628985613254',
                'points'=>159700,
                'email'=>'diva@gmail.com',
                'password'=>'diva12345'
            ],
        ];
        DB::table('users')->insert($users);
    
    }
}
