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
    @include('_partials.modals')
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
@endpush

@push('js_bottom')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script>
        $(function () {
            $("#phone").mask("{{ config('app.phone_mask') }}");
        });
    </script>
    <script>
        $('.js-booklet').click(function (event) {
            let url = $(this).data('url');
            location.href = url;
        });
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
                                                    {{ $item->id }} ?????????????????? ??????????????????
                                                </div>
                                                <div class="price">
                                                    ???? 75 000$ ???? 200 000$
                                                </div>
                                            </div>
                                            <div class="info-block">
                                                <div class="name">
                                                    ???????? ??????????????????
                                                </div>
                                                <div class="price">
                                                    6 ??????.
                                                </div>
                                            </div>
                                            <div class="info-block">
                                                <div class="name">
                                                    ???????? ??????????????????????
                                                </div>
                                                <div class="price">
                                                    6 ??????.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="info-block">
                                                <div class="name">
                                                    ?????????????????? ???????????????? ???? BPO ????????????
                                                </div>
                                                <div class="price">
                                                    66 500$/??????
                                                    <span
                                                    >???? 10 ???????????????????? (?????? ??????????????????) ???????????? ??
                              ?????????????????????? ????????????</span
                                                    >
                                                </div>
                                            </div>
                                            <div class="info-block">
                                                <div class="name">
                                                    ?????? ???? 5 ??????
                                                </div>
                                                <div class="price">
                                                    656 ??????.$ <br/>
                                                    <span
                                                    >?????????????? - ??????. 500 000 ??./?????? <br/>??????????????????????
                              ?????????????????? ??? 15% ???? ??????????????????</span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons flex">
                                        <button class="js-booklet" data-url="{{ $solution->getBookletUrl() }}">??????????????
                                            ????????????
                                        </button>
                                        <button data-video="video{{ $solution->id }}" class="js-video">???????????????? ????????
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
                        ?????????? ????????????????
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
                    @include('_partials.products.reviews', [
    'reviews' => $reviews,
    'seo' => $seo,
    'reviewsAvgScore' => $reviewsAvgScore,
    'reviewsDevelopmentAvgScore' => $reviewsDevelopmentAvgScore,
    'reviewsUsabilityAvgScore' => $reviewsUsabilityAvgScore,
    'reviewsTeamAvgScore' => $reviewsTeamAvgScore,
    'reviewsBudgetAvgScore' => $reviewsBudgetAvgScore,
    'reviewsDeadlinesAvgScore' => $reviewsDeadlinesAvgScore,
])
                    <div class="faq">
                        <div class="block-name">FAQ <span class="arrow"></span></div>
                        <div class="content">
                            <div class="list">
                                @foreach($faqItems as $item)
                                    <div class="item">
                                        <div class="name">
                                            ???????????? ???{{ $loop->iteration }}. {{ $item->question }}
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
                    ?????????????? ???? ??????????????????
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
