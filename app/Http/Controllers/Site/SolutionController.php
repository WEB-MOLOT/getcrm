<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Solution;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Страница Решения
     *
     * @param Request $request
     * @param Solution $solution
     * @return Application|Factory|View
     */
    public function __invoke(Request $request, Solution $solution): View|Factory|Application
    {
        /** @var Review[]|Collection $reviews */
        $reviews = $solution->reviews()->with([
            'customer',
            'customer.company'
        ])->moderated()->latest('id')->get();

        $data = [
            'solution' => $solution->load('descriptions'),
            'faqItems' => $solution->faqItems,
            'reviews' => $reviews,
            'seo' => $solution->seo,
            'reviewsAvgScore' => $reviews->avg('score'),
            'reviewsDevelopmentAvgScore' => $reviews->avg('score_development'),
            'reviewsUsabilityAvgScore' => $reviews->avg('score_usability'),
            'reviewsTeamAvgScore' => $reviews->avg('score_team'),
            'reviewsBudgetAvgScore' => $reviews->avg('score_budget'),
            'reviewsDeadlinesAvgScore' => $reviews->avg('score_deadlines'),
        ];

        return view('site.solution', $data);
    }
}
