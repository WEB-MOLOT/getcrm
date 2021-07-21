<?php

namespace Database\Seeders;

use App\Models\NewsItem;
use App\Models\SeoData;
use Illuminate\Database\Seeder;

class NewsItemSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->items as $item) {
            $newsItem = NewsItem::create($item);
            $newsItem->seo()->save(new SeoData());
        }

//        /** @var Collection|NewsItem[] $news */
//        $news = NewsItem::factory(40)
//            ->has(SeoData::factory(), 'seo')
//            ->create();
//
//        $startYear = 2018;
//
//        foreach ($news->chunk(10) as $key => $newsChunk) {
//            $currentYear = $startYear + $key;
//
//            /** @var Collection|NewsItem[] $newsChunk */
//            $newsChunk->each(static function (NewsItem $item) use ($currentYear) {
//                $item->update([
//                    'created_at' => $item->created_at->setYear($currentYear),
//                    'published_at' => $item->published_at ? $item->published_at->setYear($currentYear) : null,
//                ]);
//            });
//
//            if ($currentYear === 2021) {
//                break;
//            }
//        }
    }

    protected array $items = [
        [
            'published_at' => '2021-04-27',
            'slug' => 'news-9-kompaniya-getcrm-pobedila-v-konkurse-martech-star-awards-2020',
            'title' => 'Компания GETCRM победила в конкурсе MarTech Star Awards 2020 ',
            'description' => 'MarTech Star Awards - это соревнование кейсов и решений в области  автоматизации маркетинга, проводимое Ассоциацией маркетинговых технологий RuMarTech при поддержке международной исследовательской компании Forrester (USA). ',
            'content' => 'http://getcrm.ru/news-9-kompaniya-getcrm-pobedila-v-konkurse-martech-star-awards-2020',
            'image' => 'http://getcrm.ru/files/tmpfiles/icons/Martech.jpg',
        ],
        [
            'published_at' => '2021-06-02',
            'slug' => 'news-7-priglasaem-na-ecom-expo2021-i-zapuskaem-konkurs',
            'title' => 'Приглашаем на ECOM Expo\'2021 и запускаем конкурс',
            'description' => 'Уважаемые коллеги, 9-10 июня мы участвуем в одной из самых масштабных в Европе выставок технологий для интернет-торговли ECOM Expo в «Экспоцентре». Вас ждет 5 потоков интересных бизнес-программ и множество вдохновляющих встреч! ',
            'content' => 'http://getcrm.ru/news-7-priglasaem-na-ecom-expo2021-i-zapuskaem-konkurs',
            'image' => 'http://getcrm.ru/files/tmpfiles/icons/ecom-1.jpg',
        ],
        [
            'published_at' => '2021-06-07',
            'slug' => 'news-11-getcrm-na-mezdunarodnoi-vystavke-neftegaz-2021',
            'title' => 'GETCRM на международной выставке «Нефтегаз-2021»',
            'description' => 'Мы были рады принять участие в экспозиции нефтегазовой области, проводимой еще с 1978 года.',
            'content' => 'http://getcrm.ru/news-11-getcrm-na-mezdunarodnoi-vystavke-neftegaz-2021',
            'image' => 'http://getcrm.ru/files/tmpfiles/icons/nf02.jpg',
        ],
        [
            'published_at' => '2021-06-11',
            'slug' => 'news-13-kompaniya-getcrm-prinyala-ucastie-v-ecom-expo2021',
            'title' => 'Компания GETCRM приняла участие в ECOM Expo\'2021',
            'description' => 'Крупнейшая выставка технологий для интернет-торговли ECOM Expo\'2021 прошла 9-10 июня в Экспоцентре. Мероприятие посетило множество отраслевых экспертов и именитых спикеров.',
            'content' => 'http://getcrm.ru/news-13-kompaniya-getcrm-prinyala-ucastie-v-ecom-expo2021',
            'image' => 'http://getcrm.ru/files/tmpfiles/icons/Vnutri.jpg',
        ],
    ];
}
