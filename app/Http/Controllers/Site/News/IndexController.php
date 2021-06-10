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
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        /** @var NewsItem $news */
        $news = NewsItem::query()->latest('id')->paginate(10);

        $data = [
            'newsItems' => $news,
        ];

        return view('site.news.index', $data);
    }
}
