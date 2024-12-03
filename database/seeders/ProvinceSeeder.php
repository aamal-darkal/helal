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
        $provinces =[
            ['name_en' => 'damascus', 'name_ar' => 'دمشق', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 25 ],
            ['name_en' => 'aleppo', 'name_ar' => 'حلب', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 26 ],
            ['name_en' => 'rural', 'name_ar' => 'ريف دمشق', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 27 ],
            ['name_en' => 'daraa', 'name_ar' => 'درعا', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 28 ],
            ['name_en' => 'sweida', 'name_ar' => 'السويداء', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 29 ],
            ['name_en' => 'quneitra', 'name_ar' => 'القنيطرة', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 30 ],
            ['name_en' => 'latakia', 'name_ar' => 'اللاذقية', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 31 ],
            ['name_en' => 'tartus', 'name_ar' => 'طرطوس', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 32 ],
            ['name_en' => 'idlib', 'name_ar' => 'إدلب', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 33 ],
            ['name_en' => 'hama', 'name_ar' => 'حماة', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 34 ],
            ['name_en' => 'hasake', 'name_ar' => 'الحسكة', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 35 ],
            ['name_en' => 'raqa', 'name_ar' => 'الرقة', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 36 ],
            ['name_en' => 'deirezzur', 'name_ar' => 'ديرالزور', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 37 ],
            ['name_en' => 'homs', 'name_ar' => 'حمص', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 38 ],
        ];        
        Province::insert($provinces);
    }
}
