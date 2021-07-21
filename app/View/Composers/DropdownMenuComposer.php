<?php

namespace App\View\Composers;


use App\Models\Service;
use App\Models\Solution;
use Illuminate\View\View;

class DropdownMenuComposer
{
    public function compose(View $view): void
    {
        $serviceMenu = Service::query()->orderBy('order')->get();

        $solutionMenu = Solution::query()->with('solution.platforms')->orderBy('order')->get();

        $view->with('serviceMenu', $serviceMenu)
            ->with('solutionMenu', $solutionMenu);
    }
}
