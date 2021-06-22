<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    #[ArrayShape([
        'name' => "string",
        'logo' => "string"
    ])]
    public function definition(): array
    {
        $imagePath = public_path('storage/companies/logos');

        return [
            'name' => $this->faker->company,
            'logo' => config('dev.load_images') ? 'storage/companies/logos/'
                . $this->faker->image(dir: $imagePath, width: 464, height: 150, fullPath: false)
                : 'storage/html/img/airlines2.png',
        ];
    }
}
