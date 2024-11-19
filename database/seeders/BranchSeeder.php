<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $branches = [
            ['name' => 'damascus' ,'name_en' => 'damascus', 'location' => 'ابورمانة', 'location_en' => 'AboRemaneh', 'phone' => '0112312344'],
            ['name' => 'daraa', 'name_en' => 'daraa', 'location' => 'درعا البلد' ,'location_en' => 'daraa', 'phone' => '0152312344'],
        ];
        Branch::insert($branches);
    }
}
