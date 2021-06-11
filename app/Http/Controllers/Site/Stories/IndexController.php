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
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        $data = [
            'stories' => SuccessStory::query()->with('badges', 'results')->paginate(4),
        ];

        return view('site.history.index', $data);
    }
}
