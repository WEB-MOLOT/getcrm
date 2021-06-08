@extends('layouts.site')

@section('title')
    Работа у нас
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
    <div class="job-page">
        <div class="container">
            <h1>Вакансии</h1>
            <div class="item">
                <h2>Архитектор информационной системы</h2>
                <p>
                    Анализ бизнес-требований к платформе в целом и к отдельным ее
                    компонентам. Выбор и подготовка архитектурных
                    вариантов/альтернатив реализации платформы.
                </p>
                <p>
                    Общее представление об Enterprise Architecture Body of Knowledge.
                    Навык проектирования Enterprise Architecture, Solution
                    Architecture, Technical Architecture с использованием
                    представлений, узлов...
                    <a href="#">читать все</a>
                </p>
                <div class="info">
                    <div class="info-item">
                        <div><img src="img/job1.svg"/></div>
                        <div>Требуемый опыт работы: 3–6 лет</div>
                    </div>
                    <div class="info-item">
                        <div><img src="img/job2.svg"/></div>
                        <div>Полная занятость, полный день</div>
                    </div>
                    <div class="info-item">
                        <div><img src="img/job3.svg"/></div>
                        <div>до 250 000 руб.</div>
                    </div>
                </div>
                <div class="link">
                    <a href="#">Откликнуться на HH</a>
                </div>
            </div>
            <div class="item">
                <h2>Архитектор информационной системы</h2>
                <p>
                    Анализ бизнес-требований к платформе в целом и к отдельным ее
                    компонентам. Выбор и подготовка архитектурных
                    вариантов/альтернатив реализации платформы.
                </p>
                <p>
                    Общее представление об Enterprise Architecture Body of Knowledge.
                    Навык проектирования Enterprise Architecture, Solution
                    Architecture, Technical Architecture с использованием
                    представлений, узлов...
                    <a href="#">читать все</a>
                </p>
                <div class="info">
                    <div class="info-item">
                        <div><img src="img/job1.svg"/></div>
                        <div>Требуемый опыт работы: 3–6 лет</div>
                    </div>
                    <div class="info-item">
                        <div><img src="img/job2.svg"/></div>
                        <div>Полная занятость, полный день</div>
                    </div>
                    <div class="info-item">
                        <div><img src="img/job3.svg"/></div>
                        <div>до 250 000 руб.</div>
                    </div>
                </div>
                <div class="link">
                    <a href="#">Откликнуться на HH</a>
                </div>
            </div>
            <div class="item">
                <h2>Архитектор информационной системы</h2>
                <p>
                    Анализ бизнес-требований к платформе в целом и к отдельным ее
                    компонентам. Выбор и подготовка архитектурных
                    вариантов/альтернатив реализации платформы.
                </p>
                <p>
                    Общее представление об Enterprise Architecture Body of Knowledge.
                    Навык проектирования Enterprise Architecture, Solution
                    Architecture, Technical Architecture с использованием
                    представлений, узлов...
                    <a href="#">читать все</a>
                </p>
                <div class="info">
                    <div class="info-item">
                        <div><img src="img/job1.svg"/></div>
                        <div>Требуемый опыт работы: 3–6 лет</div>
                    </div>
                    <div class="info-item">
                        <div><img src="img/job2.svg"/></div>
                        <div>Полная занятость, полный день</div>
                    </div>
                    <div class="info-item">
                        <div><img src="img/job3.svg"/></div>
                        <div>до 250 000 руб.</div>
                    </div>
                </div>
                <div class="link">
                    <a href="#">Откликнуться на HH</a>
                </div>
            </div>
            <div class="bottom-link">
                <img src="img/hh.png"/> <a href="#">Профиль нашей компании</a> на
                hh.ru
            </div>
        </div>
    </div>
@endsection
