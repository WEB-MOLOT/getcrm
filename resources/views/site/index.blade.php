@extends('layouts.site')

@section('title')
    Главная
@endsection

@section('footer')
    @include('_partials.footer')
    @include('_partials.modals')
@endsection

@section('before_content')
    @include('_partials.creating-project')
    <div class="first_bk">
        @include('_partials.header')
        <div class="container">
            <div class="ftbk_title">
            <span class="ftbk_title--large"
            ><em>GETCRM</em> создает запоминающийся клиентский опыт</span
            >
                <span class="ftbk_title--small"
                >используя современные IT технологии и накопленные
              бизнес-практики</span
                >
            </div>
            <div class="ftbk_big">НОВАЯ ЭРА <span>CUSTOMER EXPERIENCE</span></div>
            <div class="ftbk_btn">
                <a href="{{ route('site.customer.index') }}" class="btn btn_orange btn_orange_with_border">
                    <span>Начни знакомство</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('after_content')

@endsection

@section('content')
    <div class="actual_bk">
        <div class="container">
            <div class="title_bk">
                Выбери то, что актуально <br/>для вашего бизнеса!
            </div>
            <div class="actual_sliders_wrapper">
                <div class="actual_sliders ">
                    <div class="actual_slider actual_slider_first">
                        <div class="actual_slider_title">Путешествие клиента:</div>
                        <div class="one_slider__wrapper">
                            <div class="actual_slider_inside">
                                <div
                                    class="actual_slider--range"
                                    data-labels=",Поиск и сравнение,Выбор,Покупка,Получение,Использование,Обслуживание,Рекомендации,"
                                ></div>
                            </div>
                        </div>
                        <button class="slider__btn">
                            <div class="btn__text">
                                <div class="btntext__content">Выбрать</div>
                                <div class="bals">
                                    <span class="btn__ball"></span>
                                    <span class="btn__ball"></span>
                                    <span class="btn__ball"></span>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="actual_slider actual_slider__second">
                        <div class="actual_slider_title ">Каналы:</div>
                        <div class="one_slider__wrapper">
                            <div class="actual_slider_inside">
                                <div
                                    class="actual_slider--range"
                                    data-labels=",Сайт & Баннер,Колл-центр,Мессенджеры,E-mail,SMS,Push,Медийная реклама,Платный поиск,Соцсети,Магазин & Чек,МП \ ЛК,Партнеры & агенты,"
                                ></div>
                            </div>
                        </div>
                        <button class="slider__btn">
                            <div class="btn__text">
                                <div class="btntext__content">Выбрать</div>
                                <div class="bals">
                                    <span class="btn__ball"></span>
                                    <span class="btn__ball"></span>
                                    <span class="btn__ball"></span>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="actual_slider actual_slider__third">
                        <div class="actual_slider_title ">Ожидания:</div>
                        <div class="one_slider__wrapper">
                            <div class="actual_slider_inside">
                                <div
                                    class="actual_slider--range"
                                    data-labels=",Узнавайте,Удивляйте,Вовлекайте,Упрощайте,Предлагайте нужное,Награждайте,Заслужите доверие,Будьте последовательны,Заботьтесь,"
                                ></div>
                            </div>
                        </div>
                        <button class="slider__btn">
                            <div class="btn__text">
                                <div class="btntext__content">Выбрать</div>
                                <div class="bals">
                                    <span class="btn__ball"></span>
                                    <span class="btn__ball"></span>
                                    <span class="btn__ball"></span>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="actual_info_cols d_flex f_wrap">
                    <div class="actual_info_col">
                        <div class="actual_info_item">
                            <div
                                class="actual_info_head d_flex a_items_center j_content_center"
                            >
                                Подобранные решения:
                            </div>
                            <div class="actual_info_body actual_info_body__left">
                                <div class="aib_inside_zero aib_inside_zero_left selected">
                                    <div class="aib_inside_zero__content">
                                        Выберите параметры фильтра, исходя из потребностей
                                        вашего бизнеса, и система подберет для вас подходящее
                                        решение.
                                    </div>
                                </div>
                                <div class="aib_inside">
                                    <div
                                        class="aib_inside_content_check d_flex j_content_center"
                                    >
                                        <div class="aib_inside_check_list">
                                            <ul>
                                                <li
                                                    class="checked checkbox__wrapper"
                                                    data-search="1"
                                                >
                                                    <label>
                                                        <input type="checkbox" value=""/>
                                                        <span>Работа с сервисными обращениями</span>
                                                    </label>
                                                </li>
                                                <li
                                                    class="checked checkbox__wrapper"
                                                    data-search="2"
                                                >
                                                    <label>
                                                        <input type="checkbox" value=""/>
                                                        <span>Обращение в колл-центр</span>
                                                    </label>
                                                </li>
                                                <li
                                                    class="checked checkbox__wrapper"
                                                    data-search="3"
                                                >
                                                    <label>
                                                        <input type="checkbox" value=""/>
                                                        <span>Обновление профиля клиента</span>
                                                    </label>
                                                </li>
                                                <li
                                                    class="checked checkbox__wrapper"
                                                    data-search="1"
                                                >
                                                    <label>
                                                        <input type="checkbox" value=""/>
                                                        <span>Работа с сервисными обращениями</span>
                                                    </label>
                                                </li>
                                                <li
                                                    class="checked checkbox__wrapper"
                                                    data-search="2"
                                                >
                                                    <label>
                                                        <input type="checkbox" value=""/>
                                                        <span>Обращение в колл-центр</span>
                                                    </label>
                                                </li>
                                                <li
                                                    class="checked checkbox__wrapper"
                                                    data-search="3"
                                                >
                                                    <label>
                                                        <input type="checkbox" value=""/>
                                                        <span>Обновление профиля клиента</span>
                                                    </label>
                                                </li>
                                                <li
                                                    class="checked checkbox__wrapper"
                                                    data-search="1"
                                                >
                                                    <label>
                                                        <input type="checkbox" value=""/>
                                                        <span>Работа с сервисными обращениями</span>
                                                    </label>
                                                </li>
                                                <li
                                                    class="checked checkbox__wrapper"
                                                    data-search="2"
                                                >
                                                    <label>
                                                        <input type="checkbox" value=""/>
                                                        <span>Обращение в колл-центр</span>
                                                    </label>
                                                </li>
                                                <li
                                                    class="checked checkbox__wrapper"
                                                    data-search="3"
                                                >
                                                    <label>
                                                        <input type="checkbox" value=""/>
                                                        <span>Обновление профиля клиента</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="actual_info_col">
                        <div class="actual_info_item">
                            <div
                                class="actual_info_head d_flex a_items_center j_content_center"
                            >
                                Функционал:
                            </div>
                            <div class="actual_info_body">
                                <div class="aib_inside_zero selected aib_inside_zero_right">
                                    <div class="aib_inside_zero__content">
                                        Наведите на название решения, чтобы увидеть
                                        соответствующий ему функционал.
                                    </div>
                                </div>
                                <div class="aib_inside">
                                    <div
                                        class="aib_inside_content_functional d_flex j_content_between f_wrap"
                                        data-result="1"
                                    >
                                        <ol>
                                            <li>Регистрация профиля клиента (тел., email…)</li>
                                            <li>Регистрация членов семьи</li>
                                            <li>Сбор поведенческих данных со всех каналов</li>
                                            <li>
                                                Маркетинговые атрибуты (RFM-сегмент, LTV, риск
                                                оттока)
                                            </li>
                                            <li>Путешествие клиента</li>
                                            <li>Карта лояльности</li>
                                            <li>ID устройств, Cookies</li>
                                            <li>
                                                История обращений и рекламаций (чат,
                                                email-переписка…)
                                            </li>
                                            <li>Транзакционная история</li>
                                            <li>Поисковая история (сайт и интернет)</li>
                                            <li>
                                                Предиктивные паттерны – следующая покупка,
                                                приемлемая стоимость, вероятность оттока…
                                            </li>
                                            <li>Предпочитаемые каналы</li>
                                            <li>Соц. сети ID</li>
                                            <li>
                                                История обращений и рекламаций (чат,
                                                email-переписка…)
                                            </li>
                                            <li>Транзакционная история</li>
                                            <li>Поисковая история (сайт и интернет)</li>
                                            <li>
                                                Предиктивные паттерны – следующая покупка,
                                                приемлемая стоимость, вероятность оттока…
                                            </li>
                                            <li>Предпочитаемые каналы</li>
                                            <li>Соц. сети ID</li>
                                            <li>
                                                История обращений и рекламаций (чат,
                                                email-переписка…)
                                            </li>
                                            <li>Транзакционная история</li>
                                            <li>Поисковая история (сайт и интернет)</li>
                                            <li>
                                                Предиктивные паттерны – следующая покупка,
                                                приемлемая стоимость, вероятность оттока…
                                            </li>
                                            <li>Предпочитаемые каналы</li>
                                            <li>Соц. сети ID</li>
                                        </ol>
                                    </div>
                                    <div
                                        class="aib_inside_content_functional d_flex j_content_between f_wrap"
                                        data-result="2"
                                    >
                                        <ol>
                                            <li>Предпочитаемые каналы</li>
                                            <li>Соц. сети ID</li>
                                            <li>
                                                История обращений и рекламаций (чат,
                                                email-переписка…)
                                            </li>
                                            <li>Транзакционная история</li>
                                            <li>Поисковая история (сайт и интернет)</li>
                                            <li>
                                                Предиктивные паттерны – следующая покупка,
                                                приемлемая стоимость, вероятность оттока…
                                            </li>
                                            <li>Предпочитаемые каналы</li>
                                            <li>Соц. сети ID</li>
                                            <li>Регистрация профиля клиента (тел., email…)</li>
                                            <li>Регистрация членов семьи</li>
                                            <li>Сбор поведенческих данных со всех каналов</li>
                                            <li>
                                                Маркетинговые атрибуты (RFM-сегмент, LTV, риск
                                                оттока)
                                            </li>
                                            <li>Путешествие клиента</li>
                                            <li>Карта лояльности</li>
                                            <li>ID устройств, Cookies</li>
                                            <li>
                                                История обращений и рекламаций (чат,
                                                email-переписка…)
                                            </li>
                                            <li>Транзакционная история</li>
                                            <li>Поисковая история (сайт и интернет)</li>
                                            <li>
                                                Предиктивные паттерны – следующая покупка,
                                                приемлемая стоимость, вероятность оттока…
                                            </li>
                                            <li>Предпочитаемые каналы</li>
                                            <li>Соц. сети ID</li>
                                            <li>
                                                История обращений и рекламаций (чат,
                                                email-переписка…)
                                            </li>
                                            <li>Транзакционная история</li>
                                            <li>Поисковая история (сайт и интернет)</li>
                                            <li>
                                                Предиктивные паттерны – следующая покупка,
                                                приемлемая стоимость, вероятность оттока…
                                            </li>
                                        </ol>
                                    </div>
                                    <div
                                        class="aib_inside_content_functional d_flex j_content_between f_wrap"
                                        data-result="3"
                                    >
                                        <ol>
                                            <li>Транзакционная история</li>
                                            <li>Поисковая история (сайт и интернет)</li>
                                            <li>Сбор поведенческих данных со всех каналов</li>
                                            <li>
                                                Маркетинговые атрибуты (RFM-сегмент, LTV, риск
                                                оттока)
                                            </li>
                                            <li>Путешествие клиента</li>
                                            <li>Карта лояльности</li>
                                            <li>ID устройств, Cookies</li>
                                            <li>
                                                История обращений и рекламаций (чат,
                                                email-переписка…)
                                            </li>
                                            <li>Транзакционная история</li>
                                            <li>Поисковая история (сайт и интернет)</li>
                                            <li>
                                                Предиктивные паттерны – следующая покупка,
                                                приемлемая стоимость, вероятность оттока…
                                            </li>
                                            <li>Предпочитаемые каналы</li>
                                            <li>Соц. сети ID</li>
                                            <li>
                                                История обращений и рекламаций (чат,
                                                email-переписка…)
                                            </li>
                                            <li>Транзакционная история</li>
                                            <li>Поисковая история (сайт и интернет)</li>
                                            <li>
                                                Предиктивные паттерны – следующая покупка,
                                                приемлемая стоимость, вероятность оттока…
                                            </li>
                                            <li>Предпочитаемые каналы</li>
                                            <li>Соц. сети ID</li>
                                            <li>
                                                История обращений и рекламаций (чат,
                                                email-переписка…)
                                            </li>
                                            <li>Транзакционная история</li>
                                            <li>Поисковая история (сайт и интернет)</li>
                                            <li>
                                                Предиктивные паттерны – следующая покупка,
                                                приемлемая стоимость, вероятность оттока…
                                            </li>
                                            <li>Предпочитаемые каналы</li>
                                            <li>Соц. сети ID</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="actual_info_btn">
                    <a
                        href="#"
                        class="btn btn_orange btn_with_icon "
                        id="manager-modal"
                    >
                <span class="d_flex a_items_center j_content_center">
                  <em class="btn_icon"
                  ><img src="/img/icon_btn_phone.png" alt=""
                      /></em>
                  <em class="btn_txt">Связаться с менеджером</em>
                </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mb_now_bk">
        <div class="container">
            <div class="title_bk">
                Так можно уже сейчас!
                <span>1:1 событийный маркетинг в реальном времени</span>
            </div>
            <div class="mb_now_slider_wrapper">
                <div class="mb_now_slider">
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/5qap5aO4i9A"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/5qap5aO4i9A"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="mb_now_slider_thumbnails">
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">CRM <br/>Loyalty</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">Responsys</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">Maxymizer</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">DMP</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">
                                Content <br/>Management
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">CRM <br/>Loyalty</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">Responsys</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">Maxymizer</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">DMP</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">
                                Content <br/>Management
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="why_getcrm_bk">
        <div class="container">
            <div class="title_bk">
                Почему GETCRM? <span>Мыслим по новому!</span>
            </div>
            <div class="why_getcrm_items">
                <div
                    class="why_getcrm_item why_getcrm_item--left d_flex a_items_start"
                >
                    <div
                        class="why_getcrm_item--variants_bk d_flex j_content_end"
                        style="background-image: url(img/temp/bg_getcrm_1.jpg);"
                    >
                        <div class="why_getcrm_item--variants_bk_inside">
                            <div class="why_getcrm_item--variants_title">
                                Гарантия возврата инвестиций
                            </div>
                            <div class="why_getcrm_item--variants d_flex f_wrap">
                                <div
                                    class="why_getcrm_item--variant active d_flex"
                                    data-item="1"
                                >
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="/img/svg/icon_why_crm_1.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Контроль бизнес- результатов
                                    </div>
                                </div>
                                <div class="why_getcrm_item--variant d_flex" data-item="2">
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="/img/svg/icon_why_crm_2.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Customer Journey Mapping (CJM):
                                    </div>
                                </div>
                                <div class="why_getcrm_item--variant d_flex" data-item="3">
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="/img/svg/icon_why_crm_3.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Применение лучших практик (BPI, Best Practice
                                        Implementation)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why_getcrm_item--results">
                        <div class="why_getcrm_item--results_inside">
                            <div class="why_getcrm_item--results_items">
                                <div
                                    class="why_getcrm_item--results_item active"
                                    data-item="1"
                                >
                                    <div class="why_getcrm_item--results_content">
                                        <ol>
                                            <li>Построение бизнес-кейса на присейле</li>
                                            <li>Назначение на проект бизнес-консультанта</li>
                                            <li>
                                                Бесплатное сопровождение проекта до полной
                                                окупаемости
                                            </li>
                                            <li>Формулирование целевых проектных KPI</li>
                                            <li>Еженедельный контроль проектных KPI</li>
                                            <li>Написание Истории Успеха</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="why_getcrm_item--results_item" data-item="2">
                                    <div class="why_getcrm_item--results_content">
                                        <ol>
                                            <li>
                                                Бесплатное сопровождение проекта до полной
                                                окупаемости
                                            </li>
                                            <li>Формулирование целевых проектных KPI</li>
                                            <li>Еженедельный контроль проектных KPI</li>
                                            <li>Написание Истории Успеха</li>
                                            <li>Построение бизнес-кейса на присейле</li>
                                            <li>Назначение на проект бизнес-консультанта</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="why_getcrm_item--results_item" data-item="3">
                                    <div class="why_getcrm_item--results_content">
                                        <ol>
                                            <li>Формулирование целевых проектных KPI</li>
                                            <li>Еженедельный контроль проектных KPI</li>
                                            <li>Построение бизнес-кейса на присейле</li>
                                            <li>Назначение на проект бизнес-консультанта</li>
                                            <li>
                                                Бесплатное сопровождение проекта до полной
                                                окупаемости
                                            </li>
                                            <li>Написание Истории Успеха</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="why_getcrm_item why_getcrm_item--right d_flex a_items_start"
                >
                    <div
                        class="why_getcrm_item--variants_bk"
                        style="background-image: url(img/temp/bg_getcrm_2.jpg);"
                    >
                        <div class="why_getcrm_item--variants_bk_inside">
                            <div class="why_getcrm_item--variants_title">
                                Мультиплатформенность
                            </div>
                            <div class="why_getcrm_item--variants d_flex f_wrap">
                                <div
                                    class="why_getcrm_item--variant active d_flex"
                                    data-item="1"
                                >
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="/img/svg/icon_why_crm_4.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        С нами выбор платформы станет проще
                                    </div>
                                </div>
                                <div class="why_getcrm_item--variant d_flex" data-item="2">
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="/img/svg/icon_why_crm_5.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Выбери выгодного и ответственного партнера
                                    </div>
                                </div>
                                <div class="why_getcrm_item--variant d_flex" data-item="3">
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="/img/svg/icon_why_crm_6.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Подключитесь к непрерывному источнику знаний
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why_getcrm_item--results d_flex j_content_end">
                        <div class="why_getcrm_item--results_inside">
                            <div class="why_getcrm_item--results_items">
                                <div
                                    class="why_getcrm_item--results_item active"
                                    data-item="1"
                                >
                                    <div class="why_getcrm_item--results_content">
                                        <ol>
                                            <li>Мы не привязаны к конкретной платформе</li>
                                            <li>
                                                Мы знаем возможности и ограничения разных платформ
                                            </li>
                                            <li>
                                                Мы поможем подготовить сравнения разных платформ
                                            </li>
                                            <li>Мы поможем с организацией референс-визита</li>
                                            <li>Мы поможем подготовить Технические Требования</li>
                                            <li>
                                                Воспользуйтесь нашим калькулятором для сравнения
                                                разных вариантов расчетов
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="why_getcrm_item--results_item" data-item="2">
                                    <div class="why_getcrm_item--results_content">
                                        <ol>
                                            <li>Мы поможем с организацией референс-визита</li>
                                            <li>Мы поможем подготовить Технические Требования</li>
                                            <li>
                                                Воспользуйтесь нашим калькулятором для сравнения
                                                разных вариантов расчетов
                                            </li>
                                            <li>Мы не привязаны к конкретной платформе</li>
                                            <li>
                                                Мы знаем возможности и ограничения разных платформ
                                            </li>
                                            <li>
                                                Мы поможем подготовить сравнения разных платформ
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="why_getcrm_item--results_item" data-item="3">
                                    <div class="why_getcrm_item--results_content">
                                        <ol>
                                            <li>Мы не привязаны к конкретной платформе</li>
                                            <li>
                                                Мы знаем возможности и ограничения разных платформ
                                            </li>
                                            <li>
                                                Мы поможем подготовить сравнения разных платформ
                                            </li>
                                            <li>Мы поможем с организацией референс-визита</li>
                                            <li>
                                                Мы знаем возможности и ограничения разных платформ
                                            </li>
                                            <li>
                                                Мы поможем подготовить сравнения разных платформ
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects_bk">
        <div class="container">
            <div class="title_bk">Все наши проекты референциальны!</div>
            <div class="projects_slider_wrapper">
                <div class="projects_slider">
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projects_slider_del"></div>
                <div class="projects_slider_thumbnails">
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_1.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_2.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_3.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_4.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_1.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_2.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_3.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_4.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_1.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_2.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_3.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_4.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="certificates_bk">
        <div class="container">
            <div class="title_bk">Эксперты верят в нас!</div>
            <div class="certificates_slider_wrapper">
                <div class="certificates_slider">
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="/img/temp/certificate_1.png"
                                xoriginal="img/temp/original/certificate_1.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="/img/temp/certificate_2.png"
                                xoriginal="img/temp/original/certificate_2.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="/img/temp/certificate_3.png"
                                xoriginal="img/temp/original/certificate_3.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="/img/temp/certificate_1.png"
                                xoriginal="img/temp/original/certificate_1.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="/img/temp/certificate_2.png"
                                xoriginal="img/temp/original/certificate_2.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="/img/temp/certificate_3.png"
                                xoriginal="img/temp/original/certificate_3.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
                <div class="certificates_slider_thumbnails">
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="certificates_desc">
                    <div class="certificates_desc--title">
                        Держать вектор развития <span>наша основная задача</span>
                    </div>
                    <div class="certificates_desc--content">
                        Компания постоянно развивается и участвует вразличных выставках
                        и конкурсах. Таким образом мы держим высокую планку оказываемых
                        услуг и являемся лидером в сфере оказания подобных услуг.
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('_partials.home.job')
    @include('_partials.home.news')
@endsection
