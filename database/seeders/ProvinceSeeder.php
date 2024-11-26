<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $provinces = [
            ['name_ar' => 'دمشق' ,'name_en' => 'damascus', 'location_ar' => 'ابورمانة', 'location_en' => 'AboRemaneh', 'phone' => '0112312344'],
            ['name_ar' => 'درعا', 'name_en' => 'daraa', 'location_ar' => 'درعا البلد' ,'location_en' => 'daraa', 'phone' => '0152312344'],
        ];
        Province::insert($provinces);
    }
}
