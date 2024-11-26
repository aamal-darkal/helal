<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $components = [
            [
                'key_en' => 'logo',
                'key_ar' => 'الشعار',
                'value_en' => 1,
                'value_ar' => 1,
                'isFile' => 1,
            ],
            [
                'key_en' => 'main-img',
                'key_ar' => 'الصورة الرئيسية',
                'value_en' => 2,
                'value_ar' => 2,
                'isFile' => 1,
            ],
            [
                'key_en' => 'title',
                'key_ar' => 'العنوان',
                'value_en' => 'Syrian Arabic Red Crescent',
                'value_ar' => 'الهلال الأحمر العربي السوري',
            ],
            [
                'key_en' => 'sub-title',
                'key_ar' => 'العنوان الفرعي',
                'value_en' => 'Large Humanitarian Network',
                'value_ar' => 'شبكة إنسانية واسعة',
            ],
            [
                'key_en' => 'target',
                'key_ar' => 'الهدف',
                'value_en' => 'The Syrian Arab Red Crescent is an independent humanitarian organization of public utility, and it\'s permanent and continuous, and it has a legal entity and enjoys financial and administrative independence. It has a headquarters in Damascus and fourteen provinces in the fourteen governorates of Syria, and sub provinces.',
                'value_ar' =>  'منظمة الهلال الأحمر العربي السوري هي منظمة إنسانية تتمتع بالاستقلال المالي والإداري ذات شخصية اعتبارية لها مركز رئيسي و 14 فرعاً موزعين في جميع المحافظات، إضافة إلى شعب تابعة للفروع.',
            ],
            [
                'key_en' => 'about',
                'key_ar' => 'حول المنظمة',
                'value_en' => 'The Syrian Arab Red Crescent is an independent humanitarian organization of public utility, and it\'s permanent and continuous, and it has a legal entity and enjoys financial and administrative independence. It has a headquarters in Damascus and fourteen provinces in the fourteen governorates of Syria, and sub provinces.',
                'value_ar' =>  'منظمة الهلال الأحمر العربي السوري هي منظمة إنسانية تتمتع بالاستقلال المالي والإداري ذات شخصية اعتبارية لها مركز رئيسي و 14 فرعاً موزعين في جميع المحافظات، إضافة إلى شعب تابعة للفروع.',
            ],
            [
                'key_en' => 'news-sammery-length',
                'key_ar' => 'طول ملخص الخبر',
                'value_en' => 100,
                'value_ar' =>  100,
            ],
            [
                'key_en' => 'story-sammery-length',
                'key_ar' => 'طول ملخص القصة',
                'value_en' => 250,
                'value_ar' =>  250,
            ],
            [
                'key_en' => 'compaign-sammery-length',
                'key_ar' => 'طول ملخص الحملة',
                'value_en' => 50,
                'value_ar' =>  50,
            ],
        ];
        foreach ($components as $component)
            Setting::create($component);
    }
}
