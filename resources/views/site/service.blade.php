@extends('layouts.site')

@section('title')
    Услуга
@endsection

@section('footer')
    @include('_partials.forms.reviews')
    @include('_partials.modals.subscription')
@endsection

@push('js_bottom')
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script>
        $(function () {
            $("#phone").mask("+7(999) 999-9999");
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
    <div class="mobile-app-page">
        <div class="container">
            <div class="content">
                <h1>Мобильные приложения</h1>
                <div class="top-text">
              <span
              >Создание любых мобильных приложений и web-сервисов для удобства
                вашего клиента.</span
              >
                    Наша компания проектирует уникальный пользовательский опыт (User
                    Experience) и разрабатывает безопасные и отказоустойчивые
                    мобильные приложения для iOS и Android. Цифровой маркетинг в
                    мобильном приложении, как правило приводит к росту продаж на 3-5%.
                    Благодаря продуманной архитектуре наши решения легко
                    масштабируются и гарантируют 100% доступность сервиса в режиме
                    24х7 для всех пользователей мобильного приложения.
                </div>
                <div class="main-image">
                    <img src="img/mob-app.png"/>
                </div>
                <div class="middle-buttons">
                    <button>добавить в проект</button>
                    <button>смотреть видео</button>
                </div>
                <div class="mob-tabs">
                    <div class="block-name">
                        Общее описание
                    </div>
                    <div class="item">
                        <div class="name">
                            <img src="img/tab1.svg"/> Дизайн приложения <span></span>
                        </div>
                        <div class="text">
                            <a href="#" class="add">Добавить в проект</a>
                            <div class="text__inner">
                                <p>
                                    Проектирование дизайна мобильных приложений состоит из
                                    двух важных частей: создание запоминающегося
                                    пользовательского опыта (user experience) и дизайна
                                    экранных форм (user interface).
                                </p>
                                <p>
                                    Положительный пользовательский опыт создаётся на основании
                                    карты путешествия клиента (CJM), а, если её нет, то на
                                    исследовании решений конкурентов и анализе сценариев
                                    взаимодействия пользователя с мобильным приложением. В
                                    результате клиенту становится удобно пользоваться
                                    мобильным приложением для просмотра контента, покупки
                                    товаров и услуг. Для компании это рост конверсии от
                                    трафика в мобильном приложении.
                                </p>
                                <p>
                                    Дизайн экранных форм включает подготовку макетов
                                    интерфейса с учётом принятого в компании корпоративного
                                    стиля (brand book), отрисовку элементов дизайна и
                                    иконографики, подготовку фото и видео материалов,
                                    написание продающих текстов и баннеров.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <img src="img/tab2.svg"/> Высокопроизводительные web-сервисы
                            <span></span>
                        </div>
                        <div class="text">
                            <a href="#" class="add">Добавить в проект</a>
                            <div class="text__inner">
                                <p>
                                    Проектирование дизайна мобильных приложений состоит из
                                    двух важных частей: создание запоминающегося
                                    пользовательского опыта (user experience) и дизайна
                                    экранных форм (user interface).
                                </p>
                                <p>
                                    Положительный пользовательский опыт создаётся на основании
                                    карты путешествия клиента (CJM), а, если её нет, то на
                                    исследовании решений конкурентов и анализе сценариев
                                    взаимодействия пользователя с мобильным приложением. В
                                    результате клиенту становится удобно пользоваться
                                    мобильным приложением для просмотра контента, покупки
                                    товаров и услуг. Для компании это рост конверсии от
                                    трафика в мобильном приложении.
                                </p>
                                <p>
                                    Дизайн экранных форм включает подготовку макетов
                                    интерфейса с учётом принятого в компании корпоративного
                                    стиля (brand book), отрисовку элементов дизайна и
                                    иконографики, подготовку фото и видео материалов,
                                    написание продающих текстов и баннеров.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <img src="img/tab3.svg"/> Кроссплатформенные приложения
                            <span></span>
                        </div>
                        <div class="text">
                            <a href="#" class="add">Добавить в проект</a>
                            <div class="text__inner">
                                <p>
                                    Проектирование дизайна мобильных приложений состоит из
                                    двух важных частей: создание запоминающегося
                                    пользовательского опыта (user experience) и дизайна
                                    экранных форм (user interface).
                                </p>
                                <p>
                                    Положительный пользовательский опыт создаётся на основании
                                    карты путешествия клиента (CJM), а, если её нет, то на
                                    исследовании решений конкурентов и анализе сценариев
                                    взаимодействия пользователя с мобильным приложением. В
                                    результате клиенту становится удобно пользоваться
                                    мобильным приложением для просмотра контента, покупки
                                    товаров и услуг. Для компании это рост конверсии от
                                    трафика в мобильном приложении.
                                </p>
                                <p>
                                    Дизайн экранных форм включает подготовку макетов
                                    интерфейса с учётом принятого в компании корпоративного
                                    стиля (brand book), отрисовку элементов дизайна и
                                    иконографики, подготовку фото и видео материалов,
                                    написание продающих текстов и баннеров.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <img src="img/tab4.svg"/> Безопасность данных <span></span>
                        </div>
                        <div class="text">
                            <a href="#" class="add">Добавить в проект</a>
                            <div class="text__inner">
                                <p>
                                    Проектирование дизайна мобильных приложений состоит из
                                    двух важных частей: создание запоминающегося
                                    пользовательского опыта (user experience) и дизайна
                                    экранных форм (user interface).
                                </p>
                                <p>
                                    Положительный пользовательский опыт создаётся на основании
                                    карты путешествия клиента (CJM), а, если её нет, то на
                                    исследовании решений конкурентов и анализе сценариев
                                    взаимодействия пользователя с мобильным приложением. В
                                    результате клиенту становится удобно пользоваться
                                    мобильным приложением для просмотра контента, покупки
                                    товаров и услуг. Для компании это рост конверсии от
                                    трафика в мобильном приложении.
                                </p>
                                <p>
                                    Дизайн экранных форм включает подготовку макетов
                                    интерфейса с учётом принятого в компании корпоративного
                                    стиля (brand book), отрисовку элементов дизайна и
                                    иконографики, подготовку фото и видео материалов,
                                    написание продающих текстов и баннеров.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <img src="img/tab5.svg"/> Аудит и аналитика <span></span>
                        </div>
                        <div class="text">
                            <a href="#" class="add">Добавить в проект</a>
                            <div class="text__inner">
                                <p>
                                    Проектирование дизайна мобильных приложений состоит из
                                    двух важных частей: создание запоминающегося
                                    пользовательского опыта (user experience) и дизайна
                                    экранных форм (user interface).
                                </p>
                                <p>
                                    Положительный пользовательский опыт создаётся на основании
                                    карты путешествия клиента (CJM), а, если её нет, то на
                                    исследовании решений конкурентов и анализе сценариев
                                    взаимодействия пользователя с мобильным приложением. В
                                    результате клиенту становится удобно пользоваться
                                    мобильным приложением для просмотра контента, покупки
                                    товаров и услуг. Для компании это рост конверсии от
                                    трафика в мобильном приложении.
                                </p>
                                <p>
                                    Дизайн экранных форм включает подготовку макетов
                                    интерфейса с учётом принятого в компании корпоративного
                                    стиля (brand book), отрисовку элементов дизайна и
                                    иконографики, подготовку фото и видео материалов,
                                    написание продающих текстов и баннеров.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <img src="img/tab6.svg"/> Стоимость сервиса <span></span>
                        </div>
                        <div class="text">
                            <a href="#" class="add">Добавить в проект</a>
                            <div class="text__inner">
                                <p>
                                    Проектирование дизайна мобильных приложений состоит из
                                    двух важных частей: создание запоминающегося
                                    пользовательского опыта (user experience) и дизайна
                                    экранных форм (user interface).
                                </p>
                                <p>
                                    Положительный пользовательский опыт создаётся на основании
                                    карты путешествия клиента (CJM), а, если её нет, то на
                                    исследовании решений конкурентов и анализе сценариев
                                    взаимодействия пользователя с мобильным приложением. В
                                    результате клиенту становится удобно пользоваться
                                    мобильным приложением для просмотра контента, покупки
                                    товаров и услуг. Для компании это рост конверсии от
                                    трафика в мобильном приложении.
                                </p>
                                <p>
                                    Дизайн экранных форм включает подготовку макетов
                                    интерфейса с учётом принятого в компании корпоративного
                                    стиля (brand book), отрисовку элементов дизайна и
                                    иконографики, подготовку фото и видео материалов,
                                    написание продающих текстов и баннеров.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs">
                    <ul class="tabNavigation">
                        <li>
                            <a href="#t1"><img src="img/tab1.svg"/></a>
                        </li>
                        <li>
                            <a href="#t2"><img src="img/tab2.svg"/></a>
                        </li>
                        <li>
                            <a href="#t3"><img src="img/tab3.svg"/></a>
                        </li>
                        <li>
                            <a href="#t4"><img src="img/tab4.svg"/></a>
                        </li>
                        <li>
                            <a href="#t5"><img src="img/tab5.svg"/></a>
                        </li>
                        <li>
                            <a href="#t6"><img src="img/tab6.svg"/></a>
                        </li>
                    </ul>
                    <div id="t1">
                        <p class="bold">
                            Дизайн приложения
                            <a href="#" class="add">Добавить в проект</a>
                        </p>
                        <p>
                            Проектирование дизайна мобильных приложений состоит из двух
                            важных частей: создание запоминающегося пользовательского
                            опыта (user experience) и дизайна экранных форм (user
                            interface).
                        </p>
                        <p>
                            Положительный пользовательский опыт создаётся на основании
                            карты путешествия клиента (CJM), а, если её нет, то на
                            исследовании решений конкурентов и анализе сценариев
                            взаимодействия пользователя с мобильным приложением. В
                            результате клиенту становится удобно пользоваться мобильным
                            приложением для просмотра контента, покупки товаров и услуг.
                            Для компании это рост конверсии от трафика в мобильном
                            приложении.
                        </p>
                        <p>
                            Дизайн экранных форм включает подготовку макетов интерфейса с
                            учётом принятого в компании корпоративного стиля (brand book),
                            отрисовку элементов дизайна и иконографики, подготовку фото и
                            видео материалов, написание продающих текстов и баннеров.
                        </p>
                    </div>
                    <div id="t2">
                        222
                    </div>
                    <div id="t3">
                        333
                    </div>
                    <div id="t4">
                        444
                    </div>
                    <div id="t5">
                        555
                    </div>
                    <div id="t6">
                        666
                    </div>
                </div>
                <div>
                    <div class="reviews">
                        <div class="block-name flex">
                            <div>Что думают наши клиенты о предлагаемых решениях</div>
                            <div class="rating">
                                <span class="star"></span> 5.0 <span class="arrow"></span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="rating">
                                <div class="r-item flex">
                                    <p>Качество разработки</p>
                                    <div class="result">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="half"></span>
                                        <span class="none"></span>
                                    </div>
                                </div>
                                <div class="r-items">
                                    <div class="r-item flex">
                                        <p>Запуск новых промоакций</p>
                                        <div class="result">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span class="half"></span>
                                            <span class="none"></span>
                                        </div>
                                    </div>
                                    <div class="r-item flex">
                                        <p>Настройка правил списания и начисления баллов</p>
                                        <div class="result">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span class="half"></span>
                                            <span class="none"></span>
                                        </div>
                                    </div>
                                    <div class="r-item flex">
                                        <p>Маркетинговый календарь</p>
                                        <div class="result">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span class="half"></span>
                                            <span class="none"></span>
                                        </div>
                                    </div>
                                    <div class="r-item flex">
                                        <p>Поддержка держателей карт лояльности</p>
                                        <div class="result">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span class="half"></span>
                                            <span class="none"></span>
                                        </div>
                                    </div>
                                    <div class="r-item flex">
                                        <p>Ко-бренд и коалиционные программы</p>
                                        <div class="result">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span class="half"></span>
                                            <span class="none"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="r-item flex">
                                    <p>Юзабилити</p>
                                    <div class="result">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="half"></span>
                                        <span class="none"></span>
                                    </div>
                                </div>
                                <div class="r-items">
                                    <div class="r-item">
                                        <p>Варианты</p>
                                    </div>
                                </div>
                                <div class="r-item flex">
                                    <p>Квалификация команды</p>
                                    <div class="result">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="half"></span>
                                        <span class="none"></span>
                                    </div>
                                </div>
                                <div class="r-items">
                                    <div class="r-item">
                                        <p>Варианты</p>
                                    </div>
                                </div>
                                <div class="r-item flex">
                                    <p>Бюджет</p>
                                    <div class="result">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="half"></span>
                                        <span class="none"></span>
                                    </div>
                                </div>
                                <div class="r-items">
                                    <div class="r-item">
                                        <p>Варианты</p>
                                    </div>
                                </div>
                                <div class="r-item flex">
                                    <p>Сроки</p>
                                    <div class="result">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="half"></span>
                                        <span class="none"></span>
                                    </div>
                                </div>
                                <div class="r-items">
                                    <div class="r-item">
                                        <p>Варианты</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="item">
                                    <div class="flex">
                                        <div class="company">
                                            <div>
                                                <span><img src="img/beeline.png"/></span>
                                            </div>
                                            <div>
                                                Старший менеджер
                                                <strong>Алексей Иванов</strong>
                                            </div>
                                        </div>
                                        <div class="company-rating">
                                            <span>5.0</span>
                                            оценки
                                        </div>
                                    </div>
                                    <div class="text">
                                        Заказать было очень удобно. Я отсутствовал в офисе и дал
                                        поручение заказать продукт нашей секретарше. Так вот
                                        даже Ниночка справилась с этим на ура. Спасибо что вы
                                        есть такие!) Так вот даже Ниночка справилась с этим на
                                        ура. Спасибо что вы есть такие!)...
                                        <span
                                        >Заказать было очень удобно. Я отсутствовал в офисе и
                          дал поручение заказать продукт нашей секретарше. Так
                          вот даже Ниночка справилась с этим на ура. Спасибо что
                          вы есть такие!) Так вот даже Ниночка справилась с этим
                          на ура. Спасибо что вы есть такие!)</span
                                        >
                                        <a>читать весь отзыв</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="flex">
                                        <div class="company">
                                            <div>
                                                <span><img src="img/beeline.png"/></span>
                                            </div>
                                            <div>
                                                Старший менеджер
                                                <strong>Алексей Иванов</strong>
                                            </div>
                                        </div>
                                        <div class="company-rating">
                                            <span>5.0</span>
                                            оценки
                                        </div>
                                    </div>
                                    <div class="text">
                                        Заказать было очень удобно. Я отсутствовал в офисе и дал
                                        поручение заказать продукт нашей секретарше. Так вот
                                        даже Ниночка справилась с этим на ура. Спасибо что вы
                                        есть такие!) Так вот даже Ниночка справилась с этим на
                                        ура. Спасибо что вы есть такие!)...
                                        <span
                                        >Заказать было очень удобно. Я отсутствовал в офисе и
                          дал поручение заказать продукт нашей секретарше. Так
                          вот даже Ниночка справилась с этим на ура. Спасибо что
                          вы есть такие!) Так вот даже Ниночка справилась с этим
                          на ура. Спасибо что вы есть такие!)</span
                                        >
                                        <a>читать весь отзыв</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="flex">
                                        <div class="company">
                                            <div>
                                                <span><img src="img/beeline.png"/></span>
                                            </div>
                                            <div>
                                                Старший менеджер
                                                <strong>Алексей Иванов</strong>
                                            </div>
                                        </div>
                                        <div class="company-rating">
                                            <span>5.0</span>
                                            оценки
                                        </div>
                                    </div>
                                    <div class="text">
                                        Заказать было очень удобно. Я отсутствовал в офисе и дал
                                        поручение заказать продукт нашей секретарше. Так вот
                                        даже Ниночка справилась с этим на ура. Спасибо что вы
                                        есть такие!) Так вот даже Ниночка справилась с этим на
                                        ура. Спасибо что вы есть такие!)...
                                        <span
                                        >Заказать было очень удобно. Я отсутствовал в офисе и
                          дал поручение заказать продукт нашей секретарше. Так
                          вот даже Ниночка справилась с этим на ура. Спасибо что
                          вы есть такие!) Так вот даже Ниночка справилась с этим
                          на ура. Спасибо что вы есть такие!)</span
                                        >
                                        <a>читать весь отзыв</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="flex">
                                        <div class="company">
                                            <div>
                                                <span><img src="img/beeline.png"/></span>
                                            </div>
                                            <div>
                                                Старший менеджер
                                                <strong>Алексей Иванов</strong>
                                            </div>
                                        </div>
                                        <div class="company-rating">
                                            <span>5.0</span>
                                            оценки
                                        </div>
                                    </div>
                                    <div class="text">
                                        Заказать было очень удобно. Я отсутствовал в офисе и дал
                                        поручение заказать продукт нашей секретарше. Так вот
                                        даже Ниночка справилась с этим на ура. Спасибо что вы
                                        есть такие!) Так вот даже Ниночка справилась с этим на
                                        ура. Спасибо что вы есть такие!)...
                                        <span
                                        >Заказать было очень удобно. Я отсутствовал в офисе и
                          дал поручение заказать продукт нашей секретарше. Так
                          вот даже Ниночка справилась с этим на ура. Спасибо что
                          вы есть такие!) Так вот даже Ниночка справилась с этим
                          на ура. Спасибо что вы есть такие!)</span
                                        >
                                        <a>читать весь отзыв</a>
                                    </div>
                                </div>
                            </div>
                            <a class="bottom-link">Оставить отзыв</a>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="block-name">FAQ <span class="arrow"></span></div>
                        <div class="content">
                            <div class="list">
                                <div class="item">
                                    <div class="name">
                                        Вопрос №1 . Почему вас нет в таких рейтингах как
                                        Tagline?
                                    </div>
                                    <div class="text">
                                        Мы не специализируемся на разработки мобильных
                                        приложений, но отлично справляемся с этой задачей в
                                        рамках комплексных проектов, например, когда компания по
                                        нескольким направлениям проводит модернизацию своих
                                        маркетинговых технологий для улучшения всего клиентского
                                        опыта и роста продаж, например внедряет CRM или систему
                                        кросс-канальных коммуникаций и одним из каналов
                                        коммуникаций хочет видеть Мобильное Приложение.
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="name">
                                        Вопрос №2 Зачем заказывать МП у Вас, если есть
                                        специализированные компании?
                                    </div>
                                    <div class="text">
                                        Мы не специализируемся на разработки мобильных
                                        приложений, но отлично справляемся с этой задачей в
                                        рамках комплексных проектов, например, когда компания по
                                        нескольким направлениям проводит модернизацию своих
                                        маркетинговых технологий для улучшения всего клиентского
                                        опыта и роста продаж, например внедряет CRM или систему
                                        кросс-канальных коммуникаций и одним из каналов
                                        коммуникаций хочет видеть Мобильное Приложение.
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="name">
                                        Вопрос №3 Когда компания готова для создания
                                        собственного мобильного приложения?
                                    </div>
                                    <div class="text">
                                        Мы не специализируемся на разработки мобильных
                                        приложений, но отлично справляемся с этой задачей в
                                        рамках комплексных проектов, например, когда компания по
                                        нескольким направлениям проводит модернизацию своих
                                        маркетинговых технологий для улучшения всего клиентского
                                        опыта и роста продаж, например внедряет CRM или систему
                                        кросс-канальных коммуникаций и одним из каналов
                                        коммуникаций хочет видеть Мобильное Приложение.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="standarts">
                    <div class="block-name">
                        Наши стандарты
                    </div>
                    <div class="flex">
                        <div class="item">
                            <img src="img/standart1.svg"/>
                            <span>Время решения критичного инцидента </span>
                        </div>
                        <div class="item">
                            <img src="img/standart2.svg"/>
                            <span>Время доступности системы</span>
                        </div>
                        <div class="item">
                            <img src="img/standart3.svg"/>
                            <span>ФИНАНСОВЫЕ ОБЯЗАТЕЛЬСТВА ЗА НЕСОБЛЮДЕНИЕ ВРЕМЕНИ</span>
                        </div>
                        <div class="item">
                            <img src="img/standart4.svg"/>
                            <span>Канала взаимодействия</span>
                        </div>
                        <div class="item">
                            <img src="img/standart5.svg"/>
                            <span>ПО службы поддержки</span>
                        </div>
                        <div class="item">
                            <img src="img/standart6.svg"/>
                            <span>fIRST CALL RESOLUTION</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection