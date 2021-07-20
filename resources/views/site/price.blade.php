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
            <livewire:calculator/>
        </div>
    </div>
@endsection
