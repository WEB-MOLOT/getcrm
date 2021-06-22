<?php

namespace Database\Seeders\Dictionaries;

use App\Models\Dictionaries\Platform;
use App\Models\Dictionaries\Solution;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    public function run(): void
    {
        $platforms = Platform::factory(5)->create();

        Solution::all()->each(static function (Solution $solution) use ($platforms) {
            $solution->platforms()->attach($platforms->random(2)->pluck('id')->toArray());
        });
    }
}
