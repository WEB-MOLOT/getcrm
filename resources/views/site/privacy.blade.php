@extends('layouts.site')

@section('title')
    Политика конфиденциальности
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

@endsection
