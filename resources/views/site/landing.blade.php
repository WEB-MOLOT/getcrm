<?php
/**
 * @var \App\Models\Pages\LandingPage $page
 * @var \App\Models\SeoData $seo
 */
?>
@extends('layouts.site')

@section('title', $page->getSeoTitle())
@section('keywords', $page->getSeoKeywords())
@section('description', $page->getSeoDescription())

@section('footer')
    @include('_partials.modals.callback')
    @include('_partials.modals')
    @include('_partials.modals.successful_license')
@endsection

@push('js_bottom')
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <script>
        $(document).ready(function () {
            $("#thead").sticky({topSpacing: 0});
        });
    </script>
    <script>
        $(function () {
            $("#phone").mask("{{ config('app.phone_mask') }}");
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
    <div class="landing">
        <section class="landing-main">
            <img src="/img/landing/main-bg.jpg" alt="" class="landing-main__bg"/>
            <div class="container">
                <div class="landing-main__inner">
                    <div class="landing-main__col landing-main__col--text">
                        <h1 class="landing-main__title">
                  <span class="landing-main__title-top"
                  >{{ $page->name() }}</span
                  >
                            <span class="landing-main__title-bottom"
                            >{{ $page->block1_subtitle }}</span
                            >
                        </h1>
                        <p class="landing-main__subtitle">
                            {!! $page->block1_content !!}
                        </p>
                        <button class="landing-main__callback btn btn_orange">
                            {{ $page->block1_btn }}
                        </button>
                    </div>
                    <div class="landing-main__col landing-main__col--video">
                        <div class="landing-main__video-outer">
                            <img
                                src="/img/landing/macbook.png"
                                alt=""
                                class="landing-main__video-laptop"
                            />
                            <div class="landing-main__video-inner">
                                <button
                                    type="button"
                                    class="landing-main__video-play"
                                ></button>
                                <video
                                    src="{{ $page->getBlock1VideoUrl() }}"
                                    class="landing-main__video"
                                    poster="img/landing/macbook-poster.jpg"
                                ></video>
                            </div>
                        </div>
                        <span class="landing-main__video-title"
                        >{{ $page->block1_help }}</span
                        >
                    </div>
                </div>
            </div>
        </section>
        <section class="landing-function">
            <div class="container">
                <div class="landing-function__inner">
                    <h2 class="landing-function__title">Функционал платформы</h2>
                    <div class="landing-function__list">
                        <div class="landing-function__item">
                            <img
                                src="/img/landing/func-1.jpg"
                                alt=""
                                class="landing-function__item-bg"
                            />

                            <div class="landing-function__item-body">
                                <h3 class="landing-function__item-title">Продажи</h3>
                                <ul class="landing-function__item-list">
                                    <li class="landing-function__item-item">
                                        Настройка правил ценобразрвания
                                    </li>
                                    <li class="landing-function__item-item">Контроль KPI</li>
                                    <li class="landing-function__item-item">
                                        Аналитика продаж
                                    </li>
                                    <li class="landing-function__item-item">
                                        Настройка правил утилизации ресурсов
                                    </li>
                                </ul>
                                <div class="landing-function__item-img-wrap">
                                    <img
                                        src="/img/landing/function-1.svg"
                                        alt=""
                                        class="landing-function__img"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="landing-function__item">
                            <img
                                src="/img/landing/func-2.jpg"
                                alt=""
                                class="landing-function__item-bg"
                            />

                            <div class="landing-function__item-body">
                                <h3 class="landing-function__item-title">Маркетинг</h3>
                                <ul class="landing-function__item-list">
                                    <li class="landing-function__item-item">
                                        Подключение контакт центра
                                    </li>
                                    <li class="landing-function__item-item">
                                        Динамические скрпты
                                    </li>
                                    <li class="landing-function__item-item">
                                        Индентификация клиентов
                                    </li>
                                    <li class="landing-function__item-item">
                                        Интеграция с чат ботами
                                    </li>
                                    <li class="landing-function__item-item">
                                        Обработка сервисных обращений
                                    </li>
                                    <li class="landing-function__item-item">
                                        Профиль клиента 360
                                    </li>
                                </ul>
                                <div class="landing-function__item-img-wrap">
                                    <img
                                        src="/img/landing/function-2.svg"
                                        alt=""
                                        class="landing-function__img"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="landing-function__item">
                            <img
                                src="/img/landing/func-3.jpg"
                                alt=""
                                class="landing-function__item-bg"
                            />
                            <div class="landing-function__item-body">
                                <h3 class="landing-function__item-title">Сервис</h3>
                                <ul class="landing-function__item-list">
                                    <li class="landing-function__item-item">
                                        Омниканальность (СМС, емейл, соц сети, сайт, баннеры)
                                    </li>
                                    <li class="landing-function__item-item">
                                        Создание многошаговых компаний
                                    </li>
                                    <li class="landing-function__item-item">AB/MVT</li>
                                    <li class="landing-function__item-item">
                                        Персонализированный контент
                                    </li>
                                    <li class="landing-function__item-item">
                                        Аналитика по кампаниям
                                    </li>
                                    <li class="landing-function__item-item">
                                        Сегментация клиентов
                                    </li>
                                </ul>
                                <div class="landing-function__item-img-wrap">
                                    <img
                                        src="/img/landing/function-3.svg"
                                        alt=""
                                        class="landing-function__img"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="landing-features">
            <div class="container">
                <div class="landing-features__inner">
                    <h2 class="landing-features__title">
                        {{ $page->block2_title }}
                    </h2>
                    <div class="landing-features__list">
                        <div class="landing-features__item">
                            <div class="landing-features__item-img-wrap">
                                <img
                                    src="/img/landing/features-1.svg"
                                    alt=""
                                    class="landing-features__item-img"
                                />
                            </div>
                            <p class="landing-features__item-text">
                                Автоматизированная продажа свободных слотов в расписании
                                позволяет эффективно утилизировать ваши ресурсы
                            </p>
                        </div>
                        <div class="landing-features__item">
                            <div class="landing-features__item-img-wrap">
                                <img
                                    src="/img/landing/features-2.svg"
                                    alt=""
                                    class="landing-features__item-img"
                                />
                            </div>
                            <p class="landing-features__item-text">
                                Стратегический / системный / событийный маркетинг позволит
                                снизить расходы на рекламу и повысить ваши продажи
                            </p>
                        </div>
                        <div class="landing-features__item">
                            <div class="landing-features__item-img-wrap">
                                <img
                                    src="/img/landing/features-3.svg"
                                    alt=""
                                    class="landing-features__item-img"
                                />
                            </div>
                            <p class="landing-features__item-text">
                                Персонализированные УТП и рекомендательные алгоритмы повысят
                                эффективность рассылок и увеличат приток клиентов
                            </p>
                        </div>
                        <div class="landing-features__item">
                            <div class="landing-features__item-img-wrap">
                                <img
                                    src="/img/landing/features-4.svg"
                                    alt=""
                                    class="landing-features__item-img"
                                />
                            </div>
                            <p class="landing-features__item-text">
                                Эффективная ценовая и скидочная политика, позволяющая
                                получить максимум экономического эффекта на существующей
                                клиентской базе
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="landing-solution">
            <div class="container">
                <div class="landing-solution__inner">
                    <h2 class="landing-solution__title">
                        Наш продукт подходит вам, если:
                    </h2>
                    <div class="landing-solution__wrap">
                        <div
                            class="landing-solution__col landing-solution__col--problem"
                        >
                            <h3 class="landing-solution__col-title">Проблема</h3>
                            <ol class="landing-solution__list">
                                <li class="landing-solution__item js-current" data-tab="1">
                      <span class="landing-solution__item-title "
                      >Простаивают ресурсы</span
                      >
                                    <div class="landing-solution__item-solution-wrap">
                                        <div class="landing-solution__item-img-wrap">
                                            <img
                                                src="/img/landing/solution-1.jpg"
                                                alt=""
                                                class="landing-solution__item-img"
                                            />
                                        </div>
                                        <p class="landing-solution__item-text">
                                            Механизм экстренной утилизацииМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизмМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизм экстренной утилизации
                                            экстренной утилизации
                                        </p>
                                    </div>
                                </li>
                                <li class="landing-solution__item" data-tab="2">
                      <span class="landing-solution__item-title"
                      >Отсутствие стратегии удержания клиентов</span
                      >
                                    <div class="landing-solution__item-solution-wrap">
                                        <div class="landing-solution__item-img-wrap">
                                            <img
                                                src="/img/landing/macbook.png"
                                                alt=""
                                                class="landing-solution__item-img"
                                            />
                                        </div>
                                        <p class="landing-solution__item-text">
                                            Механизм экстренной утилизацииМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизмМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизм экстренной утилизации
                                            экстренной утилизации
                                        </p>
                                    </div>
                                </li>
                                <li class="landing-solution__item" data-tab="3">
                      <span class="landing-solution__item-title"
                      >Не учитывается уместность предложения</span
                      >
                                    <div class="landing-solution__item-solution-wrap">
                                        <div class="landing-solution__item-img-wrap">
                                            <img
                                                src="/img/landing/solution-1.jpg"
                                                alt=""
                                                class="landing-solution__item-img"
                                            />
                                        </div>
                                        <p class="landing-solution__item-text">
                                            Механизм экстренной утилизацииМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизмМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизм экстренной утилизации
                                            экстренной утилизации
                                        </p>
                                    </div>
                                </li>
                                <li class="landing-solution__item" data-tab="4">
                      <span class="landing-solution__item-title"
                      >Не эффективные УТП</span
                      >
                                    <div class="landing-solution__item-solution-wrap">
                                        <div class="landing-solution__item-img-wrap">
                                            <img
                                                src="/img/landing/solution-1.jpg"
                                                alt=""
                                                class="landing-solution__item-img"
                                            />
                                        </div>
                                        <p class="landing-solution__item-text">
                                            Механизм экстренной утилизацииМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизмМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизм экстренной утилизации
                                            экстренной утилизации
                                        </p>
                                    </div>
                                </li>
                                <li class="landing-solution__item" data-tab="5">
                      <span class="landing-solution__item-title"
                      >Низкая открываемость рассылок</span
                      >
                                    <div class="landing-solution__item-solution-wrap">
                                        <div class="landing-solution__item-img-wrap">
                                            <img
                                                src="/img/landing/solution-1.jpg"
                                                alt=""
                                                class="landing-solution__item-img"
                                            />
                                        </div>
                                        <p class="landing-solution__item-text">
                                            Механизм экстренной утилизацииМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизмМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизм экстренной утилизации
                                            экстренной утилизации
                                        </p>
                                    </div>
                                </li>
                                <li class="landing-solution__item" data-tab="6">
                      <span class="landing-solution__item-title"
                      >Отсутствует скидочная политика</span
                      >
                                    <div class="landing-solution__item-solution-wrap">
                                        <div class="landing-solution__item-img-wrap">
                                            <img
                                                src="/img/landing/solution-1.jpg"
                                                alt=""
                                                class="landing-solution__item-img"
                                            />
                                        </div>
                                        <p class="landing-solution__item-text">
                                            Механизм экстренной утилизацииМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизмМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизм экстренной утилизации
                                            экстренной утилизации
                                        </p>
                                    </div>
                                </li>
                                <li class="landing-solution__item" data-tab="7">
                      <span class="landing-solution__item-title"
                      >Не полные данные о всех действиях клиента</span
                      >
                                    <div class="landing-solution__item-solution-wrap">
                                        <div class="landing-solution__item-img-wrap">
                                            <img
                                                src="/img/landing/solution-1.jpg"
                                                alt=""
                                                class="landing-solution__item-img"
                                            />
                                        </div>
                                        <p class="landing-solution__item-text">
                                            Механизм экстренной утилизацииМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизмМеханизм экстренной
                                            утилизацииМеханизм экстренной утилизацииМеханизм
                                            экстренной утилизацииМеханизм экстренной утилизации
                                            экстренной утилизации
                                        </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div
                            class="landing-solution__col landing-solution__col--solution"
                        >
                            <h3 class="landing-solution__col-title">Решение</h3>
                            <div class="landing-solution__tab-wrap">
                                <div class="landing-solution__tab js-open" data-tab="1">
                                    <div class="landing-solution__tab-img-wrap">
                                        <img
                                            src="/img/landing/solution-1.jpg"
                                            alt=""
                                            class="landing-solution__tab-img"
                                        />
                                    </div>
                                    <p class="landing-solution__tab-text">
                                        Механизм экстренной утилизацииМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизмМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизм экстренной утилизации
                                        экстренной утилизации
                                    </p>
                                </div>
                                <div class="landing-solution__tab" data-tab="2">
                                    <div class="landing-solution__tab-img-wrap">
                                        <img
                                            src="/img/landing/macbook.png"
                                            alt=""
                                            class="landing-solution__tab-img"
                                        />
                                    </div>
                                    <p class="landing-solution__tab-text">
                                        22222 Механизм экстренной утилизацииМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизмМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизм экстренной утилизации
                                        экстренной утилизации
                                    </p>
                                </div>
                                <div class="landing-solution__tab" data-tab="3">
                                    <div class="landing-solution__tab-img-wrap">
                                        <img
                                            src="/img/landing/macbook-poster.jpg"
                                            alt=""
                                            class="landing-solution__tab-img"
                                        />
                                    </div>
                                    <p class="landing-solution__tab-text">
                                        33333 Механизм экстренной утилизацииМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизмМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизм экстренной утилизации
                                        экстренной утилизации
                                    </p>
                                </div>
                                <div class="landing-solution__tab" data-tab="4">
                                    <div class="landing-solution__tab-img-wrap">
                                        <img
                                            src="/img/landing/macbook.png"
                                            alt=""
                                            class="landing-solution__tab-img"
                                        />
                                    </div>
                                    <p class="landing-solution__tab-text">
                                        4444 Механизм экстренной утилизацииМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизмМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизм экстренной утилизации
                                        экстренной утилизации
                                    </p>
                                </div>
                                <div class="landing-solution__tab" data-tab="5">
                                    <div class="landing-solution__tab-img-wrap">
                                        <img
                                            src="/img/landing/macbook-poster.jpg"
                                            alt=""
                                            class="landing-solution__tab-img"
                                        />
                                    </div>
                                    <p class="landing-solution__tab-text">
                                        5555 Механизм экстренной утилизацииМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизмМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизм экстренной утилизации
                                        экстренной утилизации
                                    </p>
                                </div>
                                <div class="landing-solution__tab" data-tab="6">
                                    <div class="landing-solution__tab-img-wrap">
                                        <img
                                            src="/img/landing/solution-1.jpg"
                                            alt=""
                                            class="landing-solution__tab-img"
                                        />
                                    </div>
                                    <p class="landing-solution__tab-text">
                                        6666 Механизм экстренной утилизацииМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизмМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизм экстренной утилизации
                                        экстренной утилизации
                                    </p>
                                </div>
                                <div class="landing-solution__tab" data-tab="7">
                                    <div class="landing-solution__tab-img-wrap">
                                        <img
                                            src="/img/landing/solution-1.jpg"
                                            alt=""
                                            class="landing-solution__tab-img"
                                        />
                                    </div>
                                    <p class="landing-solution__tab-text">
                                        7777 Механизм экстренной утилизацииМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизмМеханизм экстренной
                                        утилизацииМеханизм экстренной утилизацииМеханизм
                                        экстренной утилизацииМеханизм экстренной утилизации
                                        экстренной утилизации
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="landing-get">
            <div class="container">
                <div class="landing-get__inner">
                    <h2 class="landing-get__title">{{ $page->block3_title }}</h2>
                    <div class="landing-get__wrap">
                        <div class="landing-get__wrap-inner">
                            <div class="landing-get__top">
                                <img
                                    src="/img/landing/license-top.svg"
                                    alt=""
                                    class="landing-get__top-img"
                                />
                            </div>
                            <div class="landing-get__middle">
                                <div class="landing-get__col landing-get__col--text">
                                    <h2 class="landing-get__title landing-get__title--mobile">
                                        Получите пожизненную лицензию
                                    </h2>

                                    <h3>Дорогие друзья!</h3>
                                    <p>
                                        <em
                                        >Мы создаём технологии, опираясь на опыт лучших
                                            зарубежных вендоров и делаем их доступными для малого
                                            и среднего бизнеса. Платформа ДиМарКЭ уже доказала
                                            свою эффективность на примере российских компаний.</em
                                        >
                                    </p>
                                    <p>
                                        <em>
                                            На данный момент платформа проходит финальные тестовые
                                            испытания, но вы можете поднять прибыль своей компании
                                            уже сейчас и стать обладателем лицензии на систему
                                            совершенно бесплатно.</em
                                        >
                                    </p>
                                    <p>
                                        <strong
                                        >Заполните опрос, и наш менеджер свяжется с Вами и
                                            расскажет об условиях получения тестовой лицензии.
                                        </strong>
                                    </p>
                                </div>
                                <div class="landing-get__col landing-get__col--form">
                                    <form action="#" class="landing-get__form">
                                        <label class="landing-get__label">
                                            <input
                                                type="text"
                                                name="name"
                                                class="landing-get__input"
                                                required
                                            />
                                            <span class="landing-get__placeholder">
                            Ваше имя
                            <span class="landing-get__asterisk">*</span>
                          </span>
                                        </label>
                                        <label class="landing-get__label">
                                            <input
                                                type="text"
                                                name="company"
                                                class="landing-get__input"
                                                required
                                            />
                                            <span class="landing-get__placeholder">
                            Название компании
                            <span class="landing-get__asterisk">*</span>
                          </span>
                                        </label>
                                        <label class="landing-get__label">
                                            <input
                                                type="text"
                                                name="site"
                                                class="landing-get__input"
                                                required
                                            />
                                            <span class="landing-get__placeholder">
                            Ваш текуший сайт
                            <span class="landing-get__asterisk">*</span>
                          </span>
                                        </label>
                                        <label class="landing-get__label">
                                            <input
                                                type="text"
                                                name="sector"
                                                class="landing-get__input"
                                                required
                                            />
                                            <span class="landing-get__placeholder">
                            Отрасль бизнеса
                            <span class="landing-get__asterisk">*</span>
                          </span>
                                        </label>
                                        <label class="landing-get__label">
                                            <input
                                                type="text"
                                                name="tel"
                                                class="landing-get__input"
                                                required
                                            />
                                            <span class="landing-get__placeholder">
                            +7 (___) ___-__-__
                            <span class="landing-get__asterisk">*</span>
                          </span>
                                        </label>
                                        <label class="landing-get__checkbox-label">
                                            <input
                                                type="checkbox"
                                                name="policy"
                                                class="landing-get__checkbox"
                                                checked
                                                required
                                            />
                                            <span class="landing-get__checkbox-text"
                                            >Согласен(на) с условиями конфиденциальности</span
                                            >
                                        </label>
                                        <button
                                            type="submit"
                                            class="landing-get__submit btn btn_orange"
                                        >
                                            Получить лицензию
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="landing-order">
            <div class="container">
                <div class="landing-order__inner">
                    <h2 class="landing-order__title">
                        При заказе лицензии вы получаете:
                    </h2>
                    <div class="landing-order__list">
                        <div class="landing-order__item">
                            <div class="landing-order__item-img-wrap">
                                <img
                                    src="/img/landing/license-1.svg"
                                    alt=""
                                    class="landing-order__item-img"
                                />
                            </div>
                            <p class="landing-order__item-text">
                                Отсутствие финансовых рисков
                            </p>
                        </div>
                        <div class="landing-order__item">
                            <div class="landing-order__item-img-wrap">
                                <img
                                    src="/img/landing/license-2.svg"
                                    alt=""
                                    class="landing-order__item-img"
                                />
                            </div>
                            <p class="landing-order__item-text">
                                Лицензию на платформу и ее обновления
                            </p>
                        </div>
                        <div class="landing-order__item">
                            <div class="landing-order__item-img-wrap">
                                <img
                                    src="/img/landing/license-3.svg"
                                    alt=""
                                    class="landing-order__item-img"
                                />
                            </div>
                            <p class="landing-order__item-text">
                                Консультации от наших экспертов
                            </p>
                        </div>
                        <div class="landing-order__item">
                            <div class="landing-order__item-img-wrap">
                                <img
                                    src="/img/landing/license-4.svg"
                                    alt=""
                                    class="landing-order__item-img"
                                />
                            </div>
                            <p class="landing-order__item-text">
                                Настройку платформы для вашего бизнеса
                            </p>
                        </div>
                        <div class="landing-order__item">
                            <div class="landing-order__item-img-wrap">
                                <img
                                    src="/img/landing/license-5.svg"
                                    alt=""
                                    class="landing-order__item-img"
                                />
                            </div>
                            <p class="landing-order__item-text">
                                Приятный бонус от нашей компании
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="landing-mobile">
            <div class="container">
                <div class="landing-mobile__inner">
                    <div class="landing-mobile__col landing-mobile__col--img">
                        <div class="landing-mobile__img-wrap">
                            <img
                                src="/img/landing/phone.png"
                                alt=""
                                class="landing-mobile__img"
                            />
                        </div>
                    </div>
                    <div class="landing-mobile__col landing-mobile__col--text">
                        <h2 class="landing-mobile__title">
                  <span class="landing-mobile__title-top"
                  >Ключевая особенность платформы:</span
                  >
                            <span class="landing-mobile__title-bottom"
                            >Ваш бизнес всегда под рукой!</span
                            >
                        </h2>
                        <h3 class="landing-mobile__subtitle">Мобильное Приложение</h3>
                        <div class="landing-mobile__text-wrap">
                            <div class="landing-mobile__img-wrap--mobile">
                                <img
                                    src="/img/landing/phone.png"
                                    alt=""
                                    class="landing-mobile__img"
                                />
                            </div>
                            <p class="landing-mobile__text">
                                Все основные возможности нашей платформы доступны в
                                мобильном приложении ДиМарКэ. Будьте в курсе ваших текущих
                                продаж, настраиваете правила ценообразования, просматриваете
                                аналитику по рекламным кампаниям, ставьте цели и получаете
                                рекомендации для своего бизнеса с экрана вашего телефона.
                            </p>
                        </div>

                        <div class="landing-mobile__bottom">
                            <a href="#" class="landing-mobile__link btn btn_orange"
                            >Начать!</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
