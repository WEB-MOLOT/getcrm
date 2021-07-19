<?php
/**
 * @var \App\Models\Pages\PrivacyPage $page
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
    <div class="news-page">
        <div class="container">
            <h1>{{ $page->name() }}</h1>
        </div>
        <div class="news-post">
            <div class="post">
                {!! $page->content !!}
            </div>
        </div>
    </div>
@endsection
