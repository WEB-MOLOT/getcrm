<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Menus\BurgerMenu;
use App\Models\Menus\FooterMenu;
use App\Models\Menus\TopMenu;
use App\Models\Page;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $pages = Page::all()->keyBy('slug');

        $menus = [
            TopMenu::class => $this->topItems,
            FooterMenu::class => $this->bottomItems,
            BurgerMenu::class => $this->burgerItems,
        ];

        foreach ($menus as $model => $menu) {
            foreach ($menu as $item) {
                /** @var Menu $object */
                $object = new $model;
                $object->newQuery()->create([
                    'name' => $item['name'],
                    'page_id' => $pages->get($item['slug'])->id,
                ]);
            }
        }
    }

    protected array $topItems = [
        [
            'name' => 'Расчет цены',
            'slug' => 'price',
        ],
        [
            'name' => 'Отдел продаж',
            'slug' => 'form',
        ],
    ];

    protected array $bottomItems = [
        [
            'name' => 'Расчет цены',
            'slug' => 'price',
        ],
        [
            'name' => 'Отдел продаж',
            'slug' => 'form',
        ],
    ];

    protected array $burgerItems = [
        [
            'name' => 'О компании',
            'slug' => 'about',
        ],
        [
            'name' => 'Новости',
            'slug' => 'news',
        ],
        [
            'name' => 'Вакансии',
            'slug' => 'job',
        ],
        [
            'name' => 'Истории успеха',
            'slug' => 'success_stories',
        ],
        [
            'name' => 'Контакты',
            'slug' => 'contacts',
        ],
    ];
}
