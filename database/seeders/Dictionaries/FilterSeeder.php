<?php

namespace Database\Seeders\Dictionaries;

use App\Enums\FilterType;
use App\Models\Dictionaries\Filter;
use Illuminate\Database\Seeder;

class FilterSeeder extends Seeder
{
    public function run(): void
    {
        $types = FilterType::values();

        foreach ($types as $type) {
            foreach ($this->items[$type] as $key => $label) {
                Filter::create([
                    'type' => $type,
                    'key' => $key,
                    'label' => $label,
                ]);
            }
        }
    }

    protected array $items = [
        FilterType::ROUTE => [
            10 => 'Поиск и сравнение',
            20 => 'Выбор',
            30 => 'Покупка',
            40 => 'Получение',
            50 => 'Использование',
            60 => 'Обслуживание',
            70 => 'Рекомендации',
        ],
        FilterType::CHANNELS => [
            10 => 'Сайт & Баннер',
            20 => 'Колл-центр',
            30 => 'Мессенджеры',
            40 => 'E-mail',
            50 => 'SMS',
            60 => 'Push',
            70 => 'Медийная реклама',
            80 => 'Платный поиск',
            90 => 'Соц. сети',
            100 => 'Магазин & Чек',
            110 => 'МП/ЛК',
            120 => 'Партнеры & агенты',
        ],
        FilterType::EXPECTATIONS => [
            10 => 'Узнавайте',
            20 => 'Удивляйте',
            30 => 'Вовлекайте',
            40 => 'Упрощайте',
            50 => 'Предлагайте нужное',
            60 => 'Награждайте',
            70 => 'Заслужите доверие',
            80 => 'Будьте последовательны',
            90 => 'Заботьтесь',
        ],
    ];
}
