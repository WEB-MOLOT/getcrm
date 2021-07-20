<?php
/**
 * @var \App\Models\Service $service
 * @var \App\Models\SeoData $seo
 * @var \App\Models\FaqItem[]|\Illuminate\Database\Eloquent\Collection $faqItems
 * @var \App\Models\Review[]|\Illuminate\Database\Eloquent\Collection $reviews
 * @var float $reviewsAvgScore
 * @var float $reviewsDevelopmentAvgScore
 * @var float $reviewsUsabilityAvgScore
 * @var float $reviewsTeamAvgScore
 * @var float $reviewsBudgetAvgScore
 * @var float $reviewsDeadlinesAvgScore
 */
?>
@extends('layouts.site')

@section('title', $service->getSeoTitle())
@section('keywords', $service->getSeoKeywords())
@section('description', $service->getSeoDescription())

@section('footer')
    @include('_partials.forms.reviews')
    @include('_partials.modals.subscription')
@endsection

@push('js_bottom')
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script>
        $(function () {
            $("#phone").mask("+7(999) 999-9999");
        });
    </script>
@endpush

@section('before_content')
    <div class="first_bk inner">
        @include('_partials.header')
    </div>
@endsection

@section('after_content')
    @include('_partials.creating-project')
    @include('_partials.footer')
@endsection

@section('content')
    <div class="mobile-app-page">
        <div class="container">
            <div class="content">
                <h1>{{ $service->title }}</h1>
                <div class="top-text">
              <span
              >{{ $service->subtitle }}</span
              >
                    {{ $service->description }}
                </div>
                <div class="main-image">
                    <img src="{{ $service->getImageUrl() }}"/>
                </div>
                <div class="middle-buttons">
                    <button data-solution="{{ $service->solution_id }}">добавить в проект</button>
                    <button data-video="{{ $service->video }}">смотреть видео</button>
                </div>
                <div class="mob-tabs">
                    <div class="block-name">
                        Общее описание
                    </div>
                    @foreach($service->descriptions as $description)
                        <div class="item">
                            <div class="name">
                                <img src="{{ $description->getIconUrl() }}"/> {{ $description->title }} <span></span>
                            </div>
                            <div class="text">
                                <a href="#" class="add">Добавить в проект</a>
                                <div class="text__inner">
                                    {!! $description->description !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="tabs">
                    <ul class="tabNavigation">
                        @foreach($service->descriptions as $description)
                            <li>
                                <a href="#t{{ $description->id }}"><img src="{{ $description->getIconUrl() }}"/></a>
                            </li>
                        @endforeach
                    </ul>
                    @foreach($service->descriptions as $description)
                        <div id="t{{ $description->id }}">
                            <p class="bold">
                                {{ $description->title }}
                                <a href="#" class="add">Добавить в проект</a>
                            </p>
                            {!! $description->description !!}
                        </div>
                    @endforeach
                </div>
                <div>
                    <div class="reviews">
                        <div class="block-name flex">
                            <div>Что думают наши клиенты о предлагаемых решениях</div>
                            <div class="rating">
                                <span class="star"></span> {{ round($reviewsAvgScore, 1) }} <span class="arrow"></span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="rating">
                                <div class="r-item flex">
                                    <p>Качество разработки</p>
                                    <div class="result">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="half"></span>
                                        <span class="none"></span>
                                    </div>
                                </div>

                                <div class="r-item flex">
                                    <p>Юзабилити</p>
                                    <div class="result">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="half"></span>
                                        <span class="none"></span>
                                    </div>
                                </div>

                                <div class="r-item flex">
                                    <p>Квалификация команды</p>
                                    <div class="result">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="half"></span>
                                        <span class="none"></span>
                                    </div>
                                </div>

                                <div class="r-item flex">
                                    <p>Бюджет</p>
                                    <div class="result">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="half"></span>
                                        <span class="none"></span>
                                    </div>
                                </div>

                                <div class="r-item flex">
                                    <p>Сроки</p>
                                    <div class="result">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="half"></span>
                                        <span class="none"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="list">
                                @foreach($reviews as $review)
                                    <div class="item">
                                        <div class="flex">
                                            <div class="company">
                                                @if($review->customer->company_id)
                                                    <div>
                                                        <span><img
                                                                src="{{ $review->customer->company->getLogoUrl() }}"/></span>
                                                    </div>
                                                @endif
                                                <div>
                                                    {{ $review->customer->position }}
                                                    <strong>{{ $review->customer->name }}</strong>
                                                </div>
                                            </div>
                                            <div class="company-rating">
                                                <span>{{ round($review->score, 1) }}</span>
                                                оценки
                                            </div>
                                        </div>
                                        <div class="text">
                                            {{ $review->text }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a class="bottom-link">Оставить отзыв</a>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="block-name">FAQ <span class="arrow"></span></div>
                        <div class="content">
                            <div class="list">
                                @foreach($faqItems as $item)
                                    <div class="item">
                                        <div class="name">
                                            Вопрос №{{ $loop->iteration }}. {{ $item->question }}
                                        </div>
                                        <div class="text">
                                            {{ $item->answer }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="standarts">
                    <div class="block-name">
                        Наши стандарты
                    </div>
                    <div class="flex">
                        @foreach($service->standarts as $standart)
                            <div class="item">
                                <img src="{{ $standart->getIconUrl() }}"/>
                                <span>{{ $standart->title }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
