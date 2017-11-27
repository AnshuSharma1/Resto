@extends('layout')
@section('style')

    #jumbo {
    background: #222;

    }
    .row{
    margin:0;
    }
@endsection

@section('jumbo')
    <div id="jumbo" class="text-center">
        <h3 style="margin-top: 0; padding-top: 30px;color: white; font-size: 30px;letter-spacing: 7px;font-family: Candara;">
            MENU</h3>
        <hr style="width: 20%;border-color: lightgray;">
        <p style="padding: 10px 40px; color: #bebebe; letter-spacing: 2px; font-family: Cambria; font-size: 17px;">
            Something good to eat. <br> I am sure you ll love it! Bon apetit!<br>
        </p>
        <br>
        <div class="row" style="padding-bottom: 100px;">
            <div class="col-md-4" style="padding:0;"><img src="{{ asset('images/food1.jpeg') }}" alt="#"
                                                          width="100%" height="320px"></div>
            <div class="col-md-4" style="padding-right: 0;padding-left:0; "><img
                        src="{{ asset('images/food2.jpeg') }}" alt="#" width="100%" height="320px"></div>
            <div class="col-md-4" style="padding: 0;"><img src="{{ asset('images/food3.jpg') }}" alt="#"
                                                           width="100%" height="320px"></div>
        </div>
    </div>
@endsection

@section('content')
@include('footer')
    @endsection



