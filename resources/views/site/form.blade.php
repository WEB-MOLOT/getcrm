@extends('layouts.site')

@section('title')
    Форма
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
    <div class="form-page">
        <div class="container">
            <h1>Отдел продаж</h1>
            <div class="top-text">
                Для связи с отделом продаж заполните форму ниже и мы свяжемся с вами
                в ближайшее время.
            </div>
            <img src="img/form.png"/>
            <form>
                <input type="text" placeholder="Ваше имя"/>
                <input type="email" placeholder="E-mail" required/>
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
@endsection
