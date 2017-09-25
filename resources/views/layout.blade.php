<!DOCTYPE html>
<html>
<head>
    <title>Resto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/font-awesome.css')?>">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <style>
        @yield('style')
    </style>
</head>
<body>
<div class="container-fluid" style="padding: 0;">
    @include('nav')

    @yield('jumbo')
    @yield('container')

</div>
</body>
</html>