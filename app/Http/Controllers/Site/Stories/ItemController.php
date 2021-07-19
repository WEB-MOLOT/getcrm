<?php

namespace App\Http\Controllers\Site\Stories;

use App\Http\Controllers\Controller;
use App\Models\SuccessStory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * История успеха
     *
     * @param Request $request
     * @param SuccessStory $successStory
     * @return Application|Factory|View
     */
    public function __invoke(Request $request, SuccessStory $successStory): View|Factory|Application
    {
        $data = [
            'story' => $successStory->load('badges', 'shorts', 'tasks', 'solutions'),
            'seo' => $successStory->seo,
            'result' => $successStory->result,
        ];

        return view('site.history.item', $data);
    }
}
