<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {       
        $mainMenus = [
            ['id' => 1 ,'title_en' => 'Home', 'title_ar' => 'الرئيسية', 'url' => '/' , 'order' => 1 , 'locked' => true ],
            ['id' => 2 ,'title_en' => 'Who We Are?', 'title_ar' => 'من نحن؟', 'url' => '', 'order' => 2 , 'locked' => true],
            ['id' => 3 ,'title_en' => 'What We Do?', 'title_ar' => 'ماذا نفعل؟', 'url' => '', 'order' => 3 , 'locked' => true],
            ['id' => 4 ,'title_en' => 'Our News', 'title_ar' => 'أخبارنا', 'url' => '', 'order' => 4 , 'locked' => true],
            ['id' => 5 ,'title_en' => 'Our Achievements', 'title_ar' => 'إنجازاتنا', 'url' => '', 'order' => 5 , 'locked' => true],
            ['id' => 6 ,'title_en' => 'Awareness and Guidance', 'title_ar' => 'توعية وإرشادات', 'url' =>'', 'order' => 6 , 'locked' => true ],
            ['id' => 7 ,'title_en' => 'Join Us', 'title_ar' => 'انضم إلينا', 'url' => '', 'order' => 7 , 'locked' => true],
        ];
        Menu::insert($mainMenus);
 
        $whoMenus = [
            ['id' => 8 ,'title_en' => 'About Us', 'title_ar' => 'عن المنظمة', 'url' => '', 'order' => 1 , 'menu_id' => 2],
            ['id' => 9 ,'title_en' => 'Our Story', 'title_ar' => 'قصتنا', 'url' => '', 'order' => 3, 'menu_id' => 2],
            ['id' => 10 ,'title_en' => 'Our Principles?', 'title_ar' => 'مبادئنا', 'url' => '', 'order' => 2, 'menu_id' => 2],
            ['id' => 11 ,'title_en' => 'Where We Work?', 'title_ar' => 'أين نعمل؟', 'url' => '', 'order' => 4, 'menu_id' => 2],
            ['id' => 12 ,'title_en' => 'About the International Red Cross and Red Crescent Movement', 'title_ar' => 'عن الحركة الدولية للصليب الأحمر والهلال الأحمر', 'url' => '', 'order' => 5, 'menu_id' => 2],
        ];
        Menu::insert($whoMenus);
        
        $doMenus = [
            ['id' => 13 ,'title_en' => 'Relief', 'title_ar' => 'الإغاثة',  'url' => "search?doing=1", 'order' => 1,  'locked' => true ,'menu_id' => 3],
            ['id' => 14 ,'title_en' => 'Medical Services', 'title_ar' => 'الخدمات الطبية',  'url' => "search?doing=2", 'order' => 2,  'locked' => true ,'menu_id' => 3],
            ['id' => 15 ,'title_en' => 'Emergency Medical Services','title_ar' => 'الخدمات الطبية الطارئة',  'url' => "search?doing=3", 'order' => 3 , 'locked' => true ,'menu_id' => 3],
            ['id' => 16 ,'title_en' => 'Community Services and Protection','title_ar' => 'الخدمات المجتمعية والحماية',  'url' => "search?doing=4", 'order' => 4 , 'locked' => true ,'menu_id' => 3],
            ['id' => 17 ,'title_en' => 'Water and Rehabilitation', 'title_ar' => 'المياه وإعادة التأهيل',  'url' => "search?doing=5", 'order' => 5 , 'locked' => true ,'menu_id' => 3],
            ['id' => 18 ,'title_en' => 'Cash and Vouchers', 'title_ar' => 'المساعدات النقدية والقسائم',  'url' => "search?doing=6", 'order' => 6 , 'locked' => true ,'menu_id' => 3],
            ['id' => 19 ,'title_en' => 'Livelihoods', 'title_ar' => 'سبل العيش',  'url' => "search?doing=7", 'order' => 7,  'locked' => true ,'menu_id' => 3],
            ['id' => 20 ,'title_en' => 'Risk Awareness', 'title_ar' => 'التوعية بالمخاطر',  'url' => "search?doing=8", 'order' => 8,  'locked' => true ,'menu_id' => 3],
            ['id' => 21 ,'title_en' => 'Humanitarian Support Project','title_ar' => 'مشروع الدعم الإنساني',  'url' => "search?doing=9", 'order' => 9,  'locked' => true ,'menu_id' => 3],
        ];        
        Menu::insert($doMenus);
   
        $newsMenu = [
            ['id' => 22 ,'title_en' => 'SARC News', 'title_ar' => 'أخبار المنظمة', 'url' => 'search?all=1', 'order' => 1,  'locked' => true,'menu_id' => 4],
            ['id' => 23 ,'title_en' => 'Branch News', 'title_ar' => 'أخبار الفروع', 'url' => '', 'order' => 2,  'locked' => true,'menu_id' => 4],
            ['id' => 24 ,'title_en' => 'Humanitarian Stories', 'title_ar' => 'قصص إنسانية', 'url' => '', 'order' => 3,  'locked' => true,'menu_id' => 4],
            ['id' => 25 ,'title_en' => 'Press Releases', 'title_ar' => 'البيانات الصحفية', 'url' => '', 'order' => 4,  'locked' => true,'menu_id' => 4],    
        ];
        Menu::insert($newsMenu);


        $provinceMenu = [
            ['id' => 39, 'title_en' => 'damascus', 'title_ar' => 'دمشق', 'url' => 'search?province=1', 'order' => 1, 'locked' => true, 'menu_id' => 23],
            ['id' => 26 ,'title_en' => 'aleppo', 'title_ar' => 'حلب', 'url' => 'search?province=2', 'order' => 2, 'locked' => true, 'menu_id' => 23],
            ['id' => 27 ,'title_en' => 'rural', 'title_ar' => 'ريف دمشق', 'url' => 'search?province=3', 'order' => 3, 'locked' => true, 'menu_id' => 23],
            ['id' => 28 ,'title_en' => 'daraa', 'title_ar' => 'درعا', 'url' => 'search?province=4', 'order' => 4, 'locked' => true, 'menu_id' => 23],
            ['id' => 29 ,'title_en' => 'sweida', 'title_ar' => 'السويداء', 'url' => 'search?province=5', 'order' => 5, 'locked' => true, 'menu_id' => 23],
            ['id' => 30 ,'title_en' => 'quneitra', 'title_ar' => 'القنيطرة', 'url' => 'search?province=6', 'order' => 6, 'locked' => true, 'menu_id' => 23],
            ['id' => 31 ,'title_en' => 'latakia', 'title_ar' => 'اللاذقية', 'url' => 'search?province=7', 'order' => 7, 'locked' => true, 'menu_id' => 23],
            ['id' => 32 ,'title_en' => 'tartus', 'title_ar' => 'طرطوس', 'url' => 'search?province=8', 'order' => 8, 'locked' => true, 'menu_id' => 23],
            ['id' => 33 ,'title_en' => 'idlib', 'title_ar' => 'إدلب', 'url' => 'search?province=9', 'order' => 9, 'locked' => true, 'menu_id' => 23],
            ['id' => 34 ,'title_en' => 'hama', 'title_ar' => 'حماة', 'url' => 'search?province=10', 'order' => 10, 'locked' => true, 'menu_id' => 23],
            ['id' => 35 ,'title_en' => 'hasake', 'title_ar' => 'الحسكة', 'url' => 'search?province=11', 'order' => 11, 'locked' => true, 'menu_id' => 23],
            ['id' => 36 ,'title_en' => 'raqa', 'title_ar' => 'الرقة', 'url' => 'search?province=12', 'order' => 12, 'locked' => true, 'menu_id' => 23],
            ['id' => 37 ,'title_en' => 'deirezzur', 'title_ar' => 'ديرالزور', 'url' => 'search?province=13', 'order' => 13, 'locked' => true, 'menu_id' => 23],
            ['id' => 38 ,'title_en' => 'homs', 'title_ar' => 'حمص', 'url' => 'search?province=14', 'order' => 14, 'locked' => true, 'menu_id' => 23],
        ];
        Menu::insert($provinceMenu);

          
        $achievementsMenu = [
            ['title_en' => 'Annual Reports', 'title_ar' => 'التقارير السنوية', 'url' => '', 'order' => 1, 'menu_id' => 5],
            ['title_en' => 'Infographics', 'title_ar' => 'إنفوغراف', 'url' => '', 'order' => 2, 'menu_id' => 5],
            ['title_en' => 'Infographics', 'title_ar' => 'الحملات', 'url' => 'search?type=campaign', 'order' => 3, 'menu_id' => 5],
        ];
        Menu::insert($achievementsMenu);


        $joinMenu = [
            ['title_en' => 'Vacancies', 'title_ar' => 'وظائف شاغرة', 'url' => 'search?type=vacancy', 'order' => 1, 'menu_id' => 7 ,'locked' => true],
            ['title_en' => 'Volunteer With Us', 'title_ar' => 'تطوع معنا', 'url' => '', 'order' => 2, 'menu_id' => 7, 'locked' => true],
        ];
        Menu::insert($joinMenu);    
    }
}
