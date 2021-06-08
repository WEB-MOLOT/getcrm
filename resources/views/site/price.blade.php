@extends('layouts.site')

@section('title')
    Расчет цен
@endsection

@section('footer')
    @include('_partials.modals')
@endsection

@push('js_bottom')
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script>
        $(document).ready(function () {
            $("#thead").sticky({topSpacing: 0});
        });
    </script>
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
    <div class="container">
        <div class="prices-page">
            <h1>Расчет цены</h1>
            <button class="upload-top-button">
                <span></span> Загрузить ваш проект
            </button>
            <div class="flex">
                <div class="top-block">
                    <p>1. Решения и услуги</p>
                    <div class="content">
                        <form>
                            <input type="text" placeholder="Поиск по разделу"/>
                            <span></span>
                        </form>
                        <div class="list">
                            <div class="tags">
                                <div
                                    class="tag c1"
                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                >
                                    Работа с сервисными обращениями <a></a>
                                </div>
                                <div
                                    class="tag c1"
                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                >
                                    Обновление профиля клиента <a></a>
                                </div>
                                <div
                                    class="tag c2"
                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                >
                                    Обращение в колл-центр <a></a>
                                </div>
                                <div
                                    class="tag"
                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                >
                                    Функционал лояльности <a></a>
                                </div>
                                <div
                                    class="tag"
                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                >
                                    Мобильное приложение <a></a>
                                </div>
                                <div
                                    class="tag c1"
                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                >
                                    Работа с сервисными обращениями <a></a>
                                </div>
                                <div
                                    class="tag c1"
                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                >
                                    Обновление профиля клиента <a></a>
                                </div>
                                <div
                                    class="tag c2"
                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                >
                                    Обращение в колл-центр <a></a>
                                </div>
                                <div
                                    class="tag"
                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                >
                                    Функционал лояльности <a></a>
                                </div>
                                <div
                                    class="tag"
                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                >
                                    Мобильное приложение <a></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-block">
                    <p>2. Платформы</p>
                    <div class="content">
                        <form>
                            <input type="text" placeholder="Поиск по разделу"/>
                            <span></span>
                        </form>
                        <div class="list">
                            <ul class="other">
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Oracle Responsys</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Oracle Eloqua</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Microsoft Dynamics CRM</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Oracle BlueKai</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Oracle Eloqua</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Oracle Responsys</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Oracle Eloqua</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Microsoft Dynamics CRM</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Oracle BlueKai</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Oracle Eloqua</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="top-block">
                    <p>3. Сервисы</p>
                    <div class="content">
                        <form>
                            <input type="text" placeholder="Поиск по разделу"/>
                            <span></span>
                        </form>
                        <div class="list">
                            <ul>
                                <li>
                                    <a href="#" class="c1"
                                    >Automatic Failover for Transactional Mes...
                                        Automatic</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Barcode Enablement</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Send Time Optimization ( STO)</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Behavioral Data Restore
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Barcode Enablement</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="c1"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Automatic Failover for Transactional Mes...</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Barcode Enablement</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Send Time Optimization ( STO)</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="c2"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Behavioral Data Restore
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    >Barcode Enablement</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-text">
                <span class="top-text__title">Behavioral Data Restore </span>
                <span
                    class="top-text__text"
                    data-default='В рамках данного сервиса Oracle привязывает 1 транзакционный
					IP-адрес (число доступных IP в аккаунте не увеличивается) к вашему
					аккаунту, выделяет отдельный домен и 1 продуктивную среду, в которой
					вы можете настроить "Транзакционные" компании, если вы
					предоставляете свой дизайн, компании будут "Бредированные". Данный
					IP Оракл отправляет в анти-спам (ISP) организации для добавления в
					список благонадежных IP, что позволяет существенно повысить
					вероятность доставки важной критически-информации.'
                >
              В рамках данного сервиса Oracle привязывает 1 транзакционный
              IP-адрес (число доступных IP в аккаунте не увеличивается) к вашему
              аккаунту, выделяет отдельный домен и 1 продуктивную среду, в
              которой вы можете настроить "Транзакционные" компании, если вы
              предоставляете свой дизайн, компании будут "Бредированные". Данный
              IP Оракл отправляет в анти-спам (ISP) организации для добавления в
              список благонадежных IP, что позволяет существенно повысить
              вероятность доставки важной критически-информации.</span
                >
            </div>
            <div class="flex">
                <div class="pre-table">
                    <span class="pre-table__title">Спецификация</span>
                    <select>
                        <option>Базовый вариант</option>
                        <option>Базовый вариант</option>
                    </select>
                    <select>
                        <option>Длительность - 1 год</option>
                        <option>Длительность - 1 год</option>
                    </select>
                </div>
                <a class="clear-link">Очистить</a>
            </div>
            <div class="table">
                <div class="table__wrap">
                    <div class="table__tabs">
                        <table class="active" data-table="1">
                            <thead id="thead2">
                            <tr>
                                <td>Наименование</td>
                                <td>Стоимость, $</td>
                                <td>Метрика</td>
                                <td>Срок метрики (мес)</td>
                                <td>Цена (US$) в год</td>
                                <td>Кол-во</td>
                                <td>Срок (год)</td>
                                <td>Прайслист, $</td>
                                <td>Скидка</td>
                                <td>Discounted Price, $</td>
                                <td>Тех.поддержка</td>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="no_b">
                                <td colspan="2">
                                    Oracle Responsys
                                    <a class="delete"><span>Удалить платформу</span></a>
                                </td>
                                <td colspan="6"></td>
                                <td>49%</td>
                                <td>59 670</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span>Responsys Interaction Cloud Service</span></td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr class="no_b2">
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr class="no_b">
                                <td colspan="2">
                                    Oracle Responsys
                                    <a class="delete"><span>Удалить платформу</span></a>
                                </td>
                                <td colspan="6"></td>
                                <td>49%</td>
                                <td>59 670</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr class="no_b2">
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr class="no_b">
                                <td colspan="2">
                                    Oracle Responsys
                                    <a class="delete"><span>Удалить платформу</span></a>
                                </td>
                                <td colspan="6"></td>
                                <td>49%</td>
                                <td>59 670</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="no_b2 bg">
                                <td>
                                    Responsys Interaction Cloud Service
                                    <div class="small-text">
                                        Рекомендовано к приобритению
                                    </div>
                                </td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table data-table="2">
                            <thead id="thead2">
                            <tr>
                                <td>Наименование</td>
                                <td>Стоимость, $</td>
                                <td>Метрика</td>
                                <td>Срок метрики (мес)</td>
                                <td>Цена (US$) в год</td>
                                <td>Кол-во</td>
                                <td>Срок (год)</td>
                                <td>Прайслист, $</td>
                                <td>Скидка</td>
                                <td>Discounted Price, $</td>
                                <td>Тех.поддержка</td>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="no_b">
                                <td colspan="2">
                                    Oracle Responsys
                                    <a class="delete"><span>Удалить платформу</span></a>
                                </td>
                                <td colspan="6"></td>
                                <td>49%</td>
                                <td>59 670</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr class="no_b2">
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr class="no_b">
                                <td colspan="2">
                                    Oracle Responsys
                                    <a class="delete"><span>Удалить платформу</span></a>
                                </td>
                                <td colspan="6"></td>
                                <td>49%</td>
                                <td>59 670</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr class="no_b2">
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr class="no_b">
                                <td colspan="2">
                                    Oracle Responsys
                                    <a class="delete"><span>Удалить платформу</span></a>
                                </td>
                                <td colspan="6"></td>
                                <td>49%</td>
                                <td>59 670</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="no_b2 bg">
                                <td>
                                    Responsys Interaction Cloud Service
                                    <div class="small-text">
                                        Рекомендовано к приобритению
                                    </div>
                                </td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table data-table="3">
                            <thead id="thead2">
                            <tr>
                                <td>Наименование</td>
                                <td>Стоимость, $</td>
                                <td>Метрика</td>
                                <td>Срок метрики (мес)</td>
                                <td>Цена (US$) в год</td>
                                <td>Кол-во</td>
                                <td>Срок (год)</td>
                                <td>Прайслист, $</td>
                                <td>Скидка</td>
                                <td>Discounted Price, $</td>
                                <td>Тех.поддержка</td>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="no_b">
                                <td colspan="2">
                                    Oracle Responsys
                                    <a class="delete"><span>Удалить платформу</span></a>
                                </td>
                                <td colspan="6"></td>
                                <td>49%</td>
                                <td>59 670</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>

                            <tr class="no_b">
                                <td colspan="2">
                                    Oracle Responsys
                                    <a class="delete"><span>Удалить платформу</span></a>
                                </td>
                                <td colspan="6"></td>
                                <td>49%</td>
                                <td>59 670</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>

                            <tr>
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            <tr class="no_b2">
                                <td>Responsys Interaction Cloud Service</td>
                                <td>3</td>
                                <td>1000 <br/>коммуниаций</td>
                                <td>12</td>
                                <td>3</td>
                                <td><input type="text" value="35000"/></td>
                                <td><input type="text" value="1"/></td>
                                <td>105 000</td>
                                <td>49%</td>
                                <td>53 550</td>
                                <td>N/A</td>
                                <td>
                                    <a class="delete"><span>Удалить сервис</span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav class="menu">
                        <a class="active" data-table="1"
                        >Базовый вариант <span>806 000 $</span></a
                        >
                        <a data-table="2">Базовый вариант <span>806 000 $</span></a>
                        <a data-table="3">Базовый вариант <span>806 000 $</span></a>
                        <a class="menu__add">+</a>
                    </nav>
                </div>
                <div class="flex">
                    <button class="save-button"><span></span> Сохранить</button>
                </div>
            </div>
            <p class="table2__title">Покупайте больше - платите меньше</p>
            <div class="table2">
                <table>
                    <thead>
                    <tr>
                        <td>Спецификации</td>
                        <td>Длительность</td>
                        <td>Стоимость в год</td>
                        <td>Всего</td>
                        <td>Скидка</td>
                        <td>
                            <span class="up"></span> Инвестиции и выгоды
                            <span class="down"></span>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Базовый вариант</td>
                        <td>1 год</td>
                        <td>30 000$</td>
                        <td>30 000$</td>
                        <td>0</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Базовый вариант</td>
                        <td>1 год</td>
                        <td>30 000$</td>
                        <td>30 000$</td>
                        <td>0</td>
                        <td>
                            <div class="prices">
                                <span>250 000$</span>
                                <span>350 000 $</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Базовый вариант</td>
                        <td>1 год</td>
                        <td>30 000$</td>
                        <td>30 000$</td>
                        <td>0</td>
                        <td>
                            <div class="prices">
                                <span>250 000$</span>
                                <span>350 000 $</span>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex">
                <div class="base-block">
                    <p>Базовый вариант</p>
                    <table>
                        <tr>
                            <td>МОДЕЛЬ ЛИЦЕНЗИРОВАНИЯ</td>
                            <td>СКИДКИ</td>
                            <td>ПОДДЕРЖКА</td>
                            <td>ЛИЦЕНЗИИ/SAAS</td>
                        </tr>
                        <tr>
                            <td>ON-PREMISE LICENSES</td>
                            <td>61%</td>
                            <td>114114</td>
                            <td>518 700</td>
                        </tr>
                        <tr>
                            <td>ON-PREMISE LICENSES</td>
                            <td>61%</td>
                            <td>114114</td>
                            <td>518 700</td>
                        </tr>
                        <tr>
                            <td>ON-PREMISE LICENSES</td>
                            <td>61%</td>
                            <td>114114</td>
                            <td>518 700</td>
                        </tr>
                        <tr>
                            <td>ИТОГО:</td>
                            <td>44%</td>
                            <td>164 274</td>
                            <td>864 274</td>
                        </tr>
                    </table>
                </div>
                <div class="att-block">
                    <span>Важно</span>
                    <p>
                        1. Продажа Siebel CRM Base требует получение Oracle CX Cloud
                        First approval перед продажей новому клиенту
                    </p>
                    <p>
                        2. Скидки носят ориентировочный характер и могут отличаться в
                        большую сторону после согласования с вендором
                    </p>
                    <p>3. Цены указаны без НДС</p>
                </div>
            </div>
            <div class="buttons">
                <button class="modal-download-prices__btn">
                    <img src="img/btn1.svg"/>Выгрузить
                </button>
                <button class="modal-connection-prices__btn">
                    <img src="img/btn2.svg"/>Связатьcя с менеджером
                </button>
            </div>
        </div>
    </div>
@endsection
