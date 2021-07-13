<?php

namespace App\View\Components\Cabinet;

use App\Models\NewsItem;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class News extends Component
{
    protected Collection $news;

    public function __construct()
    {
        $this->news = NewsItem::query()->limit(2)->latest('id')->get();
    }

    public function render(): string
    {
        return view('components.cabinet.news', [
            'news' => $this->news,
        ]);
    }
}
