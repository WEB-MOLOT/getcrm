<?php
/**
 * @var \App\Models\Solution $solution
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

@section('title', $solution->getSeoTitle())
@section('keywords', $solution->getSeoKeywords())
@section('description', $solution->getSeoDescription())

@section('footer')
    @include('_partials.forms.reviews')
    @include('_partials.modals.subscription')
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
@endpush

@push('js_bottom')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script>
        $(function () {
            $("#phone").mask("+7(999) 999-9999");
        });
    </script>
    <script>
        $('.js-video').click(function (event) {
            let videoId = $(this).data('video');
            event.preventDefault();
            this.blur();
            $('#' + videoId).modal()
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
                <h1>{{ $solution->title }}</h1>
                <div class="top-text">
              <span
              >{{ $solution->subtitle }}
              </span>
                    {{ $solution->description }}
                </div>
                <div class="tabs2">
                    <ul class="tabNavigation">
                        @foreach($solution->solution->platforms as $item)
                            <li><a href="#t{{ $item->id }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                    @foreach($solution->solution->platforms as $item)
                        <div id="t{{ $item->id }}" @if($loop->index !==0) style="display: none;" @endif>
                            <div class="flex">
                                <div class="image">
                                    <img src="{{ $solution->getImageUrl() }}"/>
                                </div>
                                <div class="info">
                                    <div class="flex">
                                        <div class="col">
                                            <div class="info-block">
                                                <div class="name">
                                                    {{ $item->id }} Стоимость внедрения
                                                </div>
                                                <div class="price">
                                                    от 75 000$ до 200 000$
                                                </div>
                                            </div>
                                            <div class="info-block">
                                                <div class="name">
                                                    Срок внедрения
                                                </div>
                                                <div class="price">
                                                6 мес.
                                            </div>
                                        </div>
                                        <div class="info-block">
                                            <div class="name">
                                                Срок окупаемости
                                            </div>
                                            <div class="price">
                                                6 мес.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="info-block">
                                            <div class="name">
                                                Стоимость лицензий по BPO модели
                                            </div>
                                            <div class="price">
                                                66 500$/год
                                                <span
                                                >на 10 операторов (без аналитики) Аренда в
                              партнерском облаке</span
                                                >
                                            </div>
                                        </div>
                                        <div class="info-block">
                                            <div class="name">
                                                ТСО на 5 лет
                                            </div>
                                            <div class="price">
                                                656 тыс.$ <br/>
                                                <span
                                                >хостинг - мин. 500 000 р./год <br/>партнерская
                              поддержка – 15% от внедрения</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="buttons flex">
                                        <button class="js-booklet" data-url="{{ $solution->booklet }}">Скачать буклет
                                        </button>
                                        <button data-video="video{{ $solution->id }}" class="js-video">Смотреть демо
                                        </button>
                                        <div id="video{{ $solution->id }}" class="modal">
                                            {!! $solution->video !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mob-tabs">
                    <div class="block-name">
                        Общее описание
                    </div>
                    @foreach($solution->descriptions as $description)
                        <div class="item">
                            <div class="name">
                                <img src="{{ $description->getIconUrl() }}"/> <span></span>
                            </div>

                            <div class="text">
                                <div class="text__inner">
                                    {!! $description->description !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="tabs">
                    <ul class="tabNavigation other">
                        @foreach($solution->descriptions as $description)
                            <li>
                                <a href="#t{{ $description->id }}"><img src="{{ $description->getIconUrl() }}"/></a>
                            </li>
                        @endforeach
                    </ul>
                    @foreach($solution->descriptions as $description)
                        <div id="t{{ $description->id }}">
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
            </div>
            <div class="effects">
                <div class="block-name">
                    Эффекты от внедрения
                </div>
                <div class="flex">
                    @foreach($solution->effects as $item)
                        <div
                            class="item i{{ $loop->iteration }} @if($item->fire == "-1") effect-down @elseif($item->fire == "1") effect-up @endif">
                            <span>{{ $item->line1 }}</span>
                            {{ $item->line2 }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
