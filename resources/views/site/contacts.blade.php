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

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
