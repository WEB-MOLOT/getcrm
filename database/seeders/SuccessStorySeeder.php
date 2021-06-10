<?php

namespace Database\Seeders;

use App\Models\SuccessStory;
use App\Models\SuccessStoryBadge;
use App\Models\SuccessStoryResult;
use Exception;
use Illuminate\Database\Seeder;

class SuccessStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        SuccessStory::factory(5)
            ->has(SuccessStoryBadge::factory()->count(3), 'badges')
            ->has(SuccessStoryResult::factory()->count(1), 'results')
            ->create();
    }
}
