<?php

namespace Database\Seeders\Dictionaries;

use App\Models\Dictionaries\PeriodDiscount;
use Illuminate\Database\Seeder;

class PeriodDiscountSeeder extends Seeder
{
    public function run(): void
    {
        PeriodDiscount::factory(4)->create();
    }
}
