<?php

namespace App\Http\Controllers\Site\Ajax;

use App\Http\Controllers\Controller;
use App\Mail\SaleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SaleController extends Controller
{
    public function __invoke(Request $request)
    {
        Mail::to(config('site.email.sale'))->send(new SaleMail($request->all()));
    }
}
