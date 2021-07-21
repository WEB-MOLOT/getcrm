<?php

namespace Database\Seeders;

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
        foreach ($this->stories as $story) {
            $story = collect($story);
            $model = SuccessStory::create($story->only('title', 'image', 'logo', 'logo2')->toArray());
            $model->seo()->create($story->get('seo'));
            $model->result()->create($story->get('result'));
            $model->badges()->createMany($story->get('badges'));
            $model->shorts()->createMany($story->get('shorts'));
            $model->tasks()->createMany($story->get('tasks'));
            $model->solutions()->createMany($story->get('solutions'));
        }

//        SuccessStory::factory(5)
//            ->has(StoryBadge::factory()->count(3), 'badges')
//            ->has(StoryResult::factory()->count(1), 'result')
//            ->has(SeoData::factory()->count(1), 'seo')
//            ->has(StoryShort::factory()->count(random_int(2, 4)), 'shorts')
//            ->has(StoryTask::factory()->count(5), 'tasks')
//            ->has(StorySolution::factory()->count(5), 'solutions')
//            ->create();
    }

    protected array $stories = [
        [
            'title' => 'Внедрение системы Oracle Responsys в АК «Уральские авиалинии»',
            'image' => 'storage/html/img/history.png',
            'logo' => 'storage/html/img/airlines.png',
            'logo2' => 'storage/html/img/airlines2.png',
            'seo' => [
                'title' => null,
                'keywords' => null,
                'description' => null,
                'disable_index' => 0,
            ],
            'tasks' => [
                ['line' => 'Отсутствие последовательного подхода при взаимодействии с клиентами.',],
                ['line' => 'Необходимость обеспечения релевантной коммуникации для каждого клиента или клиентского сегмента.',],
                ['line' => 'Потребность в отправке рассылок по различным цифровым каналам в рамках одной системы.',],
                ['line' => 'Внедрение триггерных коммуникаций.',],
                ['line' => 'Возможность тестирования контента рассылок.',],
                ['line' => 'Персонализация контента рассылок.',],
            ],
            'solutions' => [
                ['line' => 'Интеграция системы кросс-канальной коммуникации Oracle Responsys с системой Oracle Siebel CRM и системами для бронирования билетов.',],
                ['line' => 'Проведение глубокой сегментации клиентов (согласно их профилю, истории покупок, предпочтениям и LTV) для формирования стратегии коммуникаций в разрезе сегментов и отдельных клиентов.',],
                ['line' => 'Реализация персонализированных маркетинговых и триггерных рассылок по событию и брошенной корзине по SMS, email и Push.',],
                ['line' => 'Настройка динамического контента персонализированных рассылок на основе уровня лояльности клиента, его местоположения, предпочитаемых услугах и направлениях.',],
                ['line' => 'Применение BPI, где маркетологи и дизайнеры агентства GETCRM провели анализ контента цифровых каналов, сформировали гипотезы для повышения конверсии, а также оказали помощь в создании дизайна шаблонов рассылок для эффективной коммуникации с клиентами.',],
            ],
            'shorts' => [
                [
                    'line' => 'Основана в 1943 году',
                ],
                [
                    'line' => 'Более 10 000 000 пассажиров в год',
                ],
                [
                    'line' => 'Более 200 направлений',
                ],
                [
                    'line' => '48 авиалайнеров',
                ],
            ],
            'badges' => [
                [
                    'title' => 'Увеличен средний оборот с покупателя',
                    'value' => '7%',
                ],
                [
                    'title' => 'Персонализированные рассылки по брошенной корзиной',
                    'value' => '16%',
                ],
            ],
            'result' => [
                'after' => 'storage/html/img/before.png',
                'before' => 'storage/html/img/before.png',
                'description' => 'Пример шаблона персонализированной рассылки с динамическим контентом с напоминанием о сгорающих бонусах для мотивации клиента к покупке.',
            ],
        ],
        [
            'title' => 'Внедрение системы персонализации контента сайта в АК «Уральские авиалинии»',
            'image' => 'storage/html/img/history.png',
            'logo' => 'storage/html/img/airlines.png',
            'logo2' => 'storage/html/img/airlines2.png',
            'seo' => [
                'title' => null,
                'keywords' => null,
                'description' => null,
                'disable_index' => 0,
            ],
            'tasks' => [
                ['line' => 'Невозможность учесть предпочтения разных категорий клиентов при посещении сайта',],
                ['line' => 'Необходимость связать посетителей сайта с уже имеющимися цифровыми профилями',],
                ['line' => 'Подбор персонализированных предложений в режиме онлайн для увеличения продаж авиабилетов и доп. услуг',],
                ['line' => 'Оптимизация контента сайта для разных клиентских сегментов.',],
            ],
            'solutions' => [
                ['line' => 'Загрузка данных о профиле клиентов, предыдущих покупках, предпочтениях и текущей брони из Siebel CRM для осуществления кросс продаж и генерации персонализированных предложений на сайте компании',],
                ['line' => 'Настройка баннеров и уведомлений на сайте, генерируемых в режиме реального времени на основе предпочтений посетителя и его поведения на сайте',],
                ['line' => 'Проведение MVT тестирования главной страницы (разделов «авиабилеты», «покупка авиабилетов» и «специальные предложения») для обеспечения уникального клиентского опыта для каждого клиентского сегмента',],
                ['line' => 'Помощь в разработке дизайна сайта и онлайн баннеров маркетологами и дизайнерами агентства GETCRM, в рамках специализированного сервиса (Business Practice Implementation).',],
            ],
            'shorts' => [
                [
                    'line' => 'Основана в 1943 году',
                ],
                [
                    'line' => 'Более 10 000 000 пассажиров в год',
                ],
                [
                    'line' => 'Более 200 направлений',
                ],
                [
                    'line' => '48 авиалайнеров',
                ],
            ],
            'badges' => [
                [
                    'title' => 'MVT тестирование гипотез главной страницы',
                    'value' => '5%',
                ],
            ],
            'result' => [
                'after' => 'http://getcrm.ru/files/tmpfiles/success_stories/max/banners_after.jpg',
                'before' => 'http://getcrm.ru/files/tmpfiles/success_stories/max/banners_before.jpg',
                'description' => 'прим. баннера',
            ],
        ],
    ];
}
