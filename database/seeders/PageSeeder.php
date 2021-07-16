<?php

namespace Database\Seeders;

use App\Enums\BlockType;
use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->pages as $slug => $params) {
            /** @var Page $page */
            $page = Page::factory()->create([
                'slug' => $slug,
                'name' => $params['name'],
            ]);
            if (array_key_exists('blocks', $params)) {
                $page->blocks()->createMany($params['blocks']);
            }
        }
    }

    protected array $pages = [
        'about' => [
            'name' => 'О компании',
        ],
        'contacts' => [
            'name' => '',
            'blocks' => [
                [
                    'slug' => 'phone',
                    'type' => BlockType::TEXT,
                    'content' => '+ 7 (495) 725-43-76',
                ],
                [
                    'slug' => 'address',
                    'type' => BlockType::TEXT,
                    'content' => '109544, г. Москва ул. Бульвар Энтузиастов, д.2',
                ],
            ],
        ],
        'customer' => [
            'name' => 'Что такое CX',
        ],
        'news' => [
            'name' => 'Новости',
        ],
        'form' => [
            'name' => 'Отдел продаж',
        ],
        'index' => [
            'name' => 'Главная',
        ],
        'job' => [
            'name' => 'Вакансии',
        ],
        'success_stories' => [
            'name' => 'Истории успеха',
        ],
        'dimarke' => [
            'name' => 'ДИМАРКЭ',
        ],
        'price' => [
            'name' => 'Расчет цены',
        ],
        'privacy' => [
            'name' => 'Политика конфиденциальности',
        ],
    ];
}
