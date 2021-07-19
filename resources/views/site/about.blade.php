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

                    </div>
                    <div class="image">
                        <img src="/img/about.png"/>
                    </div>
                </div>
                <div class="blocks">
                    <div class="name">
                        {{ $page->xxx }}
                    </div>
                    <div class="flex">
                        <div class="item">
                            <div><img src="/img/about1.svg"/></div>
                            <div>{{ $page->xx1 }}</div>
                        </div>
                        <div class="item">
                            <div><img src="/img/about2.svg"/></div>
                            <div>{{ $page->xx2 }}</div>
                        </div>
                        <div class="item">
                            <div><img src="/img/about3.svg"/></div>
                            <div>{{ $page->xx3 }}</div>
                        </div>
                        <div class="item">
                            <div><img src="/img/about4.svg"/></div>
                            <div>{{ $page->xx4 }}</div>
                        </div>
                    </div>
                </div>
                <p class="big">
                    <span>Что мы пытаемся изменить в мире ИТ</span> – мы видим свою
                    цель шире, чем просто настройка систем, бизнес устал от
                    ИТ-консультантов и ищет бизнес-ориентированного подхода, для
                    которого мы:
                </p>
                <ul>
                    <li>
                        Рассматриваем каждый проект как инвест-проект с бизнес-кейсом и
                        бизнес-целями. Мы не уходим из проекта пока заявленные
                        бизнес-результаты не достигнуты! (Бесплатно)
                    </li>
                    <li>
                        На регулярной основе делимся с вами лучшими практиками
                        использования бизнес-приложений и помогаем их имплементировать.
                        (Бесплатно)
                    </li>
                    <li>
                        В рамках каждого проекта строим «Customer Journey», находим
                        области для улучшений и на них концентрируем ваши ресурсы.
                        (Бесплатно)
                    </li>
                </ul>
                <blockquote>
                    Друзья, забегая вперед!<br/><br/>
                    Мы видим будущее за 1:1 маркетингом, а без машинного обучения и
                    использования AI технологий это невозможно, поэтому мы развиваем
                    эти практики, работаем с большими данными, строим предиктивные
                    паттерны клиента, оптимизируем маркетинговые активности и много
                    другое.
                    <span
                    >Приходите к нам и попробуйте по-новому открыть для себя мир
                удивительных технологий!</span
                    >
                </blockquote>
            </div>
        </div>
    </div>
@endsection
