<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\NewsItem;
use App\Models\Pages\HomePage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Главная страница
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        $page = HomePage::firstOrFail();

        /** @var NewsItem $news */
        $news = NewsItem::query()->latest('id')->limit(10)->get();

        $data = [
            'newsItems' => $news,
            'page' => $page,
            'seo' => $page->seo,
        ];

        return view('site.index', $data);
    }
}
