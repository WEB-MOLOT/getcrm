<?php

namespace Database\Seeders;

use App\Models\NewsItem;
use App\Models\SeoData;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Symfony\Component\DomCrawler\Crawler;

class NewsItemSeeder extends Seeder
{
    public function run(): void
    {
        app()->environment('production')
            ? $this->loadFromProdServer()
            : $this->createFromFactory();
    }

    protected function createFromFactory(): void
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

    protected function loadFromProdServer(): void
    {
        foreach ($this->pages as $page) {
            $data = file_get_contents($page);

            $crawler = new Crawler($data);

            /** @var Crawler $contents */
            $contents = $crawler->filter('div.container > div.flex > div.item');

            foreach ($contents as $content) {
                $content = new Crawler($content);
                $item = [
                    'published_at' => $date = Carbon::createFromFormat('d.m.Y', $content->filter('div.date')->text()),
                    'slug' => str_replace('http://getcrm.ru/', '', $content->filter('a.link')->first()->attr('href')),
                    'title' => $title = $content->filter('a.name')->text(),
                    'description' => trim(strip_tags(str_replace([
                        $title,
                        $date->format('d.m.Y')
                    ], '', $content->html()))),
                    'content' => $content->filter('a.link')->first()->attr('href'),
                    'image' => 'https://getcrm.ru' . $content->filter('img')->attr('src'),
                ];

                $newsItem = NewsItem::create($item);
                $newsItem->seo()->save(new SeoData());

                $data = file_get_contents($newsItem->content);

                $crawler = new Crawler($data);

                $content = $crawler->filter('div.text')->first();

                $newsItem->update([
                    'content' => $content->html(),
                ]);
            }

        }
    }

    protected array $pages = [
        'http://getcrm.ru/news/2018',
        'http://getcrm.ru/news/2019',
        'http://getcrm.ru/news/2020',
        'http://getcrm.ru/news/2021',
    ];
}
