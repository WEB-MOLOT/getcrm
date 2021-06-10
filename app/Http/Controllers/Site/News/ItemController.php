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
     * Handle the incoming request.
     *
     * @param Request $request
     * @param NewsItem $newsItem
     * @return Application|Factory|View
     */
    public function __invoke(Request $request, NewsItem $newsItem): View|Factory|Application
    {
        $data = [
            'newsItem' => $newsItem,
            'prev' => NewsItem::query()
                ->where('id', '<', $newsItem->id)
                ->latest('id')
                ->limit(1)
                ->first(),
            'next' => NewsItem::query()
                ->where('id', '>', $newsItem->id)
                ->oldest('id')
                ->limit(1)
                ->first(),
        ];

        return view('site.news.item', $data);
    }
}
