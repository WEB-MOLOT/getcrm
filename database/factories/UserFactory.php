<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;

class UserFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = User::class;

    /**
     * @return array
     */
    #[ArrayShape(['name' => "string", 'email' => "mixed", 'email_verified_at' => "\Illuminate\Support\Carbon", 'password' => "string", 'remember_token' => "string", 'is_admin' => "bool", 'company_id' => "null"])]
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin' => $this->faker->boolean,
            'company_id' => null,
        ];
    }

    public function admin(): Factory
    {
        return $this->state(function () {
            return [
                'is_admin' => 1,
            ];
        });
    }

    public function customer(): Factory
    {
        return $this->state(function () {
            return [
                'is_admin' => 0,
            ];
        });
    }

    public function unverified(): Factory
    {
        return $this->state(function () {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
