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
                <a href="#" class="btn btn_orange btn_orange_with_border">
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
                  ><img src="img/icon_btn_phone.png" alt=""
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
                                        <img src="img/svg/icon_why_crm_1.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Контроль бизнес- результатов
                                    </div>
                                </div>
                                <div class="why_getcrm_item--variant d_flex" data-item="2">
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="img/svg/icon_why_crm_2.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Customer Journey Mapping (CJM):
                                    </div>
                                </div>
                                <div class="why_getcrm_item--variant d_flex" data-item="3">
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="img/svg/icon_why_crm_3.svg" alt=""/>
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
                                        <img src="img/svg/icon_why_crm_4.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        С нами выбор платформы станет проще
                                    </div>
                                </div>
                                <div class="why_getcrm_item--variant d_flex" data-item="2">
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="img/svg/icon_why_crm_5.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Выбери выгодного и ответственного партнера
                                    </div>
                                </div>
                                <div class="why_getcrm_item--variant d_flex" data-item="3">
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="img/svg/icon_why_crm_6.svg" alt=""/>
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
                                <img src="img/temp/project_logo.png" alt=""/>
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
                                <img src="img/temp/project_logo.png" alt=""/>
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
                                <img src="img/temp/project_logo.png" alt=""/>
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
                                <img src="img/temp/project_logo.png" alt=""/>
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
                                <img src="img/temp/project_logo.png" alt=""/>
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
                                <img src="img/temp/project_logo.png" alt=""/>
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
                                <img src="img/temp/project_logo.png" alt=""/>
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
                                <img src="img/temp/project_logo.png" alt=""/>
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
                                <img src="img/temp/project_logo.png" alt=""/>
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
                                <img src="img/temp/project_logo.png" alt=""/>
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
                                <img src="img/temp/project_logo.png" alt=""/>
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
                                <img src="img/temp/project_logo.png" alt=""/>
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
                            <img src="img/temp/project_thumb_1.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="img/temp/project_thumb_2.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="img/temp/project_thumb_3.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="img/temp/project_thumb_4.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="img/temp/project_thumb_1.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="img/temp/project_thumb_2.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="img/temp/project_thumb_3.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="img/temp/project_thumb_4.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="img/temp/project_thumb_1.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="img/temp/project_thumb_2.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="img/temp/project_thumb_3.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="img/temp/project_thumb_4.png" alt=""/>
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
                                src="img/temp/certificate_1.png"
                                xoriginal="img/temp/original/certificate_1.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="img/temp/certificate_2.png"
                                xoriginal="img/temp/original/certificate_2.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="img/temp/certificate_3.png"
                                xoriginal="img/temp/original/certificate_3.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="img/temp/certificate_1.png"
                                xoriginal="img/temp/original/certificate_1.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="img/temp/certificate_2.png"
                                xoriginal="img/temp/original/certificate_2.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="img/temp/certificate_3.png"
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
    <div class="vacancies_bk">
        <div class="container">
            <div class="title_bk">Мы сделаны из того же теста!</div>
            <div class="vacancies_wrapper_inside">
                <div class="vacancies_inside d_flex a_items_center">
                    <div class="vacancies_image">
                        <img src="img/temp/vacancies_1.jpg" alt=""/>
                    </div>
                    <div class="vacancies_info d_flex a_items_center">
                        <div class="vacancies_info_inside">
                            <div class="vacancies_info_title">
                                Наша замечательная команда
                            </div>
                            <div class="vacancies_info_desc">
                                <p>
                                    Если вы готовы менять мир к лучшему, знаете как улучшить
                                    опыт покупаетеля на пути покупки необходимого ему товара.
                                </p>
                                <p>
                                    Дале ещё более вдохновляющий текст по мотивации будующих
                                    сотрудников которые станут новой кровью нашей компании.
                                </p>
                            </div>
                            <div class="vacancies_info_btn">
                                <a href="#" class="btn btn_orange btn_orange_with_border">
                                    <span>Вакансии</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vacancies_btn">
                    <div class="vacancies_btn--wrapper">
                        <a
                            href="#"
                            class="vacancies_btn_link d_flex a_items_center j_content_center"
                        >
                  <span class="vacancies_btn_link--icon">
                    <img src="img/vacancies_hh_icon.png" alt=""/>
                  </span>
                            <span class="vacancies_btn_link--txt">
                    <span class="vacancies_btn_link--txt_one"
                    >Профиль нашей компании
                    </span>
                    <span class="vacancies_btn_link--txt_two">на hh.ru</span>
                  </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news_bk">
        <div class="container">
            <div class="title_bk">Новости</div>
            <div class="news_slider_wrapper">
                <div class="news_slider">
                    <div class="item">
                        <a href="#" class="item_inside d_flex a_items_center">
                            <span class="item_info__date">10.01.2020</span>
                            <div class="item_image">
                                <img src="img/temp/news_1.jpg" alt=""/>
                            </div>
                            <div class="item_info">
                                <div class="item_title">
                                    На этом месте заголовок данной новости, можно в 2 строки
                                </div>
                                <div class="item_desc">
                                    Краткий текст новости но без подробностей, который должен
                                    заинтересовать пользователя для открытия и прочтения
                                    полной новости
                                </div>
                                <div class="item_more">
                                    <svg
                                        width="35"
                                        height="19"
                                        viewBox="0 0 35 19"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M33.7557 8.4669C33.6871 8.37996 32.0397 6.31337 29.2154 4.23843C25.4413 1.46563 21.3348 0 17.3397 0C13.3448 0 9.23829 1.46563 5.46409 4.23843C2.63986 6.31329 0.99246 8.37996 0.92376 8.4669L0.339844 9.20541L0.923834 9.94399C0.992535 10.0309 2.63993 12.0976 5.46416 14.1725C9.23837 16.9453 13.3449 18.4109 17.3398 18.4109C21.3348 18.4109 25.4413 16.9453 29.2154 14.1725C32.0397 12.0976 33.6871 10.0309 33.7557 9.94399L34.3398 9.20541L33.7557 8.4669ZM17.3397 15.6543C13.7838 15.6543 10.8908 12.7614 10.8908 9.20541C10.8908 8.64829 10.9618 8.10747 11.0953 7.59143L9.62296 7.34365C9.47871 7.94096 9.40219 8.5644 9.40219 9.20541C9.40219 11.5024 10.3834 13.5742 11.9481 15.025C9.93386 14.281 8.22111 13.2369 6.92846 12.2927C5.32699 11.123 4.12678 9.93997 3.44253 9.20541C4.12707 8.47062 5.32714 7.28775 6.92846 6.11813C8.22111 5.17389 9.93393 4.12984 11.9481 3.38575L12.9358 4.49909C14.0893 3.41894 15.6385 2.7565 17.3397 2.7565C20.8956 2.7565 23.7886 5.64944 23.7886 9.20541C23.7886 12.7614 20.8956 15.6543 17.3397 15.6543ZM27.751 12.2927C26.4582 13.2369 24.7455 14.281 22.7314 15.025C24.296 13.5743 25.2772 11.5024 25.2772 9.20533C25.2772 6.90822 24.296 4.83642 22.7314 3.38567C24.7456 4.12976 26.4582 5.17382 27.751 6.11806C29.3525 7.28775 30.5527 8.47077 31.2369 9.20526C30.5524 9.9402 29.3523 11.1231 27.751 12.2927Z"
                                            fill="#A5A5A5"
                                        />
                                        <path
                                            d="M13.2356 7.95178C13.1145 8.34842 13.049 8.76918 13.049 9.20543C13.049 11.5749 14.9698 13.4958 17.3393 13.4958C19.7088 13.4958 21.6297 11.575 21.6297 9.20543C21.6297 6.8359 19.7088 4.91504 17.3393 4.91504C16.1852 4.91504 15.1383 5.3716 14.3671 6.11294L16.4834 8.49833L13.2356 7.95178Z"
                                            fill="#A5A5A5"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="item_inside d_flex a_items_center">
                            <span class="item_info__date">10.01.2020</span>
                            <div class="item_image">
                                <img src="img/temp/news_1.jpg" alt=""/>
                            </div>
                            <div class="item_info">
                                <div class="item_title">
                                    На этом месте заголовок данной новости, можно в 2 строки
                                </div>
                                <div class="item_desc">
                                    Краткий текст новости но без подробностей, который должен
                                    заинтересовать пользователя для открытия и прочтения
                                    полной новости
                                </div>
                                <div class="item_more">
                                    <svg
                                        width="35"
                                        height="19"
                                        viewBox="0 0 35 19"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M33.7557 8.4669C33.6871 8.37996 32.0397 6.31337 29.2154 4.23843C25.4413 1.46563 21.3348 0 17.3397 0C13.3448 0 9.23829 1.46563 5.46409 4.23843C2.63986 6.31329 0.99246 8.37996 0.92376 8.4669L0.339844 9.20541L0.923834 9.94399C0.992535 10.0309 2.63993 12.0976 5.46416 14.1725C9.23837 16.9453 13.3449 18.4109 17.3398 18.4109C21.3348 18.4109 25.4413 16.9453 29.2154 14.1725C32.0397 12.0976 33.6871 10.0309 33.7557 9.94399L34.3398 9.20541L33.7557 8.4669ZM17.3397 15.6543C13.7838 15.6543 10.8908 12.7614 10.8908 9.20541C10.8908 8.64829 10.9618 8.10747 11.0953 7.59143L9.62296 7.34365C9.47871 7.94096 9.40219 8.5644 9.40219 9.20541C9.40219 11.5024 10.3834 13.5742 11.9481 15.025C9.93386 14.281 8.22111 13.2369 6.92846 12.2927C5.32699 11.123 4.12678 9.93997 3.44253 9.20541C4.12707 8.47062 5.32714 7.28775 6.92846 6.11813C8.22111 5.17389 9.93393 4.12984 11.9481 3.38575L12.9358 4.49909C14.0893 3.41894 15.6385 2.7565 17.3397 2.7565C20.8956 2.7565 23.7886 5.64944 23.7886 9.20541C23.7886 12.7614 20.8956 15.6543 17.3397 15.6543ZM27.751 12.2927C26.4582 13.2369 24.7455 14.281 22.7314 15.025C24.296 13.5743 25.2772 11.5024 25.2772 9.20533C25.2772 6.90822 24.296 4.83642 22.7314 3.38567C24.7456 4.12976 26.4582 5.17382 27.751 6.11806C29.3525 7.28775 30.5527 8.47077 31.2369 9.20526C30.5524 9.9402 29.3523 11.1231 27.751 12.2927Z"
                                            fill="#A5A5A5"
                                        />
                                        <path
                                            d="M13.2356 7.95178C13.1145 8.34842 13.049 8.76918 13.049 9.20543C13.049 11.5749 14.9698 13.4958 17.3393 13.4958C19.7088 13.4958 21.6297 11.575 21.6297 9.20543C21.6297 6.8359 19.7088 4.91504 17.3393 4.91504C16.1852 4.91504 15.1383 5.3716 14.3671 6.11294L16.4834 8.49833L13.2356 7.95178Z"
                                            fill="#A5A5A5"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="item_inside d_flex a_items_center">
                            <span class="item_info__date">10.01.2020</span>
                            <div class="item_image">
                                <img src="img/temp/news_1.jpg" alt=""/>
                            </div>
                            <div class="item_info">
                                <div class="item_title">
                                    На этом месте заголовок данной новости, можно в 2 строки
                                </div>
                                <div class="item_desc">
                                    Краткий текст новости но без подробностей, который должен
                                    заинтересовать пользователя для открытия и прочтения
                                    полной новости
                                </div>
                                <div class="item_more">
                                    <svg
                                        width="35"
                                        height="19"
                                        viewBox="0 0 35 19"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M33.7557 8.4669C33.6871 8.37996 32.0397 6.31337 29.2154 4.23843C25.4413 1.46563 21.3348 0 17.3397 0C13.3448 0 9.23829 1.46563 5.46409 4.23843C2.63986 6.31329 0.99246 8.37996 0.92376 8.4669L0.339844 9.20541L0.923834 9.94399C0.992535 10.0309 2.63993 12.0976 5.46416 14.1725C9.23837 16.9453 13.3449 18.4109 17.3398 18.4109C21.3348 18.4109 25.4413 16.9453 29.2154 14.1725C32.0397 12.0976 33.6871 10.0309 33.7557 9.94399L34.3398 9.20541L33.7557 8.4669ZM17.3397 15.6543C13.7838 15.6543 10.8908 12.7614 10.8908 9.20541C10.8908 8.64829 10.9618 8.10747 11.0953 7.59143L9.62296 7.34365C9.47871 7.94096 9.40219 8.5644 9.40219 9.20541C9.40219 11.5024 10.3834 13.5742 11.9481 15.025C9.93386 14.281 8.22111 13.2369 6.92846 12.2927C5.32699 11.123 4.12678 9.93997 3.44253 9.20541C4.12707 8.47062 5.32714 7.28775 6.92846 6.11813C8.22111 5.17389 9.93393 4.12984 11.9481 3.38575L12.9358 4.49909C14.0893 3.41894 15.6385 2.7565 17.3397 2.7565C20.8956 2.7565 23.7886 5.64944 23.7886 9.20541C23.7886 12.7614 20.8956 15.6543 17.3397 15.6543ZM27.751 12.2927C26.4582 13.2369 24.7455 14.281 22.7314 15.025C24.296 13.5743 25.2772 11.5024 25.2772 9.20533C25.2772 6.90822 24.296 4.83642 22.7314 3.38567C24.7456 4.12976 26.4582 5.17382 27.751 6.11806C29.3525 7.28775 30.5527 8.47077 31.2369 9.20526C30.5524 9.9402 29.3523 11.1231 27.751 12.2927Z"
                                            fill="#A5A5A5"
                                        />
                                        <path
                                            d="M13.2356 7.95178C13.1145 8.34842 13.049 8.76918 13.049 9.20543C13.049 11.5749 14.9698 13.4958 17.3393 13.4958C19.7088 13.4958 21.6297 11.575 21.6297 9.20543C21.6297 6.8359 19.7088 4.91504 17.3393 4.91504C16.1852 4.91504 15.1383 5.3716 14.3671 6.11294L16.4834 8.49833L13.2356 7.95178Z"
                                            fill="#A5A5A5"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="item_inside d_flex a_items_center">
                            <span class="item_info__date">10.01.2020</span>
                            <div class="item_image">
                                <img src="img/temp/news_1.jpg" alt=""/>
                            </div>
                            <div class="item_info">
                                <div class="item_title">
                                    На этом месте заголовок данной новости, можно в 2 строки
                                </div>
                                <div class="item_desc">
                                    Краткий текст новости но без подробностей, который должен
                                    заинтересовать пользователя для открытия и прочтения
                                    полной новости
                                </div>
                                <div class="item_more">
                                    <svg
                                        width="35"
                                        height="19"
                                        viewBox="0 0 35 19"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M33.7557 8.4669C33.6871 8.37996 32.0397 6.31337 29.2154 4.23843C25.4413 1.46563 21.3348 0 17.3397 0C13.3448 0 9.23829 1.46563 5.46409 4.23843C2.63986 6.31329 0.99246 8.37996 0.92376 8.4669L0.339844 9.20541L0.923834 9.94399C0.992535 10.0309 2.63993 12.0976 5.46416 14.1725C9.23837 16.9453 13.3449 18.4109 17.3398 18.4109C21.3348 18.4109 25.4413 16.9453 29.2154 14.1725C32.0397 12.0976 33.6871 10.0309 33.7557 9.94399L34.3398 9.20541L33.7557 8.4669ZM17.3397 15.6543C13.7838 15.6543 10.8908 12.7614 10.8908 9.20541C10.8908 8.64829 10.9618 8.10747 11.0953 7.59143L9.62296 7.34365C9.47871 7.94096 9.40219 8.5644 9.40219 9.20541C9.40219 11.5024 10.3834 13.5742 11.9481 15.025C9.93386 14.281 8.22111 13.2369 6.92846 12.2927C5.32699 11.123 4.12678 9.93997 3.44253 9.20541C4.12707 8.47062 5.32714 7.28775 6.92846 6.11813C8.22111 5.17389 9.93393 4.12984 11.9481 3.38575L12.9358 4.49909C14.0893 3.41894 15.6385 2.7565 17.3397 2.7565C20.8956 2.7565 23.7886 5.64944 23.7886 9.20541C23.7886 12.7614 20.8956 15.6543 17.3397 15.6543ZM27.751 12.2927C26.4582 13.2369 24.7455 14.281 22.7314 15.025C24.296 13.5743 25.2772 11.5024 25.2772 9.20533C25.2772 6.90822 24.296 4.83642 22.7314 3.38567C24.7456 4.12976 26.4582 5.17382 27.751 6.11806C29.3525 7.28775 30.5527 8.47077 31.2369 9.20526C30.5524 9.9402 29.3523 11.1231 27.751 12.2927Z"
                                            fill="#A5A5A5"
                                        />
                                        <path
                                            d="M13.2356 7.95178C13.1145 8.34842 13.049 8.76918 13.049 9.20543C13.049 11.5749 14.9698 13.4958 17.3393 13.4958C19.7088 13.4958 21.6297 11.575 21.6297 9.20543C21.6297 6.8359 19.7088 4.91504 17.3393 4.91504C16.1852 4.91504 15.1383 5.3716 14.3671 6.11294L16.4834 8.49833L13.2356 7.95178Z"
                                            fill="#A5A5A5"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="item_inside d_flex a_items_center">
                            <span class="item_info__date">10.01.2020</span>
                            <div class="item_image">
                                <img src="img/temp/news_1.jpg" alt=""/>
                            </div>
                            <div class="item_info">
                                <div class="item_title">
                                    На этом месте заголовок данной новости, можно в 2 строки
                                </div>
                                <div class="item_desc">
                                    Краткий текст новости но без подробностей, который должен
                                    заинтересовать пользователя для открытия и прочтения
                                    полной новости
                                </div>
                                <div class="item_more">
                                    <svg
                                        width="35"
                                        height="19"
                                        viewBox="0 0 35 19"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M33.7557 8.4669C33.6871 8.37996 32.0397 6.31337 29.2154 4.23843C25.4413 1.46563 21.3348 0 17.3397 0C13.3448 0 9.23829 1.46563 5.46409 4.23843C2.63986 6.31329 0.99246 8.37996 0.92376 8.4669L0.339844 9.20541L0.923834 9.94399C0.992535 10.0309 2.63993 12.0976 5.46416 14.1725C9.23837 16.9453 13.3449 18.4109 17.3398 18.4109C21.3348 18.4109 25.4413 16.9453 29.2154 14.1725C32.0397 12.0976 33.6871 10.0309 33.7557 9.94399L34.3398 9.20541L33.7557 8.4669ZM17.3397 15.6543C13.7838 15.6543 10.8908 12.7614 10.8908 9.20541C10.8908 8.64829 10.9618 8.10747 11.0953 7.59143L9.62296 7.34365C9.47871 7.94096 9.40219 8.5644 9.40219 9.20541C9.40219 11.5024 10.3834 13.5742 11.9481 15.025C9.93386 14.281 8.22111 13.2369 6.92846 12.2927C5.32699 11.123 4.12678 9.93997 3.44253 9.20541C4.12707 8.47062 5.32714 7.28775 6.92846 6.11813C8.22111 5.17389 9.93393 4.12984 11.9481 3.38575L12.9358 4.49909C14.0893 3.41894 15.6385 2.7565 17.3397 2.7565C20.8956 2.7565 23.7886 5.64944 23.7886 9.20541C23.7886 12.7614 20.8956 15.6543 17.3397 15.6543ZM27.751 12.2927C26.4582 13.2369 24.7455 14.281 22.7314 15.025C24.296 13.5743 25.2772 11.5024 25.2772 9.20533C25.2772 6.90822 24.296 4.83642 22.7314 3.38567C24.7456 4.12976 26.4582 5.17382 27.751 6.11806C29.3525 7.28775 30.5527 8.47077 31.2369 9.20526C30.5524 9.9402 29.3523 11.1231 27.751 12.2927Z"
                                            fill="#A5A5A5"
                                        />
                                        <path
                                            d="M13.2356 7.95178C13.1145 8.34842 13.049 8.76918 13.049 9.20543C13.049 11.5749 14.9698 13.4958 17.3393 13.4958C19.7088 13.4958 21.6297 11.575 21.6297 9.20543C21.6297 6.8359 19.7088 4.91504 17.3393 4.91504C16.1852 4.91504 15.1383 5.3716 14.3671 6.11294L16.4834 8.49833L13.2356 7.95178Z"
                                            fill="#A5A5A5"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="item_inside d_flex a_items_center">
                            <span class="item_info__date">10.01.2020</span>
                            <div class="item_image">
                                <img src="img/temp/news_1.jpg" alt=""/>
                            </div>
                            <div class="item_info">
                                <div class="item_title">
                                    На этом месте заголовок данной новости, можно в 2 строки
                                </div>
                                <div class="item_desc">
                                    Краткий текст новости но без подробностей, который должен
                                    заинтересовать пользователя для открытия и прочтения
                                    полной новости
                                </div>
                                <div class="item_more">
                                    <svg
                                        width="35"
                                        height="19"
                                        viewBox="0 0 35 19"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M33.7557 8.4669C33.6871 8.37996 32.0397 6.31337 29.2154 4.23843C25.4413 1.46563 21.3348 0 17.3397 0C13.3448 0 9.23829 1.46563 5.46409 4.23843C2.63986 6.31329 0.99246 8.37996 0.92376 8.4669L0.339844 9.20541L0.923834 9.94399C0.992535 10.0309 2.63993 12.0976 5.46416 14.1725C9.23837 16.9453 13.3449 18.4109 17.3398 18.4109C21.3348 18.4109 25.4413 16.9453 29.2154 14.1725C32.0397 12.0976 33.6871 10.0309 33.7557 9.94399L34.3398 9.20541L33.7557 8.4669ZM17.3397 15.6543C13.7838 15.6543 10.8908 12.7614 10.8908 9.20541C10.8908 8.64829 10.9618 8.10747 11.0953 7.59143L9.62296 7.34365C9.47871 7.94096 9.40219 8.5644 9.40219 9.20541C9.40219 11.5024 10.3834 13.5742 11.9481 15.025C9.93386 14.281 8.22111 13.2369 6.92846 12.2927C5.32699 11.123 4.12678 9.93997 3.44253 9.20541C4.12707 8.47062 5.32714 7.28775 6.92846 6.11813C8.22111 5.17389 9.93393 4.12984 11.9481 3.38575L12.9358 4.49909C14.0893 3.41894 15.6385 2.7565 17.3397 2.7565C20.8956 2.7565 23.7886 5.64944 23.7886 9.20541C23.7886 12.7614 20.8956 15.6543 17.3397 15.6543ZM27.751 12.2927C26.4582 13.2369 24.7455 14.281 22.7314 15.025C24.296 13.5743 25.2772 11.5024 25.2772 9.20533C25.2772 6.90822 24.296 4.83642 22.7314 3.38567C24.7456 4.12976 26.4582 5.17382 27.751 6.11806C29.3525 7.28775 30.5527 8.47077 31.2369 9.20526C30.5524 9.9402 29.3523 11.1231 27.751 12.2927Z"
                                            fill="#A5A5A5"
                                        />
                                        <path
                                            d="M13.2356 7.95178C13.1145 8.34842 13.049 8.76918 13.049 9.20543C13.049 11.5749 14.9698 13.4958 17.3393 13.4958C19.7088 13.4958 21.6297 11.575 21.6297 9.20543C21.6297 6.8359 19.7088 4.91504 17.3393 4.91504C16.1852 4.91504 15.1383 5.3716 14.3671 6.11294L16.4834 8.49833L13.2356 7.95178Z"
                                            fill="#A5A5A5"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="item_inside d_flex a_items_center">
                            <span class="item_info__date">10.01.2020</span>
                            <div class="item_image">
                                <img src="img/temp/news_1.jpg" alt=""/>
                            </div>
                            <div class="item_info">
                                <div class="item_title">
                                    На этом месте заголовок данной новости, можно в 2 строки
                                </div>
                                <div class="item_desc">
                                    Краткий текст новости но без подробностей, который должен
                                    заинтересовать пользователя для открытия и прочтения
                                    полной новости
                                </div>
                                <div class="item_more">
                                    <svg
                                        width="35"
                                        height="19"
                                        viewBox="0 0 35 19"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M33.7557 8.4669C33.6871 8.37996 32.0397 6.31337 29.2154 4.23843C25.4413 1.46563 21.3348 0 17.3397 0C13.3448 0 9.23829 1.46563 5.46409 4.23843C2.63986 6.31329 0.99246 8.37996 0.92376 8.4669L0.339844 9.20541L0.923834 9.94399C0.992535 10.0309 2.63993 12.0976 5.46416 14.1725C9.23837 16.9453 13.3449 18.4109 17.3398 18.4109C21.3348 18.4109 25.4413 16.9453 29.2154 14.1725C32.0397 12.0976 33.6871 10.0309 33.7557 9.94399L34.3398 9.20541L33.7557 8.4669ZM17.3397 15.6543C13.7838 15.6543 10.8908 12.7614 10.8908 9.20541C10.8908 8.64829 10.9618 8.10747 11.0953 7.59143L9.62296 7.34365C9.47871 7.94096 9.40219 8.5644 9.40219 9.20541C9.40219 11.5024 10.3834 13.5742 11.9481 15.025C9.93386 14.281 8.22111 13.2369 6.92846 12.2927C5.32699 11.123 4.12678 9.93997 3.44253 9.20541C4.12707 8.47062 5.32714 7.28775 6.92846 6.11813C8.22111 5.17389 9.93393 4.12984 11.9481 3.38575L12.9358 4.49909C14.0893 3.41894 15.6385 2.7565 17.3397 2.7565C20.8956 2.7565 23.7886 5.64944 23.7886 9.20541C23.7886 12.7614 20.8956 15.6543 17.3397 15.6543ZM27.751 12.2927C26.4582 13.2369 24.7455 14.281 22.7314 15.025C24.296 13.5743 25.2772 11.5024 25.2772 9.20533C25.2772 6.90822 24.296 4.83642 22.7314 3.38567C24.7456 4.12976 26.4582 5.17382 27.751 6.11806C29.3525 7.28775 30.5527 8.47077 31.2369 9.20526C30.5524 9.9402 29.3523 11.1231 27.751 12.2927Z"
                                            fill="#A5A5A5"
                                        />
                                        <path
                                            d="M13.2356 7.95178C13.1145 8.34842 13.049 8.76918 13.049 9.20543C13.049 11.5749 14.9698 13.4958 17.3393 13.4958C19.7088 13.4958 21.6297 11.575 21.6297 9.20543C21.6297 6.8359 19.7088 4.91504 17.3393 4.91504C16.1852 4.91504 15.1383 5.3716 14.3671 6.11294L16.4834 8.49833L13.2356 7.95178Z"
                                            fill="#A5A5A5"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="item_inside d_flex a_items_center">
                            <span class="item_info__date">10.01.2020</span>
                            <div class="item_image">
                                <img src="img/temp/news_1.jpg" alt=""/>
                            </div>
                            <div class="item_info">
                                <div class="item_title">
                                    На этом месте заголовок данной новости, можно в 2 строки
                                </div>
                                <div class="item_desc">
                                    Краткий текст новости но без подробностей, который должен
                                    заинтересовать пользователя для открытия и прочтения
                                    полной новости
                                </div>
                                <div class="item_more">
                                    <svg
                                        width="35"
                                        height="19"
                                        viewBox="0 0 35 19"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M33.7557 8.4669C33.6871 8.37996 32.0397 6.31337 29.2154 4.23843C25.4413 1.46563 21.3348 0 17.3397 0C13.3448 0 9.23829 1.46563 5.46409 4.23843C2.63986 6.31329 0.99246 8.37996 0.92376 8.4669L0.339844 9.20541L0.923834 9.94399C0.992535 10.0309 2.63993 12.0976 5.46416 14.1725C9.23837 16.9453 13.3449 18.4109 17.3398 18.4109C21.3348 18.4109 25.4413 16.9453 29.2154 14.1725C32.0397 12.0976 33.6871 10.0309 33.7557 9.94399L34.3398 9.20541L33.7557 8.4669ZM17.3397 15.6543C13.7838 15.6543 10.8908 12.7614 10.8908 9.20541C10.8908 8.64829 10.9618 8.10747 11.0953 7.59143L9.62296 7.34365C9.47871 7.94096 9.40219 8.5644 9.40219 9.20541C9.40219 11.5024 10.3834 13.5742 11.9481 15.025C9.93386 14.281 8.22111 13.2369 6.92846 12.2927C5.32699 11.123 4.12678 9.93997 3.44253 9.20541C4.12707 8.47062 5.32714 7.28775 6.92846 6.11813C8.22111 5.17389 9.93393 4.12984 11.9481 3.38575L12.9358 4.49909C14.0893 3.41894 15.6385 2.7565 17.3397 2.7565C20.8956 2.7565 23.7886 5.64944 23.7886 9.20541C23.7886 12.7614 20.8956 15.6543 17.3397 15.6543ZM27.751 12.2927C26.4582 13.2369 24.7455 14.281 22.7314 15.025C24.296 13.5743 25.2772 11.5024 25.2772 9.20533C25.2772 6.90822 24.296 4.83642 22.7314 3.38567C24.7456 4.12976 26.4582 5.17382 27.751 6.11806C29.3525 7.28775 30.5527 8.47077 31.2369 9.20526C30.5524 9.9402 29.3523 11.1231 27.751 12.2927Z"
                                            fill="#A5A5A5"
                                        />
                                        <path
                                            d="M13.2356 7.95178C13.1145 8.34842 13.049 8.76918 13.049 9.20543C13.049 11.5749 14.9698 13.4958 17.3393 13.4958C19.7088 13.4958 21.6297 11.575 21.6297 9.20543C21.6297 6.8359 19.7088 4.91504 17.3393 4.91504C16.1852 4.91504 15.1383 5.3716 14.3671 6.11294L16.4834 8.49833L13.2356 7.95178Z"
                                            fill="#A5A5A5"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="item_inside d_flex a_items_center">
                            <span class="item_info__date">10.01.2020</span>
                            <div class="item_image">
                                <img src="img/temp/news_1.jpg" alt=""/>
                            </div>
                            <div class="item_info">
                                <div class="item_title">
                                    На этом месте заголовок данной новости, можно в 2 строки
                                </div>
                                <div class="item_desc">
                                    Краткий текст новости но без подробностей, который должен
                                    заинтересовать пользователя для открытия и прочтения
                                    полной новости
                                </div>
                                <div class="item_more">
                                    <svg
                                        width="35"
                                        height="19"
                                        viewBox="0 0 35 19"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M33.7557 8.4669C33.6871 8.37996 32.0397 6.31337 29.2154 4.23843C25.4413 1.46563 21.3348 0 17.3397 0C13.3448 0 9.23829 1.46563 5.46409 4.23843C2.63986 6.31329 0.99246 8.37996 0.92376 8.4669L0.339844 9.20541L0.923834 9.94399C0.992535 10.0309 2.63993 12.0976 5.46416 14.1725C9.23837 16.9453 13.3449 18.4109 17.3398 18.4109C21.3348 18.4109 25.4413 16.9453 29.2154 14.1725C32.0397 12.0976 33.6871 10.0309 33.7557 9.94399L34.3398 9.20541L33.7557 8.4669ZM17.3397 15.6543C13.7838 15.6543 10.8908 12.7614 10.8908 9.20541C10.8908 8.64829 10.9618 8.10747 11.0953 7.59143L9.62296 7.34365C9.47871 7.94096 9.40219 8.5644 9.40219 9.20541C9.40219 11.5024 10.3834 13.5742 11.9481 15.025C9.93386 14.281 8.22111 13.2369 6.92846 12.2927C5.32699 11.123 4.12678 9.93997 3.44253 9.20541C4.12707 8.47062 5.32714 7.28775 6.92846 6.11813C8.22111 5.17389 9.93393 4.12984 11.9481 3.38575L12.9358 4.49909C14.0893 3.41894 15.6385 2.7565 17.3397 2.7565C20.8956 2.7565 23.7886 5.64944 23.7886 9.20541C23.7886 12.7614 20.8956 15.6543 17.3397 15.6543ZM27.751 12.2927C26.4582 13.2369 24.7455 14.281 22.7314 15.025C24.296 13.5743 25.2772 11.5024 25.2772 9.20533C25.2772 6.90822 24.296 4.83642 22.7314 3.38567C24.7456 4.12976 26.4582 5.17382 27.751 6.11806C29.3525 7.28775 30.5527 8.47077 31.2369 9.20526C30.5524 9.9402 29.3523 11.1231 27.751 12.2927Z"
                                            fill="#A5A5A5"
                                        />
                                        <path
                                            d="M13.2356 7.95178C13.1145 8.34842 13.049 8.76918 13.049 9.20543C13.049 11.5749 14.9698 13.4958 17.3393 13.4958C19.7088 13.4958 21.6297 11.575 21.6297 9.20543C21.6297 6.8359 19.7088 4.91504 17.3393 4.91504C16.1852 4.91504 15.1383 5.3716 14.3671 6.11294L16.4834 8.49833L13.2356 7.95178Z"
                                            fill="#A5A5A5"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="item_inside d_flex a_items_center">
                            <span class="item_info__date">10.01.2020</span>
                            <div class="item_image">
                                <img src="img/temp/news_1.jpg" alt=""/>
                            </div>
                            <div class="item_info">
                                <div class="item_title">
                                    На этом месте заголовок данной новости, можно в 2 строки
                                </div>
                                <div class="item_desc">
                                    Краткий текст новости но без подробностей, который должен
                                    заинтересовать пользователя для открытия и прочтения
                                    полной новости
                                </div>
                                <div class="item_more">
                                    <svg
                                        width="35"
                                        height="19"
                                        viewBox="0 0 35 19"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M33.7557 8.4669C33.6871 8.37996 32.0397 6.31337 29.2154 4.23843C25.4413 1.46563 21.3348 0 17.3397 0C13.3448 0 9.23829 1.46563 5.46409 4.23843C2.63986 6.31329 0.99246 8.37996 0.92376 8.4669L0.339844 9.20541L0.923834 9.94399C0.992535 10.0309 2.63993 12.0976 5.46416 14.1725C9.23837 16.9453 13.3449 18.4109 17.3398 18.4109C21.3348 18.4109 25.4413 16.9453 29.2154 14.1725C32.0397 12.0976 33.6871 10.0309 33.7557 9.94399L34.3398 9.20541L33.7557 8.4669ZM17.3397 15.6543C13.7838 15.6543 10.8908 12.7614 10.8908 9.20541C10.8908 8.64829 10.9618 8.10747 11.0953 7.59143L9.62296 7.34365C9.47871 7.94096 9.40219 8.5644 9.40219 9.20541C9.40219 11.5024 10.3834 13.5742 11.9481 15.025C9.93386 14.281 8.22111 13.2369 6.92846 12.2927C5.32699 11.123 4.12678 9.93997 3.44253 9.20541C4.12707 8.47062 5.32714 7.28775 6.92846 6.11813C8.22111 5.17389 9.93393 4.12984 11.9481 3.38575L12.9358 4.49909C14.0893 3.41894 15.6385 2.7565 17.3397 2.7565C20.8956 2.7565 23.7886 5.64944 23.7886 9.20541C23.7886 12.7614 20.8956 15.6543 17.3397 15.6543ZM27.751 12.2927C26.4582 13.2369 24.7455 14.281 22.7314 15.025C24.296 13.5743 25.2772 11.5024 25.2772 9.20533C25.2772 6.90822 24.296 4.83642 22.7314 3.38567C24.7456 4.12976 26.4582 5.17382 27.751 6.11806C29.3525 7.28775 30.5527 8.47077 31.2369 9.20526C30.5524 9.9402 29.3523 11.1231 27.751 12.2927Z"
                                            fill="#A5A5A5"
                                        />
                                        <path
                                            d="M13.2356 7.95178C13.1145 8.34842 13.049 8.76918 13.049 9.20543C13.049 11.5749 14.9698 13.4958 17.3393 13.4958C19.7088 13.4958 21.6297 11.575 21.6297 9.20543C21.6297 6.8359 19.7088 4.91504 17.3393 4.91504C16.1852 4.91504 15.1383 5.3716 14.3671 6.11294L16.4834 8.49833L13.2356 7.95178Z"
                                            fill="#A5A5A5"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="news_slider_thumbnails">
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
                <div class="news_more">
                    <div class="news_more_link--wrapper">
                        <a
                            href="#"
                            class="news_more_link d_flex a_items_center j_content_center"
                        >
                  <span class="news_more_link--icon">
                    <svg
                        width="41"
                        height="34"
                        viewBox="0 0 41 34"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                          d="M10 13H31V17H33V13C33 11.8954 32.1046 11 31 11H10C8.89543 11 8 11.8954 8 13V17H10V13Z"
                          fill="black"
                      />
                      <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M15.8939 24C13.3711 24 11.2435 22.1207 10.9321 19.6172L10.8553 19L12.84 18.7531L12.9168 19.3703C13.1036 20.8724 14.3802 22 15.8939 22H25.1061C26.6198 22 27.8964 20.8724 28.0832 19.3703L28.16 18.7531C28.2845 17.7517 29.1356 17 30.1447 17H39C40.1046 17 41 17.8954 41 19V32C41 33.1046 40.1046 34 39 34H2C0.895431 34 0 33.1046 0 32V19C0 17.8954 0.89543 17 2 17H10.8553C11.8644 17 12.7155 17.7517 12.84 18.7531L10.8553 19H2L2 32H39V19H30.1447L30.0679 19.6172C29.7565 22.1207 27.6289 24 25.1061 24H15.8939Z"
                          fill="black"
                      />
                      <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M25 29H16V27H25V29ZM16 31C14.8954 31 14 30.1046 14 29V27C14 25.8954 14.8954 25 16 25H25C26.1046 25 27 25.8954 27 27V29C27 30.1046 26.1046 31 25 31H16Z"
                          fill="black"
                      />
                      <path
                          d="M12 11V7H29V11H31V6C31 5.44772 30.5523 5 30 5H11C10.4477 5 10 5.44771 10 6V11H12Z"
                          fill="black"
                      />
                      <path
                          d="M14 5V2H27V5H29V1C29 0.447715 28.5523 0 28 0H13C12.4477 0 12 0.447715 12 1V5H14Z"
                          fill="black"
                      />
                      <path
                          d="M14 2H5.51694C4.06122 2 2.81558 3.04507 2.56259 4.47864L0 19H41L38.4374 4.47864C38.1844 3.04507 36.9388 2 35.4831 2H27V4H35.4831C35.9683 4 36.3835 4.34836 36.4678 4.82621L38.6162 17H2.38384L4.53216 4.82621C4.61649 4.34836 5.0317 4 5.51694 4H14V2Z"
                          fill="black"
                      />
                    </svg>
                  </span>
                            <span class="news_more_link--txt">Все новости</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
