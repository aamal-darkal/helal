<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /** ******************************************************* 
         * ********************* page seeder*********************
         *******************************************************/
        $pages = [
            ['id' => 1,'type' => 'page', 'title_ar' => 'عن المنظمة', 'title_en' => 'About Us', 'content_ar' => '', 'content_en' => '', 'summary_length' => 100, 'date' => '2025-01-01', 'hidden' => false, ],
            ['id' => 2,'type' => 'page', 'title_ar' => 'قصتنا', 'title_en' => 'Our Story', 'content_ar' => '', 'content_en' => '', 'summary_length' => 100, 'date' => '2025-01-01', 'hidden' => false, ],
            ['id' => 3,'type' => 'page', 'title_ar' => 'مبادئنا', 'title_en' => 'Our Principles?', 'content_ar' => '', 'content_en' => '', 'summary_length' => 100, 'date' => '2025-01-01', 'hidden' => false, ],
            ['id' => 4,'type' => 'page', 'title_ar' => 'أين نعمل؟', 'title_en' => 'Where We Work?', 'content_ar' => '', 'content_en' => '', 'summary_length' => 100, 'date' => '2025-01-01', 'hidden' => false, ],
            ['id' => 5,'type' => 'page', 'title_ar' => 'عن الحركة الدولية للصليب الأحمر والهلال الأحمر', 'title_en' => 'About the International Red Cross and Red Crescent Movement', 'content_ar' => '', 'content_en' => '', 'summary_length' => 100, 'date' => '2025-01-01', 'hidden' => false, ],
            ['id' => 6,'type' => 'page', 'title_ar' => 'البيانات الصحفية', 'title_en' => 'Press Releases', 'content_ar' => '', 'content_en' => '', 'summary_length' => 100, 'date' => '2025-01-01', 'hidden' => false, ],
            ['id' => 7,'type' => 'page', 'title_ar' => 'التقارير السنوية', 'title_en' => 'Annual Reports', 'content_ar' => '', 'content_en' => '', 'summary_length' => 100, 'date' => '2025-01-01', 'hidden' => false, ],
            ['id' => 8,'type' => 'page', 'title_ar' => 'إنفوغراف', 'title_en' => 'Infographics', 'content_ar' => '', 'content_en' => '', 'summary_length' => 100, 'date' => '2025-01-01', 'hidden' => false, ],
            ['id' => 9,'type' => 'page', 'title_ar' => 'تطوع معنا', 'title_en' => 'Volunteer With Us', 'content_ar' => '', 'content_en' => '', 'summary_length' => 100, 'date' => '2025-01-01', 'hidden' => false, ],
        ];
        Section::insert($pages);

        /** ******************************************************* 
         * ********************* Menues *********************
         *******************************************************/
        $mainMenus = [
            ['id' => 1, 'title_en' => 'Home', 'title_ar' => 'الرئيسية', 'url' => '/', 'order' => 1, 'permit' => 'none'],
            ['id' => 2, 'title_en' => 'Who We Are?', 'title_ar' => 'من نحن؟', 'url' => '', 'order' => 2, 'permit' => 'none'],
            ['id' => 3, 'title_en' => 'What We Do?', 'title_ar' => 'ماذا نفعل؟', 'url' => '', 'order' => 3, 'permit' => 'none'],
            ['id' => 4, 'title_en' => 'Our News', 'title_ar' => 'أخبارنا', 'url' => '', 'order' => 4, 'permit' => 'none'],
            ['id' => 5, 'title_en' => 'Our Achievements', 'title_ar' => 'إنجازاتنا', 'url' => '', 'order' => 5, 'permit' => 'none'],
            ['id' => 6, 'title_en' => 'Awareness and Guidance', 'title_ar' => 'توعية وإرشادات', 'url' => '', 'order' => 6, 'permit' => 'none'],
            ['id' => 7, 'title_en' => 'Join Us', 'title_ar' => 'انضم إلينا', 'url' => '', 'order' => 7, 'permit' => 'none'],
        ];
        Menu::insert($mainMenus);

        $whoMenus = [
            ['id' => 8, 'title_en' => 'About Us', 'title_ar' => 'عن المنظمة', 'url' => 'show/1', 'order' => 1, 'permit' => 'update', 'menu_id' => 2 , 'section_id' => 1],
            ['id' => 9, 'title_en' => 'Our Story', 'title_ar' => 'قصتنا', 'url' => 'show/2', 'order' => 3,  'permit' => 'update', 'menu_id' => 2 , 'section_id' => 2],
            ['id' => 10, 'title_en' => 'Our Principles?', 'title_ar' => 'مبادئنا', 'url' => 'show/3', 'order' => 2,  'permit' => 'update', 'menu_id' => 2,  'section_id' => 3],
            ['id' => 11, 'title_en' => 'Where We Work?', 'title_ar' => 'أين نعمل؟', 'url' => 'show/4', 'order' => 4,  'permit' => 'update', 'menu_id' => 2 , 'section_id' => 4],
            ['id' => 12, 'title_en' => 'About the International Red Cross and Red Crescent Movement', 'title_ar' => 'عن الحركة الدولية للصليب الأحمر والهلال الأحمر', 'url' => 'show/5', 'order' => 5,  'permit' => 'update', 'menu_id' => 2 , 'section_id' => 5],
        ];
        Menu::insert($whoMenus);

        $doMenus = [
            ['id' => 13, 'title_en' => 'Relief', 'title_ar' => 'الإغاثة',  'url' => "search?doing=1", 'order' => 1,  'permit' => 'none', 'menu_id' => 3],
            ['id' => 14, 'title_en' => 'Medical Services', 'title_ar' => 'الخدمات الطبية',  'url' => "search?doing=2", 'order' => 2,  'permit' => 'none', 'menu_id' => 3],
            ['id' => 15, 'title_en' => 'Emergency Medical Services', 'title_ar' => 'الخدمات الطبية الطارئة',  'url' => "search?doing=3", 'order' => 3, 'permit' => 'none', 'menu_id' => 3],
            ['id' => 16, 'title_en' => 'Community Services and Protection', 'title_ar' => 'الخدمات المجتمعية والحماية',  'url' => "search?doing=4", 'order' => 4, 'permit' => 'none', 'menu_id' => 3],
            ['id' => 17, 'title_en' => 'Water and Rehabilitation', 'title_ar' => 'المياه وإعادة التأهيل',  'url' => "search?doing=5", 'order' => 5, 'permit' => 'none', 'menu_id' => 3],
            ['id' => 18, 'title_en' => 'Cash and Vouchers', 'title_ar' => 'المساعدات النقدية والقسائم',  'url' => "search?doing=6", 'order' => 6, 'permit' => 'none', 'menu_id' => 3],
            ['id' => 19, 'title_en' => 'Livelihoods', 'title_ar' => 'سبل العيش',  'url' => "search?doing=7", 'order' => 7,  'permit' => 'none', 'menu_id' => 3],
            ['id' => 20, 'title_en' => 'Risk Awareness', 'title_ar' => 'التوعية بالمخاطر',  'url' => "search?doing=8", 'order' => 8,  'permit' => 'none', 'menu_id' => 3],
            ['id' => 21, 'title_en' => 'Humanitarian Support Project', 'title_ar' => 'مشروع الدعم الإنساني',  'url' => "search?doing=9", 'order' => 9,  'permit' => 'none', 'menu_id' => 3],
        ];
        Menu::insert($doMenus);

        $newsMenu = [
            ['id' => 22, 'title_en' => 'SARC News', 'title_ar' => 'أخبار المنظمة', 'url' => 'search', 'order' => 1,  'permit' => 'none', 'menu_id' => 4, 'section_id' => null],
            ['id' => 23, 'title_en' => 'Branch News', 'title_ar' => 'أخبار الفروع', 'url' => '', 'order' => 2,  'permit' => 'none', 'menu_id' => 4, 'section_id' => null],
            ['id' => 24, 'title_en' => 'Humanitarian Stories', 'title_ar' => 'قصص إنسانية', 'url' => 'search?type=story', 'order' => 3,  'permit' => 'none', 'menu_id' => 4, 'section_id' => null],
            ['id' => 25, 'title_en' => 'Press Releases', 'title_ar' => 'البيانات الصحفية', 'url' => 'show/6', 'order' => 4,  'permit' => 'update', 'menu_id' => 4 ,'section_id' => 6],
        ];
        Menu::insert($newsMenu);


        $provinceMenu = [
            ['id' => 39, 'title_en' => 'damascus', 'title_ar' => 'دمشق', 'url' => 'search?province=1', 'order' => 1, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 26, 'title_en' => 'aleppo', 'title_ar' => 'حلب', 'url' => 'search?province=2', 'order' => 2, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 27, 'title_en' => 'rural', 'title_ar' => 'ريف دمشق', 'url' => 'search?province=3', 'order' => 3, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 28, 'title_en' => 'daraa', 'title_ar' => 'درعا', 'url' => 'search?province=4', 'order' => 4, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 29, 'title_en' => 'sweida', 'title_ar' => 'السويداء', 'url' => 'search?province=5', 'order' => 5, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 30, 'title_en' => 'quneitra', 'title_ar' => 'القنيطرة', 'url' => 'search?province=6', 'order' => 6, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 31, 'title_en' => 'latakia', 'title_ar' => 'اللاذقية', 'url' => 'search?province=7', 'order' => 7, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 32, 'title_en' => 'tartus', 'title_ar' => 'طرطوس', 'url' => 'search?province=8', 'order' => 8, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 33, 'title_en' => 'idlib', 'title_ar' => 'إدلب', 'url' => 'search?province=9', 'order' => 9, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 34, 'title_en' => 'hama', 'title_ar' => 'حماة', 'url' => 'search?province=10', 'order' => 10, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 35, 'title_en' => 'hasake', 'title_ar' => 'الحسكة', 'url' => 'search?province=11', 'order' => 11, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 36, 'title_en' => 'raqa', 'title_ar' => 'الرقة', 'url' => 'search?province=12', 'order' => 12, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 37, 'title_en' => 'deirezzur', 'title_ar' => 'ديرالزور', 'url' => 'search?province=13', 'order' => 13, 'permit' => 'none', 'menu_id' => 23],
            ['id' => 38, 'title_en' => 'homs', 'title_ar' => 'حمص', 'url' => 'search?province=14', 'order' => 14, 'permit' => 'none', 'menu_id' => 23],
        ];
        Menu::insert($provinceMenu);


        $achievementsMenu = [
            ['title_en' => 'Annual Reports', 'title_ar' => 'التقارير السنوية', 'url' => 'show/7', 'order' => 1,  'permit' => 'update', 'menu_id' => 5 , 'section_id' => 7],
            ['title_en' => 'Infographics', 'title_ar' => 'إنفوغراف', 'url' => 'show/8', 'order' => 2, 'permit' => 'update', 'menu_id' => 5 , 'section_id' => 8],
            ['title_en' => 'Infographics', 'title_ar' => 'الحملات', 'url' => 'search?type=campaign', 'order' => 3, 'permit' => 'none', 'menu_id' => 5 , 'section_id' => null],
        ];
        Menu::insert($achievementsMenu);


        $joinMenu = [
            ['title_en' => 'Vacancies', 'title_ar' => 'وظائف شاغرة', 'url' => 'search?type=vacancy', 'order' => 1, 'menu_id' => 7, 'permit' => 'none' , 'section_id' => null],
            ['title_en' => 'Volunteer With Us', 'title_ar' => 'تطوع معنا', 'url' => 'show/9', 'order' => 2, 'permit' => 'update', 'menu_id' => 7 , 'section_id' => 9],
        ];
        Menu::insert($joinMenu);       

    }
}
