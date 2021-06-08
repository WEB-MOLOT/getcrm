@extends('layouts.site')

@section('title')
    История XXX
@endsection

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
                    Внедрение системы кросс-канальных коммуникаций в авиакомпанию
                    «Уральские авиалинии»
                </h1>
                <div class="info">
                    <a href="#" class="back-link">
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
                        <div><img src="img/airlines2.png"/></div>
                        <div>
                            <p>Основана в 1943 году</p>
                            <p>Более 10 000 000 пассажиров в год</p>
                            <p>Более 200 направлений</p>
                            <p>48 авиалайнеров</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="list">
                            <p>Проблематика и вызовы</p>
                            <ul>
                                <li>
                                    Отсутствие последовательного подхода при взаимодействии с
                                    клиентами.
                                </li>
                                <li>
                                    Необходимость обеспечения релевантной коммуникации для
                                    каждого клиента или клиентского сегмента.
                                </li>
                                <li>
                                    Потребность в отправке рассылок по различным цифровым
                                    каналам в рамках одной системы.
                                </li>
                                <li>Внедрение триггерных коммуникаций.</li>
                                <li>Возможность тестирования контента рассылок.</li>
                                <li>Персонализация контента рассылок.</li>
                            </ul>
                        </div>
                        <div class="list">
                            <p>Решение</p>
                            <ul class="other">
                                <li>
                                    Интеграция системы кросс-канальной коммуникации Oracle
                                    Responsys с системой Oracle Siebel CRM и системами для
                                    бронирования билетов.
                                </li>
                                <li>
                                    Проведение глубокой сегментации клиентов (согласно их
                                    профилю, истории покупок, предпочтениям и LTV) для
                                    формирования стратегии коммуникаций в разрезе сегментов и
                                    отдельных клиентов.
                                </li>
                                <li>
                                    Реализация персонализированных маркетинговых и триггерных
                                    рассылок по событию и брошенной корзине по SMS, email и
                                    Push.
                                </li>
                                <li>
                                    Настройка динамического контента персонализированных
                                    рассылок на основе уровня лояльности клиента, его
                                    местоположения, предпочитаемых услугах и направлениях.
                                </li>
                                <li>
                                    Применение BPI, где маркетологи и дизайнеры агентства
                                    GETCRM провели анализ контента цифровых каналов,
                                    сформировали гипотезы для повышения конверсии, а также
                                    оказали помощь в создании дизайна шаблонов рассылок для
                                    эффективной коммуникации с клиентами.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h2>Результаты</h2>
                    <div class="flex before-after">
                        <div class="item">
                            <p>До</p>
                            <img src="img/before.png"/>
                        </div>
                        <div class="item">
                            <p>После</p>
                            <img src="img/before.png"/>
                        </div>
                        <div class="item">
                            <div class="block">
                                Увеличен средний оборот с покупателя
                                <div class="progress"><span>7%</span></div>
                            </div>
                            <div class="block">
                                Персонализированные рассылки сделали контент более
                                привлекательным, увеличился процент открытия писем и выросла
                                конверсия.
                            </div>
                            <div class="block">
                                Внедрение адресных персонализированных рассылок и триггерных
                                компаний по работе с брошенной корзиной повысили конверсию
                                <div class="progress"><span>16%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-text">
                        Пример шаблона персонализированной рассылки с динамическим
                        контентом с напоминанием о сгорающих бонусах для мотивации
                        клиента к покупке.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
