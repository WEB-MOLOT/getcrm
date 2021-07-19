<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Pages\CustomExperiencePage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Страница Что такое Customer Experience (CX)
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        $page = CustomExperiencePage::firstOrFail();

        $data = [
            'page' => $page,
            'seo' => $page->seo,
        ];

        return view('site.customer', $data);
    }
}
