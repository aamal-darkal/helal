<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ['type', 'title_ar', 'title_en', 'content_ar', 'content_en', 'visible', 'image_id', 'province_id', 'created_by', 'updated_by'];
        $news = [
           [ 'type' => 'news' , 'content_ar' => ''
        ],
    ];
    }
}
