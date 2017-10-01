@extends('layout')
@section('style')
    #jumbo {
    background: url("{{ asset('storage/images/pot.jpg') }}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
    }
    .down-arrow{
    border: 1px solid #ffffff;
    border-radius: 50%;
    display: inline-block;
    top:50%;
    text-decoration:none;
    background-color:transparent;
    }
    .row{
    margin:0;
    }
    
@endsection

@section('jumbo')
<div id="jumbo">
    <div id="jumbo" style="padding: 60px;" class="text-center">
        <div style="margin-top:40px; color: white;">
            <span style="font-size: 30px; font-family: 'Abril Fatface', cursive; letter-spacing: 15px;font-weight: bold;">
                CONTACT US
            </span>
        </div>
        <div style="height: 26em;"></div>
        <a href="#" class="down-arrow" >
            <i class="fa fa-angle-down" aria-hidden="true" style="height: 50px; width: 50px;color: white; font-size: 50px;"></i>
        </a>
    </div>
</div>

@endsection

@section('container')
    <div class="gmap row text-center" style="color: black; margin-bottom: 5em;">
        <h2 style="margin: 40px 0 20px 0;">OUR &nbspLOCATION</h2>
        <hr style="width: 30%; border-color: black; margin-bottom: 5em;">
        <div style="width: 60%; margin:  auto;" >
            <div id="googleMap" style="width:100%;height:450px;"></div>
        </div>
    </div>
    <div class="reach row text-center" style="color: black;">
        <h2 style="margin: 40px 0 20px 0;">OPENING HOURS & RESERVATIONS</h2>
        <hr style="width: 40%; border-color: black; margin-bottom: 4em;">
        <div style="width: 60%; margin:  auto;" >
            <h4 style="font-size: 19px;">LUNCH SERVICE</h4>
            <p style="margin-bottom: 30px;">Lorem ipsum dolor sit:  Bookings from X pm – Y pm</p>
            <h4 style="font-size: 19px;">DINNER SERVICE</h4>
            <p>Daily: Bookings from X pm – Y pm</p>
            <hr style="width: 5%; border-color: #7e7e7e; border-width: 3px; margin: 50px auto;">
            <p style="font-size: larger; font-style: italic;">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
            <hr style="width: 5%; border-color: #7e7e7e; border-width: 3px; margin: 40px auto;">
            <p style="font-size: larger; font-style: italic;">
                Please note we take bookings up to Z months in advance only.
            </p>
        </div>
        <a href="#" class="btn" style="background-color: white; border-color: black; padding: 7px 30px; color: black;margin: 50px auto;">
            Book A Table
        </a>
    </div>

@endsection

@section('script')
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
@endsection