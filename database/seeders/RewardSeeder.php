<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rewards = [
            [
                'name'=>'Voucher Grab Food 10k',
                'points'=>1000,
                'image'=>'grab.jpg',
                'stock'=>25
            ],
            [
                'name'=>'Voucher Indomaret 10k',
                'points'=>2000,
                'image'=>'indomaret.jpg',
                'stock'=>13
            ],
            [
                'name'=>'Voucher Hokben 20k',
                'points'=>5000,
                'image'=>'hokben.jpg',
                'stock'=>5
            ],
            [
                'name'=>'Voucher Shopee 15k',
                'points'=>4000,
                'image'=>'shopee.jpeg',
                'stock'=>17
            ],
            [
                'name'=>'Voucher Solaria 35k',
                'points'=>12000,
                'image'=>'solaria.jpg',
                'stock'=>20
            ],
            [
                'name'=>'Voucher Chatime 25k',
                'points'=>10000,
                'image'=>'chatime.png',
                'stock'=>18
            ],
            [
                'name'=>'Voucher Pepper Lunch 50k',
                'points'=>25000,
                'image'=>'pepperlunch.jpg',
                'stock'=>1
            ],
            [
                'name'=>'Voucher J Co 10k',
                'points'=>5000,
                'image'=>'jco.jpg',
                'stock'=>9
            ],
        ];
        DB::table('rewards')->insert($rewards);
    }
}
