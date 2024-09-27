<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newsletters = [
            [
                'title' => 'Garbage Collection',
                'image' => 'news1.png',
                'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
            [
                'title' => 'Garbage Recycling',
                'image' => 'news2.jpeg',
                'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
            [
                'title' => 'Garbage Journey',
                'image' => 'news3.png',
                'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
            [
                'title' => 'Garbage Recycling 2',
                'image' => 'news4.jpg',
                'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
            [
                'title' => 'Garbage Recycling 2',
                'image' => 'news4.jpg',
                'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
            [
                'title' => 'Garbage Recycling 3',
                'image' => 'news5.jpg',
                'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
            [
                'title' => 'Waste Disposal',
                'image' => 'info2.jpg',
                'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ]
            ];

            DB::table('newsletters')->insert($newsletters);
    }
}
