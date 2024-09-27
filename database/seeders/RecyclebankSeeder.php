<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RecyclebankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recyclebanks = [
            [
                'name'=>'Bank Sampah Kebon Jeruk',
                'address'=>'Kebon Jeruk',

            ],
            [
                'name'=>'Bank Sampah Senayan',
                'address'=>'Senayan',
            ],
            [
                'name'=>'Bank Sampah Tanah Abang',
                'address'=>'Tanah Abang',
            ],
        ];
        DB::table('recyclebanks')->insert($recyclebanks);
    }
}
