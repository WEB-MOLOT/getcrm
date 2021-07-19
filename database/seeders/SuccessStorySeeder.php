<?php

namespace Database\Seeders;

use App\Models\SeoData;
use App\Models\StoryBadge;
use App\Models\StoryResult;
use App\Models\StoryShort;
use App\Models\StorySolution;
use App\Models\StoryTask;
use App\Models\SuccessStory;
use Exception;
use Illuminate\Database\Seeder;

class SuccessStorySeeder extends Seeder
{
    /**
     * @throws Exception
     */
    public function run(): void
    {
        SuccessStory::factory(5)
            ->has(StoryBadge::factory()->count(3), 'badges')
            ->has(StoryResult::factory()->count(1), 'result')
            ->has(SeoData::factory()->count(1), 'seo')
            ->has(StoryShort::factory()->count(random_int(2, 4)), 'shorts')
            ->has(StoryTask::factory()->count(5), 'tasks')
            ->has(StorySolution::factory()->count(5), 'solutions')
            ->create();
    }
}
