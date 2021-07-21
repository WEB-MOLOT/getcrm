<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Dictionaries;
use App\Models\FaqItem;
use App\Models\Review;
use App\Models\SeoData;
use App\Models\Solution;
use App\Models\SolutionDescription;
use App\Models\SolutionEffect;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    public function run(): void
    {
        $solutions = Dictionaries\Solution::all();

        $customers = Customer::all();

        for ($i = 1; $i <= 5; $i++) {
            Solution::factory()
                ->has(SeoData::factory(), 'seo')
                ->has(SolutionDescription::factory()->count(4), 'descriptions')
                ->has(SolutionEffect::factory()->count(3), 'effects')
                ->has(FaqItem::factory()->count(4), 'faqItems')
                ->has(Review::factory()->count(10)->state(new Sequence(
                    fn($sequence) => ['user_id' => $customers->random()->id],
                )), 'reviews')
                ->create([
                    'solution_id' => $solutions->pop()->id,
                ]);
        }
    }
}
