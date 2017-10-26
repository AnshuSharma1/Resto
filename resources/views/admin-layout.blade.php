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
        .nav-ul li a{
            background-color: white;
            color: black;
            text-transform: uppercase;
            letter-spacing:2px;
            font-size:15px;
        }
        @yield('style')
    </style>
    <title>{{ config('app.name') }}</title>
</head>
<body>
<div class="container-fluid" id="app" style="padding: 0;">
    @include('nav')

    <div class="container" style="padding: 30px;">
        <div class="row">
            <div class="panel panel-default col-md-12">
                <div class="panel-heading" style="padding: 30px;">ADMIN Dashboard</div>
                <div class="panel-body" style="padding: 30px;">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <nav role="navigation">
                        <ul class="nav nav-pills text-center nav-ul">
                            <li role="presentation" class="col-md-2"><a href="/admin">Home</a></li>
                            <li role="presentation" class="col-md-2 "><a href="/admin/menu">Menu</a></li>
                            <li role="presentation" class="col-md-2"><a href="#">Orders</a></li>
                            <li role="presentation" class="col-md-3"><a href="/admin/reservations">Reservations</a></li>
                            <li role="presentation" class="col-md-2"><a href="/admin/users">Users</a></li>
                        </ul>
                        <hr style="margin-top: 20px;border-color: #ababab;">
                    </nav>

                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

@yield('script')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>