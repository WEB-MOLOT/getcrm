<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(1)->create([
            'email' => 'admin@getcrm.ru',
        ]);

        User::factory(1)->create([
            'email' => 'user@getcrm.ru',
        ]);
    }
}
