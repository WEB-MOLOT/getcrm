<?php

namespace App\Http\Controllers\Site\News;

use App\Http\Controllers\Controller;
use App\Models\NewsItem;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Список новостей
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        $year = (int)$request->get('year', now()->format('Y'));

        /** @var NewsItem $news */
        $news = NewsItem::query()->published()->year($year)->paginate(10);

        $data = [
            'newsItems' => $news,
            'year' => $year,
        ];

        return view('site.news.index', $data);
    }
}
