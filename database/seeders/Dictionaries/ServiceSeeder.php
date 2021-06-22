<?php

namespace Database\Seeders\Dictionaries;

use App\Models\Dictionaries\Platform;
use App\Models\Dictionaries\Service;
use App\Models\Dictionaries\Solution;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = Service::factory(5)->create();

        Solution::all()->each(static function (Solution $solution) use ($services) {
            $solution->services()->attach($services->random(2)->pluck('id')->toArray());
        });

        Platform::all()->each(static function (Platform $platform) use ($services) {
            $platform->services()->attach($services->random(2)->pluck('id')->toArray());
        });
    }
}
