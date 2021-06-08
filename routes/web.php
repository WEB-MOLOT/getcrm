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

Route::get('/history', Site\History\IndexController::class)->name('site.history.index');
Route::get('/history/{historyItem}', Site\History\ItemController::class)->name('site.history.item');

Route::get('/about', Site\AboutController::class)->name('site.about.index');
Route::get('/contacts', Site\ContactsController::class)->name('site.contacts.index');
Route::get('/customer', Site\CustomerController::class)->name('site.customer.index');
Route::get('/form', Site\FormController::class)->name('site.form.index');
Route::get('/job', Site\JobController::class)->name('site.job.index');
Route::get('/landing', Site\LandingController::class)->name('site.landing.index');
Route::get('/oracle', Site\OracleController::class)->name('site.oracle.index');
Route::get('/price', Site\PriceController::class)->name('site.price.index');
Route::get('/privacy', Site\PrivacyController::class)->name('site.privacy.index');
