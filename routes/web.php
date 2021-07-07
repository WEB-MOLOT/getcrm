<?php

use App\Http\Controllers\Site;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', Site\IndexController::class)->name('site.index');

Route::get('/news', Site\News\IndexController::class)->name('site.news.index');
Route::get('/news/{newsItem}', Site\News\ItemController::class)->name('site.news.item');

Route::get('/success_stories', Site\Stories\IndexController::class)->name('site.stories.index');
Route::get('/success_stories/{successStory}', Site\Stories\ItemController::class)->name('site.stories.item');

Route::get('/about', Site\AboutController::class)->name('site.about.index');
Route::get('/contacts', Site\ContactsController::class)->name('site.contacts.index');
Route::get('/customer', Site\CustomerController::class)->name('site.customer.index');
Route::get('/form', Site\FormController::class)->name('site.form.index');
Route::get('/job', Site\JobController::class)->name('site.job.index');
Route::get('/dimarke', Site\LandingController::class)->name('site.landing.index');
Route::get('/solutions/{solution}', Site\SolutionController::class)->name('site.solutions.show');
Route::get('/services/{service}', Site\ServiceController::class)->name('site.services.show');
Route::get('/price', Site\PriceController::class)->name('site.price.index');
Route::get('/privacy', Site\PrivacyController::class)->name('site.privacy.index');

Route::get('/subscribe', Site\SubscribeController::class)->name('site.subscribe.store');
