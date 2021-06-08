@extends('layouts.site')

@section('title')
    Лендинг
@endsection

@section('footer')

@endsection

@push('js_bottom')
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/jquery.sticky.js"></script>
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
