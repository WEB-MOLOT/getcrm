<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Страница Услуга
     *
     * @param Request $request
     * @param Service $service
     * @return Application|Factory|View
     */
    public function __invoke(Request $request, Service $service): View|Factory|Application
    {
        /** @var Review[]|Collection $reviews */
        $reviews = $service->reviews()->with([
            'customer',
            'customer.company'
        ])->moderated()->latest('id')->get();

        $data = [
            'service' => $service->load('descriptions', 'standarts'),
            'seo' => $service->seo,
            'faqItems' => $service->faqItems,
            'reviews' => $reviews,
            'reviewsAvgScore' => $reviews->avg('score'),
            'reviewsDevelopmentAvgScore' => $reviews->avg('score_development'),
            'reviewsUsabilityAvgScore' => $reviews->avg('score_usability'),
            'reviewsTeamAvgScore' => $reviews->avg('score_team'),
            'reviewsBudgetAvgScore' => $reviews->avg('score_budget'),
            'reviewsDeadlinesAvgScore' => $reviews->avg('score_deadlines'),
        ];

        return view('site.service', $data);
    }
}
