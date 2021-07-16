<?php

namespace Database\Seeders\Dictionaries;

use App\Enums\FilterType;
use App\Models\Dictionaries\Filter;
use Illuminate\Database\Seeder;

class FilterSeeder extends Seeder
{
    public function run(): void
    {
        $k = 1;

        foreach ($this->items as $name => $values) {

            $filter = Filter::create([
                'name' => $name,
                'order' => $k++,
            ]);

            foreach ($values as $key => $value) {
                $filter->values()->create([
                    'name' => $value,
                    'order' => $key,
                ]);
            }
        }
    }

    protected array $items = [
        'Путешествие клиента' => [
            1 => 'Поиск и сравнение',
            2 => 'Выбор',
            3 => 'Покупка',
            4 => 'Получение',
            5 => 'Использование',
            6 => 'Обслуживание',
            7 => 'Рекомендации',
        ],
        'Каналы' => [
            1 => 'Сайт & Баннер',
            2 => 'Колл-центр',
            3 => 'Мессенджеры',
            4 => 'E-mail',
            5 => 'SMS',
            6 => 'Push',
            7 => 'Медийная реклама',
            8 => 'Платный поиск',
            9 => 'Соц. сети',
            10 => 'Магазин & Чек',
            11 => 'МП/ЛК',
            12 => 'Партнеры & агенты',
        ],
        'Ожидания' => [
            1 => 'Узнавайте',
            2 => 'Удивляйте',
            3 => 'Вовлекайте',
            4 => 'Упрощайте',
            5 => 'Предлагайте нужное',
            6 => 'Награждайте',
            7 => 'Заслужите доверие',
            8 => 'Будьте последовательны',
            9 => 'Заботьтесь',
        ],
    ];
}
