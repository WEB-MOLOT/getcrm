<?php

namespace Database\Factories;

use App\Models\UserDocument;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDocumentFactory extends Factory
{
    protected $model = UserDocument::class;

    public function definition(): array
    {
        $dateEnd = $this->faker->dateTimeBetween('+3 days', '+2 weeks');

        return [
            'user_id' => null,
            'number' => $this->faker->numberBetween(10000, 9999999),
            'date_end' => $dateEnd,
            'date_renew' => $dateEnd->add(\DateInterval::createFromDateString('3 days')),
            'pdf' => 'storage/users/documents/demo.pdf',
            'xlsx' => 'storage/users/documents/demo.xlsx',
        ];
    }
}
