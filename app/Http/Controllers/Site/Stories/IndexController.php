<?php

namespace App\Http\Controllers\Site\Stories;

use App\Http\Controllers\Controller;
use App\Models\SuccessStory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Список историй успеха
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        $data = [
            'stories' => SuccessStory::query()
                ->with('badges')
                ->latest('id')
                ->paginate(100),
        ];

        return view('site.history.index', $data);
    }
}
