<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\SeoData;
use App\Models\Solution;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @param Solution $solution
     * @return Application|Factory|View
     */
    public function __invoke(Request $request, Solution $solution): View|Factory|Application
    {
        $page = Page::query()->where('slug', '=', 'solution')->firstOrFail();

        /** @var SeoData $seo */
        $seo = $page->seo()->first();

        $data = [
            'solution' => $solution,
            'page' => $page,
            'seo' => $seo,
        ];

        return view('site.solution', $data);
    }
}
