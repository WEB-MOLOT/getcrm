@extends('layouts.site')

@section('title')
    Контакты
@endsection

@section('footer')
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
    <div class="contacts-page">
        <div class="container">
            <h1>Контакты</h1>
        </div>
        <div class="map-block">
            <div class="map">
                <script
                    type="text/javascript"
                    charset="utf-8"
                    async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5780bb15fbff7353b24aca2bb7e12635590f22b7325f52ee08f9d2e808f5671c&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"
                ></script>
            </div>
            <div class="contacts">
                <img src="/img/contacts.png" class="image"/>
                <a href="tel:+74957254376">+7 (495) 725 43 76</a>
                <div class="hours">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="other"></span>
                    <span class="other"></span>
                    пн-пт с 9:00 до 18:00
                </div>
                <p>109544, г. Москва ул. Бульвар Энтузиастов, д.2</p>
            </div>
        </div>
        <div class="container">
            <img src="/img/contacts2.png" class="mob_image"/>
            <h2>Отправить сообщение</h2>
            <div class="form-block">
                <img src="/img/contacts2.png"/>
                <form>
                    <input type="text" placeholder="Ваше имя" required/>
                    <input type="email" placeholder="E-mail" required id="mail"/>
                    <input type="text" placeholder="Телефон" required id="phone"/>
                    <textarea placeholder="Сообщение" required></textarea>
                    <div class="agree">
                        <input type="checkbox" class="checkbox" id="agree"/><label
                            for="agree"
                        >Согласие с политикой обработки
                            <a href="#">персональных данных</a></label
                        >
                    </div>
                    <div class="button disabled">
                        <button>отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
