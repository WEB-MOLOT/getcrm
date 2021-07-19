<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Pages\PrivacyPage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Страница Политика конфиденциальности
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        $page = PrivacyPage::firstOrFail();

        $data = [
            'page' => $page,
            'seo' => $page->seo,
        ];

        return view('site.privacy', $data);
    }
}
