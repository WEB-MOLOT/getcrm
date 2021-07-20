<?php

namespace App\Http\Controllers;

use App\Models\Pages\PrivacyPage;

class TestController extends Controller
{
    public function magick()
    {
        $model = PrivacyPage::firstOrFail();

        dd($model->content);
    }
}
