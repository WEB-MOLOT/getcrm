<?php

namespace App\Http\Controllers\Site\News;

use App\Http\Controllers\Controller;
use App\Models\NewsItem;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Отдельная новость
     *
     * @param Request $request
     * @param NewsItem $newsItem
     * @return Application|Factory|View
     */
    public function __invoke(Request $request, NewsItem $newsItem): View|Factory|Application
    {
        $data = [
            'newsItem' => $newsItem,
            'seo' => $newsItem->seo,
            'prev' => NewsItem::query()
                ->where('published_at', '<', $newsItem->published_at)
                ->latest('published_at')
                ->limit(1)
                ->first(),
            'next' => NewsItem::query()
                ->where('published_at', '>', $newsItem->published_at)
                ->oldest('published_at')
                ->limit(1)
                ->first(),
        ];

        return view('site.news.item', $data);
    }
}
