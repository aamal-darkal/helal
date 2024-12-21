<?php

namespace Database\Seeders;

use App\Models\Menu;
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
        /** create menu of province and its record */
        $sarcNewsMenu =   ['title_en' => 'sarc-new', 'title_ar' => 'أخبار المنظمة', 'url' => 'search?province=1', 'order' => 1,  'permit' => 'none', 'menu_id' => 4, 'section_id' => null];
        $sarcNewsprovince =   ['name_en' => 'sarc-new', 'name_ar' => 'المنظمة', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 22];

        Menu::create($sarcNewsMenu)->province()->create($sarcNewsprovince);

        $provinceMenus = [
            ['title_en' => 'damascus', 'title_ar' => 'دمشق', 'order' => 2, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'aleppo', 'title_ar' => 'حلب', 'order' => 3, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'rural', 'title_ar' => 'ريف دمشق', 'order' => 4, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'daraa', 'title_ar' => 'درعا', 'order' => 5, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'sweida', 'title_ar' => 'السويداء', 'order' => 6, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'quneitra', 'title_ar' => 'القنيطرة', 'order' => 7, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'latakia', 'title_ar' => 'اللاذقية', 'order' => 8, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'tartus', 'title_ar' => 'طرطوس', 'order' => 9, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'idlib', 'title_ar' => 'إدلب', 'order' => 10, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'hama', 'title_ar' => 'حماة',  'order' => 11, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'hasake', 'title_ar' => 'الحسكة',  'order' => 12, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'raqa', 'title_ar' => 'الرقة',  'order' => 13, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'deirezzur', 'title_ar' => 'ديرالزور',  'order' => 14, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
            ['title_en' => 'homs', 'title_ar' => 'حمص',  'order' => 15, 'permit' => 'none', 'menu_id' => env('MENU_PROVINCE')],
        ];

        $provinces = [
            ['name_en' => 'damascus', 'name_ar' => 'دمشق', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 25],
            ['name_en' => 'aleppo', 'name_ar' => 'حلب', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 26],
            ['name_en' => 'rural', 'name_ar' => 'ريف دمشق', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 27],
            ['name_en' => 'daraa', 'name_ar' => 'درعا', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 28],
            ['name_en' => 'sweida', 'name_ar' => 'السويداء', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 29],
            ['name_en' => 'quneitra', 'name_ar' => 'القنيطرة', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 30],
            ['name_en' => 'latakia', 'name_ar' => 'اللاذقية', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 31],
            ['name_en' => 'tartus', 'name_ar' => 'طرطوس', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 32],
            ['name_en' => 'idleb', 'name_ar' => 'إدلب', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 33],
            ['name_en' => 'hama', 'name_ar' => 'حماة', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 34],
            ['name_en' => 'hasakeh', 'name_ar' => 'الحسكة', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 35],
            ['name_en' => 'raqa', 'name_ar' => 'الرقة', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 36],
            ['name_en' => 'deirezzur', 'name_ar' => 'ديرالزور', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 37],
            ['name_en' => 'homs', 'name_ar' => 'حمص', 'location_ar' => '', 'location_en' => '', 'phone' => '', 'menu_id' => 38],
        ];

        foreach ($provinceMenus as $key => $provinceMenu) {
            $menu = Menu::create($provinceMenu);
            $province = $menu->province()->create($provinces[$key]);
            $menu->url = "search?province=$province->id";
            $menu->save();
        }
    }
}
