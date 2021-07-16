<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (!app()->isProduction()) {
            $this->clearOldImages();
        }

        $this->call([
            Dictionaries\FilterSeeder::class,
            Dictionaries\SolutionSeeder::class,
            Dictionaries\PlatformSeeder::class,
            Dictionaries\ServiceSeeder::class,
            Dictionaries\AmountDiscountSeeder::class,
            Dictionaries\PeriodDiscountSeeder::class,
            Dictionaries\LicenseSeeder::class,
            PageSeeder::class,
            CompanySeeder::class,
            SettingSeeder::class,
            UserSeeder::class,
            NewsItemSeeder::class,
            VacancySeeder::class,
            SuccessStorySeeder::class,
            SolutionSeeder::class,
            ServiceSeeder::class,
            UserProductSeeder::class,
            UserDocumentSeeder::class,
        ]);
    }

    protected function clearOldImages()
    {
        collect([
            public_path('storage/news/*.png'),
            public_path('storage/stories/images/*.png'),
            public_path('storage/stories/logos/*.png'),
            public_path('storage/stories/before/*.png'),
            public_path('storage/stories/after/*.png'),
            public_path('storage/solutions/images/*.png'),
            public_path('storage/services/images/*.png'),
        ])->each(function ($path) {
            foreach (glob($path) as $filepath) {
                unlink($filepath);
            }
        });
    }
}
