<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(1)->admin()->create([
            'email' => 'admin@getcrm.ru',
        ]);

        User::factory(1)->customer()->create([
            'email' => 'user@getcrm.ru',
        ]);
    }
}
