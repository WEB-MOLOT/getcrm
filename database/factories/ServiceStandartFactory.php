<?php

namespace Database\Factories;

use App\Models\ServiceStandart;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceStandartFactory extends Factory
{
    protected $model = ServiceStandart::class;

    /**
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'service_id' => null,
            'title' => $this->faker->sentence(random_int(2, 5), true),
            'icon' => $this->faker->randomElement([
                'storage/html/img/standart1.svg',
                'storage/html/img/standart2.svg',
                'storage/html/img/standart3.svg',
                'storage/html/img/standart4.svg',
                'storage/html/img/standart5.svg',
                'storage/html/img/standart6.svg',
            ]),
        ];
    }
}
