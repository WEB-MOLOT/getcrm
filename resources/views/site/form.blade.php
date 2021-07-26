<?php
/**
 * @var \App\Models\Page $page
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
            $("#phone").mask("+7 (999) 999 99 99");
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
    <div class="form-page">
        <div class="container">
            <h1>Отдел продаж</h1>
            <div class="top-text">
                Для связи с отделом продаж заполните форму ниже и мы свяжемся с вами
                в ближайшее время.
            </div>
            <img src="/img/form.png"/>
            <form data-url="{{ route('site.sale.email') }}" class="form_contact">
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
@endsection
