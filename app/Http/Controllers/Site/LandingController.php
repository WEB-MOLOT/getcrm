<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Pages\LandingPage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Страница лендинга
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        $page = LandingPage::firstOrFail();

        $data = [
            'page' => $page,
            'seo' => $page->seo,
        ];

        return view('site.landing', $data);
    }
}
