<?php
/**
 * @var \App\Models\SeoData $seo
 */
?>
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    @if(config('site.noindex') || ($seo->disable_index ?? false))
        <meta name="robots" content="noindex, nofollow"/>
    @endif

    @hasSection('keywords')
        <meta name="keywords" content="@yield('keywords')"/>
    @else
        <meta name="keywords" content="{{ $seo->keywords ?? config('site.keywords') }}"/>
    @endif

    @hasSection('description')
        <meta name="description" content="@yield('description')"/>
    @else
        <meta name="description" content="{{ $seo->description ?? config('site.description') }}"/>
    @endif

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link type="text/css" media="all" rel="stylesheet" href="/css/slick.css"/>
    <link
        type="text/css"
        media="all"
        rel="stylesheet"
        href="/css/jquery-ui.min.css"
    />
    <link
        type="text/css"
        media="all"
        rel="stylesheet"
        href="/css/jquery-ui-slider-pips.min.css"
    />
    <link type="text/css" media="all" rel="stylesheet" href="/css/xzoom.css"/>
    <link
        type="text/css"
        media="all"
        rel="stylesheet"
        href="/css/OverlayScrollbars.min.css"
    />
    <link
        type="text/css"
        media="all"
        rel="stylesheet"
        href="/css/os-theme-round-light.css"
    />
    <link
        type="text/css"
        media="all"
        rel="stylesheet"
        href="/css/style.css?v6"
    />
    <link type="text/css" media="all" rel="stylesheet" href="/css/new.css?v6"/>
    <link
        type="text/css"
        media="all"
        rel="stylesheet"
        href="/css/landing.css?v6"
    />

    @stack('css')

    <link type="text/css" media="all" rel="stylesheet" href="/css/abc.css?v2"/>

    <title>
        @hasSection('title')
            @yield('title') |
        @endif

        {{ config('site.title') }}
    </title>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <![endif]-->
    {!! config('site.code.head') !!}
    @livewireStyles
</head>

<body>
@if (session()->has('warning'))
    <div class="alert alert-warning alert-top">
        {{ session('warning') }}
    </div>
@endif

<div class="wrapper">
    @yield('before_content')
    @yield('content')
    @yield('after_content')
</div>

@yield('footer')
@livewireScripts
</body>
<div id="overlay_megamenu"></div>
<div id="overlay_mobile"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
    integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
    crossorigin="anonymous"
></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui-slider-pips.min.js"></script>
<script type="text/javascript" src="/js/xzoom.min.js"></script>
<script
    type="text/javascript"
    src="/js/jquery.overlayScrollbars.min.js"
></script>
<script type="text/javascript" src="/js/main.js?v6"></script>

@stack('js_bottom')

{!! config('site.code.footer') !!}

</html>
