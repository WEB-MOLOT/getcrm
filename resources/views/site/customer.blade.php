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
                    {{ $page->content }}
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
                    <h2>{{ $page->title1 }}</h2>
                    <div class="flex">
                        <div class="text">
                            {{ $page->content1 }}
                        </div>
                        <div class="image">
                            <img src="/img/customer1.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="content">
                    <h2>{{ $page->title2 }}</h2>
                    <div class="flex">
                        <div class="image">
                            <img src="/img/customer2.png"/>
                        </div>
                        <div class="text">
                            {{ $page->content2 }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block bg2">
            <div class="container">
                <div class="content">
                    <h2>
                        {{ $page->title3 }}
                    </h2>
                    <div class="flex">
                        <div class="image">
                            <img src="/img/customer3.png"/>
                        </div>
                        <div class="text">
                            {{ $page->content3 }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="content">
                    <h2>
                        {{ $page->title4 }}
                    </h2>
                    <div class="flex">
                        <div class="image">
                            <img src="/img/customer4.png"/>
                        </div>
                        <div class="text">
                            {{ $page->content4 }}
                        </div>
                    </div>
                    <div class="flex">
                        <div class="text">
                            <p>
                                Кроме финансовых выгод, лидирующие бренды могут предвидеть
                                долгосрочные тренды в развитие технологий и их применимости
                                в построении запоминающегося клиентского опыта. Глобальные
                                маркетинговые издания и аналитические агентства утверждают,
                                что 1:1 коммуникации компании с клиентом в трехлетней
                                перспективе станут единственным способом удовлетворить все 9
                                ожиданий. Не факт, что цифра 9 останется неизменной, но факт
                                что обеспечить такие коммуникации с миллионами клиентов
                                сможет только искусственный интеллект (Artificial
                                Intelligence, AI), которому понадобятся все данные о ваших
                                клиентах.
                            </p>
                            <p>
                                Поэтому Компаниям, которые сегодня об этом не задумываются и
                                не собирают данные или отдают на аутсорсинг свои
                                коммуникации, теряя ценные сведения, но при этом имея в
                                распоряжении необходимые инвестиции, следует инвестировать в
                                запоминающийся клиентский опыт, чтобы не остаться за бортом.
                            </p>
                        </div>
                        <div class="image">
                            <img src="/img/customer5.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block bg1">
            <div class="container">
                <div class="content">
                    <h2>
                        Нанесение на карту клиентского опыта (Customer Journey Mapping)
                    </h2>
                    <ol class="block__order-list">
                        <li class="block__order-item">
                            Проанализировать клиентскую базу, выделить 5 основных
                            сегментов по RFM-признаку.
                        </li>
                        <li class="block__order-item">
                            Посмотреть что происходит с качеством базы, например: возможно
                            число клиентов остается одинаковым, но качество базы
                            ухудшается, вы теряете высокодоходных клиентов, соответственно
                            Вам необходимо в первую очередь построить запоминающийся
                            клиентский опыт для этого сегмента клиентов и повысить их
                            удержание, взяв под контроль риск оттока.
                        </li>
                        <li class="block__order-item">
                            Нанести на карту путешествие вашего клиента (Customer Journey
                            Mapping, CJM), где обнаружив «барьеры», как правило они
                            связаны с непродуманными до конца процессами и технологическим
                            отставанием, Вы определяете, что необходимо изменить на
                            фронт-лайне. Мы с удовольствием поможем Вам разобраться с
                            этим. Мероприятие длится 2 дня и вовлекает ведущих
                            специалистов всех подразделений фронт-лайна (маркетинг,
                            продажи, сервис….)
                        </li>
                        <li class="block__order-item">
                            В результате CJM мы подготовим предложения по модернизации
                            ваших технологий с использованием CX-решений от ведущих
                            вендоров и презентуем дорожную карту построенную на основе
                            «quick wins», которую в дальнейшем реализуем полностью сами
                            или частично с привлечением подрядчиков.
                        </li>
                        <li class="block__order-item">
                            Далее необходимо провести ревизию Маркетинговой стратегии
                            (заложить новые цели и принципы), если она есть или прописать
                            простые положения в отношении конкретных клиентских сегментов:
                            <ul class="block__unorder-list">
                                <li class="block__unorder-item">
                                    прописать контактную политику, с кем, по какому каналу и с
                                    какой частотой можно общаться;
                                </li>
                                <li class="block__unorder-item">
                                    прописать контентную политику, например придерживаться
                                    золотого правила 50/50, в каждой коммуникации должно
                                    содержаться в равных долях что-то полезное для клиента и
                                    ваши предложения;
                                </li>
                            </ul>
                        </li>
                        <li class="block__order-item">
                            Если необходимые изменения требуют инвестиций, Вам необходимо
                            построить бизнес-кейс, где Ваша задача - обосновать
                            необходимость инвестиций и доказать целевые выгоды. Защитить
                            бизнес-кейс у менеджмента и получить финансирование. Мы
                            поможем построить бизнес-кейс и сформулировать цели проекта
                            (KPI), которые продолжим отслеживать на протяжении 3-6 мес. до
                            достижения целевого тренда или полного достижения целевых KPI.
                        </li>
                        <li class="block__order-item">
                            Подготовить Технические требования и Техническое задание.
                            Внедрить необходимые технологии и имплементировать положения
                            Маркетинговой стратегии в бизнес-процессы и технологии
                        </li>
                    </ol>
                    <div class="block__img-wrap">
                        <img
                            src="/img/customer/experience.png"
                            alt=""
                            class="block__img"
                        />
                    </div>
                    <p class="block__info">
                        А пока начните знакомство с сайтом и решениями, выбрав острые
                        для Вас области клиентского обслуживания и посмотрев какие
                        решения мы предлагаем.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
