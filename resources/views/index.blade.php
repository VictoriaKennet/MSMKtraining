<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
		<link href="/css/croppie.css" rel="stylesheet">
		<link href="/css/jquery.arcticmodal.css" rel="stylesheet">
		<link href="/css/modal.css" rel="stylesheet">

        <title>MSMK Training</title>
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/croppie.min.js') }}"></script>
        <script src="{{ asset('js/jquery.arcticmodal.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
