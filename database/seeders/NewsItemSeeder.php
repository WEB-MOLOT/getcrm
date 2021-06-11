<?php

namespace Database\Seeders;

use App\Models\NewsItem;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class NewsItemSeeder extends Seeder
{
    public function run(): void
    {
        /** @var Collection|NewsItem[] $news */
        $news = NewsItem::factory(20)->create();

        $startYear = 2018;

        foreach ($news->chunk(3) as $key => $newsChunk) {
            $currentYear = $startYear + $key;

            /** @var Collection|NewsItem[] $newsChunk */
            $newsChunk->each(static function (NewsItem $item) use ($currentYear) {
                $item->update([
                    'created_at' => $item->created_at->setYear($currentYear),
                ]);
            });

            if ($currentYear === 2020) {
                break;
            }
        }
    }
}
