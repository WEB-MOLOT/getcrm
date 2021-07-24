<?php
/**
 * @var \App\Models\Pages\AboutPage $page
 * @var \App\Models\SeoData $seo
 */
?>

@extends('layouts.site')

@section('title', $page->getSeoTitle())
@section('keywords', $page->getSeoKeywords())
@section('description', $page->getSeoDescription())

@section('footer')
    @include('_partials.modals')
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
    <div class="about-page">
        <div class="container">
            <h1>{{ $page->name() }}</h1>
        </div>
        <div class="top-image"></div>
        <div class="container">
            <div class="content">
                <div class="flex">
                    <div class="text">
                        {!! $page->content !!}
                    </div>
                    <div class="image">
                        <img src="{{ $page->getImageUrl() }}"/>
                    </div>
                </div>
                <div class="blocks">
                    <div class="name">
                        {!! $page->principles_title !!}
                    </div>
                    <div class="flex">
                        @foreach($page->principles_list as $item)
                            <div class="item">
                                <div><img src="{{ $item['icon'] }}"/></div>
                                <div>{{ $item['name'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {!! $page->content2 !!}
                {!! $page->content3 !!}
            </div>
        </div>
    </div>
@endsection
