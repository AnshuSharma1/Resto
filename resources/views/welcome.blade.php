@extends('layout')
@section('style')
    #jumbo {
    background: url("{{ asset('storage/images/food.jpeg') }}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }

    #intro {
    background-color: rgba(255, 136, 106, 0.05);
    }

    .reserve_item {
    margin: 30px 0;
    }
@endsection


@section('jumbo')
    <div style="padding: 20px;color: #dcdcdc;" id="jumbo">
        <div class="row" style="margin: 0;">
            <div class="col-md-4 panel text-center" style="background-color: #292929; ">
                <div class="panel-heading" style="font-size:22px; letter-spacing: 1px; margin: 10px 0;">Make A
                    Reservation
                </div>
                <p style="font-size: 14px; letter-spacing: 1px;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id inventore nesciunt possimus quasi.
                    Alias error hic provident quae quisquam vel voluptatum!
                </p>
                <div style="padding: 10px 40px 5px 40px;">
                    <div class="reserve_item">
                        <label for="date_reserv" class="hidden"></label>
                        <input type="date" id="date_reserv"
                               style="background-color: #292929; border-color: white; border-radius: 5px; padding: 5px; color: white;"
                               class=" form-control">
                    </div>
                    <div class="reserve_item">
                        <label for="time_reserve" class="hidden"></label>
                        <select name="time_reserve" id="time_reserve" class="form-control"
                                style="background-color: #292929; border-color: white; border-radius: 5px; padding: 5px; color: white;">
                            <option value="1">1 PM</option>
                            <option value="2">2 PM</option>
                            <option value="3">3 PM</option>
                            <option value="4">4 PM</option>
                            <option value="5">5 PM</option>
                            <option value="6">6 PM</option>
                            <option value="7">7 PM</option>
                            <option value="8">8 PM</option>
                            <option value="9">9 PM</option>
                            <option value="10">10 PM</option>
                        </select>
                    </div>
                    <div class="reserve_item">
                        <label for="number_reserve" class="hidden"></label>
                        <select id="number_reserve"
                                style="background-color: #292929; border-color: white; border-radius: 5px; padding: 5px; color: white;"
                                class=" form-control">
                            <option value="Party Size" class="disabled">Party Size</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <hr style="margin: 10px 0;">
                <div class="row" style="padding: 20px;">
                    <div class="col-md-3"><a href="#"><img src="#" alt="#"></a></div>
                    <div class="col-md-3"><a href="#"><img src="#" alt="#"></a></div>
                    <div class="col-md-3"><a href="#"><img src="#" alt="#"></a></div>
                    <div class="col-md-3"><a href="#"><img src="#" alt="#"></a></div>
                </div>
                <p>
                    C-XYZ , Some Street, Some Place, Some City , something something - 226xyz
                </p>
                <br>
            </div>
            <div class="col-md-8 text-center" style="color: black;">
                <div style="font-size: 40px;text-transform: uppercase; font-family: 'Abril Fatface', cursive; letter-spacing: 5px; color: white;font-weight: bold;">
                    About Resto
                </div>
                <hr style="width: 80%; margin:10px auto;">
                <p style="padding: 30px; margin: 80px; opacity: 0.9; font-size: 20px; font-family: Calibri; background-color: whitesmoke;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus aut culpa cum delectus
                    doloribus dolorum ducimus error et exercitationem in iure molestias, mollitia natus quidem quod quos
                    ratione reiciendis saepe sint unde velit vitae. Assumenda cupiditate error libero molestias placeat
                    quaerat quis. Alias dolores nobis optio quas quidem quod.
                </p>
                <button class="btn btn-primary"
                        style="padding:10px 40px; font-size: larger; background-color: #efefef;color: black;border-color: black;border-width:1px; ">
                    ORDER ONLINE
                </button>
            </div>
        </div>
    </div>
@endsection

