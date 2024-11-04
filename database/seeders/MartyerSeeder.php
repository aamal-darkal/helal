<?php

namespace Database\Seeders;

use App\Models\Martyer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MartyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $martyars = [
            ['name' => 'بشار اليوسف' , 'name_en' => 'Bashar Al Yusef', 'DOB' => '2013', 'city' => 'Homes'],
            ['name' => 'ابراهيم عيد' , 'name_en' => 'Ebrahim Eed', 'DOB' => '1999', 'city' => ''],
            ['name' => 'فاضل عجاج' , 'name_en' => 'Fadel Ajaj', 'DOB' => '2006', 'city' => ''],
        ];
        Martyer::insert($martyars);
    }
}
