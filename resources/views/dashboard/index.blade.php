<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="wap-font-scale" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=9, IE=8;IE=7, IE=EDGE, chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link  rel='stylesheet' href="{{ mix('css/app.css') }}"/>
    <style>
    </style>
    <title>{{config('app.name')}}</title>
</head>
<body>
<div>233</div>
    <div id="app"></div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
