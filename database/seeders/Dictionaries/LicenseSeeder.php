<?php

namespace Database\Seeders\Dictionaries;

use App\Models\Dictionaries\License;
use App\Models\Dictionaries\Service;
use Illuminate\Database\Seeder;

class LicenseSeeder extends Seeder
{
    public function run(): void
    {
        $services = Service::all();

        License::factory(20)->create()->each(static function (License $license) use ($services) {
            $license->service()->associate($services->random())->save();
        });
    }
}
