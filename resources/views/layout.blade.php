<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Resto</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo asset('css/font-awesome.css')?>">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Courgette|Quicksand" rel="stylesheet">
    <style>
        @yield('style')
    </style>
    <title>{{ config('app.name') }}</title>
</head>
<body>
<div class="container-fluid" id="app" style="padding: 0;">
    @include('nav')

    @yield('jumbo')
    @yield('content')
</div>

@yield('script')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>