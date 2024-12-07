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
            ['id'=> 1 , 'name_en' => 'damascus', 'name_ar' => 'دمشق', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 25 ],
            ['id'=> 2 , 'name_en' => 'aleppo', 'name_ar' => 'حلب', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 26 ],
            ['id'=> 3 , 'name_en' => 'rural', 'name_ar' => 'ريف دمشق', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 27 ],
            ['id'=> 4 , 'name_en' => 'daraa', 'name_ar' => 'درعا', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 28 ],
            ['id'=> 5 , 'name_en' => 'sweida', 'name_ar' => 'السويداء', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 29 ],
            ['id'=> 6 , 'name_en' => 'quneitra', 'name_ar' => 'القنيطرة', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 30 ],
            ['id'=> 7 , 'name_en' => 'latakia', 'name_ar' => 'اللاذقية', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 31 ],
            ['id'=> 8 , 'name_en' => 'tartus', 'name_ar' => 'طرطوس', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 32 ],
            ['id'=> 9 , 'name_en' => 'idleb', 'name_ar' => 'إدلب', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 33 ],
            ['id'=> 10 , 'name_en' => 'hama', 'name_ar' => 'حماة', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 34 ],
            ['id'=> 11 , 'name_en' => 'hasake', 'name_ar' => 'الحسكة', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 35 ],
            ['id'=> 12 , 'name_en' => 'raqa', 'name_ar' => 'الرقة', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 36 ],
            ['id'=> 13 , 'name_en' => 'deirezzur', 'name_ar' => 'ديرالزور', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 37 ],
            ['id'=> 14 , 'name_en' => 'homs', 'name_ar' => 'حمص', 'location_ar' => '' , 'location_en' => '' , 'phone'=> '','menu_id' => 38 ],
        ];        
        Province::insert($provinces);
    }
}
