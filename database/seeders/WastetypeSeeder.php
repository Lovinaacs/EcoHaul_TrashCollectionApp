<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class WastetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wastetypes = [
            [
                'name'=>'Organic',
                'points'=>5000,
            ],
            [
                'name'=>'Plastic',
                'points'=>1000,
            ],
            [
                'name'=>'Residue',
                'points'=>2000,
            ],
        ];
        DB::table('wastetypes')->insert($wastetypes);
    }
}
