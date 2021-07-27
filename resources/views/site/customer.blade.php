<?php
/**
 * @var \App\Models\Pages\CustomExperiencePage $page
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
    <div class="customer-page">
        <div class="block">
            <div class="container">
                <div class="content">
                    <h1>{{ $page->name() }}</h1>
                    {!! $page->content !!}
                    <div class="slider">
                        <div class="item">
                            <div class="name">ПОТРЕБНОСТЬ</div>
                            <div class="icon">
                                <img src="/img/customer1.svg"/>
                            </div>
                            Вовлекайте
                        </div>
                        <div class="item">
                            <div class="name">ПОИСК</div>
                            <div class="icon">
                                <img src="/img/customer2.svg"/>
                            </div>
                            Узнавайте
                        </div>
                        <div class="item">
                            <div class="name">ВЫБОР</div>
                            <div class="icon">
                                <img src="/img/customer3.svg"/>
                            </div>
                            Предлагайте нужное
                        </div>
                        <div class="item">
                            <div class="name">ПОКУПКА</div>
                            <div class="icon">
                                <img src="/img/customer4.svg"/>
                            </div>
                            Удивляйте
                        </div>
                        <div class="item">
                            <div class="name">ПОЛУЧЕНИЕ</div>
                            <div class="icon">
                                <img src="/img/customer5.svg"/>
                            </div>
                            Будьте последовательны
                        </div>
                        <div class="item">
                            <div class="name">ИСПОЛЬЗОВАНИЕ</div>
                            <div class="icon">
                                <img src="/img/customer6.svg"/>
                            </div>
                            Упрощайте
                        </div>
                        <div class="item">
                            <div class="name">ОБСЛУЖИВАНИЕ</div>
                            <div class="icon">
                                <img src="/img/customer7.svg"/>
                            </div>
                            Заботьтесь
                        </div>
                        <div class="item">
                            <div class="name">РЕКОМЕНДАЦИИ</div>
                            <div class="icon">
                                <img src="/img/customer8.svg"/>
                            </div>
                            Награждайте
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block bg1">
            <div class="container">
                <div class="content">
                    <h2>{{ $page->block1_title }}</h2>
                    <div class="flex">
                        <div class="text">
                            {!! $page->block1_content !!}
                        </div>
                        <div class="image">
                            <img src="{{ $page->getBlock1ImageUrl() }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="content">
                    <h2>{{ $page->block2_title }}</h2>
                    <div class="flex">
                        <div class="image">
                            <img src="{{ $page->getBlock2ImageUrl() }}"/>
                        </div>
                        <div class="text">
                            {!! $page->block2_content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block bg2">
            <div class="container">
                <div class="content">
                    <h2>
                        {{ $page->block3_title }}
                    </h2>
                    <div class="flex">
                        <div class="image">
                            <img src="{{ $page->getBlock3ImageUrl() }}"/>
                        </div>
                        <div class="text">
                            {!! $page->block3_content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="content">
                    <h2>
                        {{ $page->block4_title }}
                    </h2>
                    <div class="flex">
                        <div class="image">
                            <img src="{{ $page->getBlock4LeftImageUrl() }}"/>
                        </div>
                        <div class="text">
                            {!! $page->block4_content_left !!}
                        </div>
                    </div>
                    <div class="flex">
                        <div class="text">
                            {!! $page->block4_content_right !!}
                        </div>
                        <div class="image">
                            <img src="{{ $page->getBlock4RightImageUrl() }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block bg1">
            <div class="container">
                <div class="content">
                    <h2>
                        {{ $page->block5_title }}
                    </h2>
                    {!! $page->block5_content !!}
                    <div class="block__img-wrap">
                        <img
                            src="{{ $page->getBlock5ImageUrl() }}"
                            alt=""
                            class="block__img"
                        />
                    </div>
                    {!! $page->block6_content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
