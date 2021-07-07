<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->pages as $page) {
            Page::factory()->create([
                'slug' => $page,
            ]);
        }
    }

    protected array $pages = [
        'about',
        'contacts',
        'customer',
        'form',
        'index',
        'job',
        'landing',
        'price',
        'privacy',
        'service',
        'solution',
    ];
}
