<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Главная страница ЛК
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        /** @var User $user */
        $user = $request->user();

        $data = [
            'hasProductMark' => $user->products()->active()->mark()->exists(),
        ];

        return view('cabinet.index', $data);
    }
}
