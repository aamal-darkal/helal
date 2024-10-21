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
        // save lang keys for name & location
        $branches = [
            ['name' => '' , 'location' => '' , 'phone' => 13],
        ];
        Branch::insert($branches);
    }
}
