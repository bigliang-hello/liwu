<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="wap-font-scale" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=9, IE=8;IE=7, IE=EDGE, chrome=1">
    <link  rel='stylesheet' href="{{ mix('css/app.css') }}"/>
    <title>礼物233-选择困难症的福音</title>
</head>
<body class="home blog black-top grid-hover grid-radius grid-border">
@include('common.phone_header')
@include('common.header')
@include('common.search')
@include('common.recommend')

@yield('content')

@include('common.footer')

<script src="{{ mix('js/all.js') }}"></script>
</body>
</html>
