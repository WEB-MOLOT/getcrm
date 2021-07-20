<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Dictionaries\Solution;
use App\Models\FaqItem;
use App\Models\Review;
use App\Models\SeoData;
use App\Models\Service;
use App\Models\ServiceDescription;
use App\Models\ServiceStandart;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $solutions = Solution::all();

        $customers = Customer::all();

        for ($i = 1; $i <= 5; $i++) {
            Service::factory()
                ->has(SeoData::factory(), 'seo')
                ->has(ServiceDescription::factory()->count(4), 'descriptions')
                ->has(ServiceStandart::factory()->count(6), 'standarts')
                ->has(FaqItem::factory()->count(4), 'faqItems')
                ->has(Review::factory()->count(10)->state(new Sequence(
                    fn($sequence) => ['user_id' => $customers->random()->id],
                )), 'reviews')
                ->create([
                    'solution_id' => $solutions->random()->id,
                ]);
        }
    }
}
