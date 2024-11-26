<?php

namespace Database\Seeders;

use App\Models\Keyword;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $keywords = [
            ['word_en'=> 'relief', 'word_ar' => 'إغاثة'],
            ['word_en'=> 'medical services ', 'word_ar' => 'خدمات طبية'],
            ['word_en'=> 'emergency services', 'word_ar' => 'خدمات طارئة'],
            ['word_en'=> 'water', 'word_ar' => 'مياه'],
            ['word_en'=> 'rehabilitation', 'word_ar' => 'إعادة التأهيل'],
            ['word_en'=> 'cash assistance', 'word_ar' => 'مساعدات نقدية'],
            ['word_en' => 'vouchers', 'word_ar' => 'قسائم'],
            ['word_en' => 'community services', 'word_ar' => 'مساعدات مجتمعية'],
            ['word_en' => 'Protection', 'word_ar' => 'حماية'],
            ['word_en' => 'livelihoods', 'word_ar' => 'سبل العيش'],
            ['word_en' => 'humanitarian support', 'word_ar' => 'الدعم الإنساني'],
            ['word_en' => 'risk awareness', 'word_ar' => 'التوعية بالمخاطر'],
        ];
        Keyword::insert($keywords);
    }
}