@section('container')
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
        <div class="row">
            <div class="col-md-4 col-md-offset-1"
                 style="background-color: palevioletred;height: 400px;margin-right: 60px;"></div>
            <div class="col-md-4 col-md-offset-1 text-center"
                 style="font-size: larger; height: 400px; padding: 80px 0;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aliquid blanditiis corporis ducimus
                eos et eum iure minima nam necessitatibus nisi officiis quasi quibusdam quidem quod, reiciendis
                reprehenderit saepe sequi soluta. Aperiam consectetur, corporis debitis, deleniti dignissimos error eum
                in itaque modi, nulla provident qui reiciendis sequi veritatis voluptatum?
            </div>
        </div>
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
        <div class="row" style="padding:4%;">
            <div class="card col-md-4 text-center">
                <img class="card-img-top img-circle" width="60%" src="{{ asset('storage/images/Ninja-icon.png') }}"
                     alt="Card image cap">
                <div class="card-block">
                    <h3 class="card-title" style="color: black;">Lorem ipsum.</h3>
                    <p class="card-text" style="padding: 10px 40px; font-size: larger; font-style: italic;">" Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur
                        debitis eligendi laudantium provident saepe. "</p>
                </div>
            </div>
            <div class="card col-md-4 text-center">
                <img class="card-img-top img-circle" width="60%" src="{{ asset('storage/images/unnamed.png') }}"
                     alt="Card image cap">
                <div class="card-block">
                    <h3 class="card-title" style="color: black;">Lorem ipsum.</h3>
                    <p class="card-text" style="padding: 10px 40px; font-size: larger; font-style: italic;">" Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur. "</p>
                </div>
            </div>
            <div class="card col-md-4 text-center">
                <img class="card-img-top img-circle" width="60%" src="{{ asset('storage/images/male3-512.png') }}"
                     alt="Card image cap">
                <div class="card-block">
                    <h3 class="card-title" style="color: black;">Lorem ipsum.</h3>
                    <p class="card-text" style="padding: 10px 40px; font-size: larger; font-style: italic;">" Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur
                        debitis eligendi laudantium. "</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer" style="background-color: rgb(31,31,31);color: white;">
        <div class="row" style="margin: 0;padding: 30px;">
            <div class="col-md-6" style="padding: 0 30px;">
                <div class="row" style="color: white;">
                    <div class="col-md-2"><a href="#"><img src="{{ asset('storage/images/facebook.png') }}" alt="Facebook"
                                                           width="60%"></a></div>
                    <div class="col-md-2"><a href="#"><img src="{{ asset('storage/images/instagram.png') }}" alt="Instagram"
                                                           width="60%"></a></div>
                    <div class="col-md-2"><a href="#"><img src="{{ asset('storage/images/twitter.png') }}" alt="Twitter"
                                                           width="60%" style="background-color: inherit;"></a></div>
                    <div class="col-md-2"><a href="#"><img src="{{ asset('storage/images/google.png') }}" alt="Google Plus"
                                                           width="60%" style="background-color: inherit;"></a></div>
                    <div class="col-md-4"></div>
                </div>
                <br>
                <div class="row">
                    <div style="padding: 0 15px;">
                        <h3>ADDRESS</h3>
                        <p style="padding:10px 0;">
                            C-XYZ , Some Street, Some Place, Some City ,
                            <br>something something - 226xyz
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3 style="font-size: 20px;">CONTACT US</h3>
                        info@mysite.com
                        <br>
                        Tel: 123-456-7890
                    </div>
                    <div class="col-md-6">
                        <h3 style="font-size: 20px;">HOURS</h3>
                        OPEN DAILY
                        <br>
                        10AM-8PM
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="googleMap" style="width:100%;height:400px;"></div>

                <script>
                    function myMap() {
                        var mapProp= {
                            center:new google.maps.LatLng(23.1781761,80.0232782),
                            zoom:5,
                        };
                        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKQWJQu-2na3P9giryYcmHVdoVHMueJIA&callback=myMap"></script>
            </div>
        </div>
    </div>
@endsection