@extends('layout')
@section('style')
    #jumbo {
    background: url("{{ asset('images/food.jpg') }}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
    }

    #intro {
    background-color: rgba(255, 136, 106, 0.05);
    }
    .reserve_item {
    margin: 30px 0;
    }
    .row{
    margin:0;
    }
    #jumbo-link{
    color: white;
    font-size:18px;
    text-decoration: none;
    letter-spacing: 10px;
    font-weight: bold;
    }
@endsection


@section('jumbo')
    <div id="jumbo" style="padding: 60px;" class="text-center">
        <div style="font-size: 40px;margin-top:40px;
         font-family: 'Abril Fatface', cursive; letter-spacing: 15px; color: white;font-weight: bold;" >
            RESTO
        </div>
        <div style="height: 23em;"></div>
        <a href="#" id="jumbo-link" style="display:block;font-size: 20px;margin-top:40px;
         font-family: Calibri; letter-spacing: 10px; color: white;font-weight: bold;" >
            ORDER ONLINE
        </a>
    </div>
@endsection

@section('content')
    <div id="intro" style="padding: 20px;">
        <h1 class="h1 text-center"
            style="font-family: Calibri; text-transform: uppercase; font-size: 30px; letter-spacing: 2px;">
            Our&nbsp Restaurant
        </h1>
        <hr style="border-color: black; width: 50%;">
        <br>
        <div class="row">
            <div class="col-md-4 col-md-offset-1"
                 style="background-color: #a94442;height: 400px;margin-right: 60px;"></div>
            <div class="col-md-4 col-md-offset-1 text-center"
                 style="font-size: larger; height: 400px; padding: 80px 0;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aliquid blanditiis corporis ducimus
                eos et eum iure minima nam necessitatibus nisi officiis quasi quibusdam quidem quod, reiciendis
                reprehenderit saepe sequi soluta. Aperiam consectetur, corporis debitis, deleniti dignissimos error eum
                in itaque modi, nulla provident qui reiciendis sequi veritatis voluptatum?
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 col-md-offset-1 text-center"
                 style="font-size: larger; height: 400px; padding: 80px 0; margin-right: 60px;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aliquid blanditiis corporis ducimus
                eos et eum iure minima nam necessitatibus nisi officiis quasi quibusdam quidem quod, reiciendis
                reprehenderit saepe sequi soluta. Aperiam consectetur, corporis debitis, deleniti dignissimos error eum
                in itaque modi, nulla provident qui reiciendis sequi veritatis voluptatum?
            </div>
            <div class="col-md-4 col-md-offset-1" style="background-color: salmon;height: 400px;"></div>
        </div>
        <br>
        <blockquote class="text-center" style="font-size: 20px;margin-top: 50px; font-family: Consolas;">
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit."
        </blockquote>
    </div>
    <div class="services text-center" style="padding: 30px; background-color: #2ab27b; color: white;">
        <h1 class="text-center"
            style="color: #ffffff;font-family: Calibri; text-transform: uppercase; font-size: 30px; letter-spacing: 2px;">
            Our Services</h1>
        <hr style="border-color: whitesmoke; width: 60%;">
        <br>
        <div class="row" style="padding: 0 4%;">
            <div class="col-md-4">
                <div style="border: solid 1px #196c4b;padding: 30px;">
                    <i class="fa fa-truck" aria-hidden="true" style="font-size:50px; margin-bottom: 20px; "></i>
                    <div style="margin: 10px;font-family: Calibri;font-size: 17px;">Lorem ipsum dolor sit amet,
                        consectetur adipisicing
                        elit. Dignissimos, laudantium.
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div style="border: solid 1px #196c4b;padding: 30px;">
                    <i class="fa fa-cutlery" aria-hidden="true" style="font-size:50px;margin-bottom: 20px; "></i>
                    <div style="margin: 10px;font-family: Calibri;font-size: 17px;">Lorem ipsum dolor sit amet,
                        consectetur adipisicing
                        elit. Dignissimos, laudantium.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div style="border: solid 1px #196c4b;padding: 30px;">
                    <i class="fa fa-user-o" aria-hidden="true" style="font-size:50px;margin-bottom: 20px; "></i>
                    <div style="margin: 10px;font-family: Calibri;font-size: 17px;">Lorem ipsum dolor sit amet,
                        consectetur adipisicing
                        elit. Dignissimos, laudantium.
                    </div>
                </div>
            </div>
        </div>
        <p style="font-size: 22px; font-family: Calibri;padding: 40px;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            <br>Assumenda dicta eaque eos fugiat numquam odio
            perferendis quas tempora, ullam veritatis.
        </p>
        <hr style="width: 90%;">
    </div>
    <div class="feedback">
        <br>
        <h3 class="h3 text-center"
            style="font-family: Forte;font-weight: 100; text-transform: uppercase; font-size: 30px; letter-spacing: 2px;">
            Feedback</h3>
        <hr style="width: 50%; border-color: black;">
        <div class="row" style="padding:4% 4% 0 4%;">
            <div class="card col-md-4 text-center">
                <img class="card-img-top img-circle" width="60%" src="{{ asset('images/Ninja-icon.png') }}"
                     alt="Card image cap">
                <div class="card-block">
                    <h3 class="card-title" style="color: black;">Lorem ipsum.</h3>
                    <p class="card-text" style="padding: 10px 40px; font-size: larger; font-style: italic;">" Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur
                        debitis eligendi laudantium provident saepe. "</p>
                </div>
            </div>
            <div class="card col-md-4 text-center">
                <img class="card-img-top img-circle" width="60%" src="{{ asset('images/unnamed.png') }}"
                     alt="Card image cap">
                <div class="card-block">
                    <h3 class="card-title" style="color: black;">Lorem ipsum.</h3>
                    <p class="card-text" style="padding: 10px 40px; font-size: larger; font-style: italic;">" Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur. "</p>
                </div>
            </div>
            <div class="card col-md-4 text-center">
                <img class="card-img-top img-circle" width="60%" src="{{ asset('images/male3-512.png') }}"
                     alt="Card image cap">
                <div class="card-block">
                    <h3 class="card-title" style="color: black;">Lorem ipsum.</h3>
                    <p class="card-text" style="padding: 10px 40px; font-size: larger; font-style: italic;">" Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur
                        debitis eligendi laudantium. "</p>
                </div>
            </div>
        </div>
        <p style="text-align: center; margin-bottom: 20px;">
            <img src="{{ asset('images/myimage.png') }}" alt="heart" style="width: 30px; margin-bottom: 10px;">
            <br>
            <span style="font-weight: bold; letter-spacing: 3px; font-size: larger;">WITH LOVE !</span>
        </p>
    </div>

    @include('footer')
@endsection