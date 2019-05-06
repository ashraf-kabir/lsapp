<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .quotation{
        font-size: 30px;
        quotes: "\201C""\201D""\2018""\2019";
        padding: 10px 20px;
        line-height: 1.4;
    }
    .quotation:before {
        content: open-quote;
        display: inline;
        height: 0;
        line-height: 0;
        left: -10px;
        position: relative;
        top: 30px;
        color: #ccc;
        font-size: 3em;
    }
    .quotation::after {
        content: close-quote;
        display: inline;
        height: 0;
        line-height: 0;
        left: 10px;
        position: relative;
        top: 35px;
        color: #ccc;
        font-size: 3em;
    }
    #quote{
        margin:0;
        text-align: right;
        font-size: 1.5em;
        font-style: italic;
    }
</style>
<body style="padding-top: 65px">
    @include('inc.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9">
                @include('inc.messages')
                @yield('content')
            </div>
            <div class="col-md-3 col-lg-3">
                @include('inc.sidebar')
            </div>
        </div>
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright MMXIX &copy; Ashraf Kabir</p>
    </footer>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
