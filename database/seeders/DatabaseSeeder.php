<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(SettingSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(MartyerSeeder::class);
        $this->call(KeywordSeeder::class);
        $this->call(DoingSeeder::class);
        
    }
}
