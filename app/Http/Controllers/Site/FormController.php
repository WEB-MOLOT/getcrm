<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\SeoData;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        $page = Page::query()->where('slug', '=', 'form')->firstOrFail();

        /** @var SeoData $seo */
        $seo = $page->seoData()->first();

        $data = [
            'page' => $page,
            'seo' => $seo,
        ];

        return view('site.form', $data);
    }
}
