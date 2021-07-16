<?php

namespace Database\Seeders\Dictionaries;

use App\Models\Dictionaries\AmountDiscount;
use Illuminate\Database\Seeder;

class AmountDiscountSeeder extends Seeder
{
    public function run(): void
    {
        AmountDiscount::factory(10)->create();
    }
}
