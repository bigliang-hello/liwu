<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="transform: none;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="wap-font-scale" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=9, IE=8;IE=7, IE=EDGE, chrome=1">
    <link  rel='stylesheet' href="{{ mix('css/app.css') }}"/>
    @yield('styles')
    <script type='text/javascript'>
        /* <![CDATA[ */
        var globals = {"ajax_url":"https:\/\/demo.nicetheme.xyz\/cosy-style1\/wp-dashboard\/dashboard-ajax.php","url_theme":"https:\/\/demo.nicetheme.xyz\/cosy-style1\/wp-content\/themes\/Cosy-2.1.0","image_popup":"gallery","new_comment_position":"asc","single":"1","post_style":"three","home":"0","page":"0","silide":"0"};
        /* ]]> */
    </script>
    <title>礼物233-选择困难症的福音</title>
</head>
<body class="{{isset($class)?$class:'home blog black-top grid-hover grid-radius grid-border'}}">
@include('common.phone_header')
@include('common.header')
@include('common.search')
@include('common.recommend')

@yield('content')

@include('common.footer')

<script src="{{ mix('js/all.js') }}"></script>
</body>
</html>
