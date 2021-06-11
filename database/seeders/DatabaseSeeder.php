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
            UserSeeder::class,
            NewsItemSeeder::class,
            VacancySeeder::class,
            SuccessStorySeeder::class,
            SolutionSeeder::class,
            ServiceSeeder::class,
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
