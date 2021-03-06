<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * @throws Exception
     */
    public function run(): void
    {
        $companies = Company::all();

        User::factory(1)->admin()->create([
            'email' => 'admin@getcrm.ru',
            'firm' => 'GETCRM',
        ]);

        User::factory(1)->customer()->create([
            'email' => 'user@getcrm.ru',
        ]);

        User::factory(1)->admin()->create([
            'email' => 'master@getcrm.ru',
            'firm' => 'GETCRM',
        ]);

        for ($i = 0; $i < 5; $i++) {
            User::factory()->customer()->create([
                'company_id' => random_int(0, 1) ? $companies->random()->id : null,
            ]);
        }
    }
}
