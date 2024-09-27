<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servtypes = [
            [
                'name'=>'Pick Up'
            ],
            [
                'name'=>'Drop Off',
            ],
        ];
        DB::table('servtypes')->insert($servtypes);
    }
}
