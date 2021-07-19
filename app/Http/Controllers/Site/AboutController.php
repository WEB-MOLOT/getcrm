<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Pages\AboutPage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Страница о компании
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        $page = AboutPage::firstOrFail();

        $data = [
            'page' => $page,
            'seo' => $page->seo,
        ];

        return view('site.about', $data);
    }
}
