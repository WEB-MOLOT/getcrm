<?php
/**
 * @var \App\Models\Pages\ContactsPage $page
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

@push('js_bottom')
    <script src="/js/jquery.maskedinput.min.js"></script>
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
    <div class="contacts-page">
        <div class="container">
            <h1>{{ $page->name() }}</h1>
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
                <a href="tel:{{ $page->clearedPhone() }}">{{ $page->phone }}</a>
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
                <p>{{ $page->address }}</p>
            </div>
        </div>
        <div class="container">
            <img src="/img/contacts2.png" class="mob_image"/>
            <h2>Отправить сообщение</h2>
            <div class="form-block">
                <img src="/img/contacts2.png"/>
                <form data-url="{{ route('site.contact.email') }}" class="form_contact">
                    {{ csrf_field() }}
                    <input type="text" placeholder="Ваше имя" name="name" required/>
                    <input type="email" placeholder="E-mail" required name="mail"/>
                    <input type="text" placeholder="Телефон" required name="phone" id="phone"/>
                    <textarea placeholder="Сообщение" name="text" required></textarea>
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
                    <div class="form_result"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
