<?php
/**
 * @var \App\Models\SuccessStory $story
 * @var \App\Models\StoryResult $result
 * @var \App\Models\SeoData $seo
 */
?>
@extends('layouts.site')

@section('title', $story->getSeoTitle())

@section('keywords', $story->getSeoKeywords())

@section('description', $story->getSeoDescription())

@section('footer')
    @include('_partials.modals.subscription')
@endsection

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
    <div class="history-item-page">
        <div class="container">
            <div class="content">
                <h1>
                    {{ $story->title }}
                </h1>
                <div class="info">
                    <a href="{{ route('site.stories.index') }}" class="back-link">
                        <svg
                            width="10"
                            height="16"
                            viewBox="0 0 10 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M8.49974 1.53711L1.77637 8.26073L8.49974 14.9841"
                                stroke="#040404"
                                stroke-width="2"
                            />
                        </svg>
                    </a>
                    <h2>Информация о компании</h2>
                    <div class="top-info">
                        <div><img src="{{ $story->getLogo2Url() }}" alt=""/></div>
                        <div>
                            @foreach($story->shorts as $item)
                                <p>{{ $item->line }}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex">
                        <div class="list">
                            <p>Проблематика и вызовы</p>
                            <ul>
                                @foreach($story->tasks as $item)
                                    <li>{{ $item->line }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="list">
                            <p>Решение</p>
                            <ul class="other">
                                @foreach($story->solutions as $item)
                                    <li>{{ $item->line }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <h2>Результаты</h2>
                    <div class="flex before-after">
                        <div class="item">
                            <p>До</p>
                            <img src="{{ $result->getBeforeUrl() }}" alt=""/>
                        </div>
                        <div class="item">
                            <p>После</p>
                            <img src="{{ $result->getAfterUrl() }}" alt=""/>
                        </div>
                        <div class="item">
                            @foreach($story->badges as $key => $badge)
                                <div class="block">
                                    {{ $badge->title }}
                                    @if($badge->value)
                                        <div class="progress"><span>{{ $badge->value }}</span></div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="bottom-text">
                        {{ $result->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
