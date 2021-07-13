<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProduct;
use Illuminate\Database\Seeder;

class UserProductSeeder extends Seeder
{
    public function run(): void
    {
        User::all()->each(static function (User $user) {
            $user->products()->saveMany(UserProduct::factory(12)->make([
                'created_at' => now()->subMonths(2),
            ]));
        });
    }
}
