<?php

use App\Http\Controllers\Site;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', Site\IndexController::class)->name('site.index');

Route::get('/news', Site\News\IndexController::class)->name('site.news.index');
Route::get('/news/{newsItem}', Site\News\ItemController::class)->name('site.news.item');

Route::get('/histories', Site\History\IndexController::class)->name('site.histories.index');
Route::get('/histories/{historyItem}', Site\History\ItemController::class)->name('site.histories.item');

Route::get('/about', Site\AboutController::class)->name('site.about.index');
Route::get('/contacts', Site\ContactsController::class)->name('site.contacts.index');
Route::get('/customer', Site\CustomerController::class)->name('site.customer.index');
Route::get('/form', Site\FormController::class)->name('site.form.index');
Route::get('/job', Site\JobController::class)->name('site.job.index');
Route::get('/dimarke', Site\LandingController::class)->name('site.landing.index');
Route::get('/solutions', Site\SolutionController::class)->name('site.solutions.index');
Route::get('/services', Site\ServiceController::class)->name('site.services.index');
Route::get('/price', Site\PriceController::class)->name('site.price.index');
Route::get('/privacy', Site\PrivacyController::class)->name('site.privacy.index');
