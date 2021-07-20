<?php

namespace Database\Factories;

use App\Models\ServiceDescription;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceDescriptionFactory extends Factory
{
    protected $model = ServiceDescription::class;

    /**
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'service_id' => null,
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentences(random_int(2, 6), true),
            'icon' => $this->faker->randomElement([
                'storage/html/img/tab1.svg',
                'storage/html/img/tab2.svg',
                'storage/html/img/tab3.svg',
                'storage/html/img/tab4.svg',
                'storage/html/img/tab5.svg',
                'storage/html/img/tab6.svg',
            ]),
        ];
    }
}
