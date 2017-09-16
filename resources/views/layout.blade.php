<!DOCTYPE html>
<html>
<head>
    <title>Resto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/font-awesome.css')?>">
    <style>
        #jumbo {
            background: #606c88; /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #3f4c6b, #606c88); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        #intro {
            background-color: rgba(255, 136, 106, 0.05);
        }

        .reserve_item {
            margin: 30px 0;
        }
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