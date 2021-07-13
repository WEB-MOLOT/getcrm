<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        /** @var User $user */
        $user = $request->user();

        $data = [
            'hasProductMark' => $user->products()->active()->mark()->exists(),
        ];

        return view('cabinet.index', $data);
    }
}
