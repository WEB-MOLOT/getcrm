@extends('layouts.site')

@section('title')
    О нас
@endsection

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
            <h1>О компании</h1>
        </div>
        <div class="top-image"></div>
        <div class="container">
            <div class="content">
                <div class="flex">
                    <div class="text">
                        <p>Добрый день, уважаемые друзья!</p>
                        <p>
                            Мне приятно, что вы проявляете интерес к истории нашей
                            компании. Мы образовались в 2007 и с первых дней внедряем
                            различные CRM-платформы. Сегодня в компании трудится более 50
                            человек, у нас за плечами более 30 успешно-реализованных
                            проектов в области улучшения Customer Experience, в основном с
                            помощью западных платформ - Oracle и Microsoft.
                        </p>
                        <p>
                            Тем не менее мы кроссплатформенные, а значит мы не навязываем
                            вам конкретную платформу, мы подберем то решение, которое
                            максимально отвечает уровню зрелости вашей компании и
                            соотношению инвестиций и потенциальных бизнес-эффектов от его
                            внедрения.
                        </p>
                        <p>
                            Ценность нашей компании – это бизнес-экспертиза в области
                            цифрового маркетинга, продаж и клиентского сервиса. Проекты
                            под нашим контролем всегда демонстрируют устойчивые
                            бизнес-результаты.
                        </p>
                        <p>
                            Мы стремительно растем, совокупная выручка за 2018 и 2019 года
                            превысила 650 млн.руб., часть этой прибыли инвестируется в
                            R&D. В 2020 мы начали разработку собственной платформы
                            интеллектуального маркетинга с AI и Машинным обучением -
                            ДиМарКЭ для малого бизнеса.
                        </p>
                        <p>
                            Мы нацелены развивать облачный бизнес, т.к. это помогает нашим
                            клиентам с минимальными инвестициями и за короткие сроки
                            получить бизнес-результат, не «проедая» огромные бюджеты и не
                            «подсаживаясь» на одну платформу на длительный срок.
                        </p>
                    </div>
                    <div class="image">
                        <img src="img/about.png"/>
                    </div>
                </div>
                <div class="blocks">
                    <div class="name">
                        Сегодня главные наши принципы в проектах:
                    </div>
                    <div class="flex">
                        <div class="item">
                            <div><img src="img/about1.svg"/></div>
                            <div>Обеспечить качество услуг и разработки</div>
                        </div>
                        <div class="item">
                            <div><img src="img/about2.svg"/></div>
                            <div>Инновации в каждом проекте</div>
                        </div>
                        <div class="item">
                            <div><img src="img/about3.svg"/></div>
                            <div>Уменьшить цикл внедрения</div>
                        </div>
                        <div class="item">
                            <div><img src="img/about4.svg"/></div>
                            <div>Делиться лучшими мировыми практиками</div>
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
