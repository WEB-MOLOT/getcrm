<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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
    <title>
        @hasSection('title')
            @yield('title')
        @else
            {{ config('app.name', 'Laravel') }}
        @endif
    </title>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>


@yield('footer')
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

</html>
