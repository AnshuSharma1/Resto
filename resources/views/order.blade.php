@extends('layout')
@section('style')
    #jumbo {
    background: url("{{ asset('storage/images/food12.jpeg') }}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
    opacity:0.9;
    }
    .row{
    margin:0;
    }
    #rules{
    padding:30px;
    color:#555;
    }
@endsection

@section('jumbo')
    <div id="jumbo">
        <div id="jumbo" style="padding: 60px;" class="text-center">
            <div style="margin-top:40px; color: white;">
            <span style="font-size: 40px; font-family: 'Abril Fatface', cursive; letter-spacing: 15px;font-weight: bold;">
                ORDER ONLINE
            </span>
                <div style="font-size: 23px; letter-spacing: 5px; text-transform: uppercase; margin-top: 30px; font-weight: bold;">
                    Lorem ipsum dolor.
                </div>
            </div>
            <div style="height: 27em;"></div>

        </div>
    </div>
@endsection

@section('content')
    @include('footer')
@endsection
