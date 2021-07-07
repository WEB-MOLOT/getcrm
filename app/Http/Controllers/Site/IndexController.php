<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\NewsItem;
use App\Models\Page;
use App\Models\SeoData;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        $page = Page::query()->where('slug', '=', 'index')->firstOrFail();

        /** @var SeoData $seo */
        $seo = $page->seoData()->first();

        /** @var NewsItem $news */
        $news = NewsItem::query()->latest('id')->limit(10)->get();

        $data = [
            'newsItems' => $news,
            'page' => $page,
            'seo' => $seo,
        ];

        return view('site.index', $data);
    }
}
