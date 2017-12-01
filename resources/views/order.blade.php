@extends('layout')
@section('style')
    #jumbo {
    background: url("{{ asset('images/food12.jpeg') }}") no-repeat center center fixed;
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
    .item-head{
    margin-bottom: 15px;
    }
    .dot{
    border:none;
    border-top: 1.5px dotted #A8A8A8;
    color:#fff;
    height:1px;
    width:70%;
    margin-left:0;
    margin-top:60px;
    }
    .menu-type{
    color:black;
    text-transform: uppercase;
    letter-spacing:3px;
    padding-top:10px;
    }
    .mains-btn{
    border-color: #A84045;
    background-color: #d15055;
    }
    .mains-btn i{
    color:white;
    }
    .starter-btn{
    border-color: #6b6b6b;
    background-color: #32d694;
    }
    .main-qty{
    padding: 8px;
    border-radius:5px;
    vertical-align: bottom;
    border-color: #801220;
    }
    .menu{
    font-size: 13px;
    font-family: 'Quicksand', sans-serif;
    width: 90%;
    margin: auto;
    padding-bottom: 40px;
    }
    .starters{
    font-size: 13px;
    font-family: 'Quicksand', sans-serif;
    width: 90%;
    margin: auto;
    padding-top:20px;
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
    <div class="starters">
        <h2 class="text-center menu-type">Starters</h2>
        <hr style="width: 40%; border-color: black;">
        <br>
        <div class="row " style="padding: 20px 0 20px 80px;color: black;">
            @foreach($items as $item)
                @if (($item->category)== 'starter')
            <div class="col-md-4">
                <h4 class="item-head">{{ $item->name }}</h4>
                {{ $item->description }}
                <p style="margin: 10px 0; ">Rs. {{ $item->price }}</p>
                <a href="{{route('cart.edit',$item->id)}}" type="button" class="btn starter-btn">
                    <span style="color: white;font-weight: bold;">Add to cart &nbsp</span>
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </a>
                <br>
                <hr class="dot">
            </div>
               @endif
             @endforeach
        </div>
    </div>
    {{--<div class="menu">
        <h2 class="text-center menu-type">Mains</h2>
        <hr style="width: 40%; border-color: black;">
        <br>
        <div class="row " style="padding: 20px 0 20px 80px;color: black;">
            @foreach($items as $item)
                @if (($item->category)== 'maincourse')
            <div class="col-md-4" >
                <h4 class="item-head">{{ $item->name }}</h4>
                {{ $item->description }}
                <p style="margin: 10px 0; ">{{ $item->price }}</p>
                <button type="button" class="btn mains-btn" >
                    <i class="fa fa-shopping-bag" aria-hidden="true" ></i>
                </button>
                &nbsp
                <br>
                <hr class="dot">
            </div>
                @endif
             @endforeach
        </div>
    </div>--}}
    @include('footer')
@endsection
