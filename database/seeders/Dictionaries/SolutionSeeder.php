<?php

namespace Database\Seeders\Dictionaries;

use App\Models\Dictionaries\Solution;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    public function run(): void
    {
        Solution::factory(10)->create();
    }
}
