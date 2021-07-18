<?php

namespace Database\Seeders;

use App\Models\NewsItem;
use App\Models\SeoData;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class NewsItemSeeder extends Seeder
{
    public function run(): void
    {
        /** @var Collection|NewsItem[] $news */
        $news = NewsItem::factory(40)
            ->has(SeoData::factory(), 'seo')
            ->create();

        $startYear = 2018;

        foreach ($news->chunk(10) as $key => $newsChunk) {
            $currentYear = $startYear + $key;

            /** @var Collection|NewsItem[] $newsChunk */
            $newsChunk->each(static function (NewsItem $item) use ($currentYear) {
                $item->update([
                    'created_at' => $item->created_at->setYear($currentYear),
                    'published_at' => $item->published_at ? $item->published_at->setYear($currentYear) : null,
                ]);
            });

            if ($currentYear === 2021) {
                break;
            }
        }
    }
}
