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
    #rules{
    padding:30px;
    color:#555;
    }
@endsection

@section('jumbo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (Request::isMethod('post'))
        <h3 class="text-center alert alert-success">
           {{ $done }}
        </h3>
@endif
    <div id="jumbo">
        <div id="jumbo" style="padding: 60px;" class="text-center">
            <div style="margin-top:40px; color: white;">
            <span style="font-size: 40px; font-family: 'Abril Fatface', cursive; letter-spacing: 15px;font-weight: bold;">
                RESERVATIONS
            </span>
            <div style="font-size: 23px; letter-spacing: 5px; text-transform: uppercase; margin-top: 30px; font-weight: bold;">
                Book A Table
            </div>
            </div>
            <div style="height: 27em;"></div>

        </div>
    </div>
@endsection

@section('content')
    <div class="row text-center" id="rules" >
        <h3>RULES AND REGULATIONS</h3>
        <hr style="width: 50%; margin: auto;border-color: #696969;">
        <div style="margin-top: 20px; padding: 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Animi beatae, doloremque dolores ducimus eligendi
            fuga odit perferendis sapiente temporibus tenetur!
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, voluptate.
            <hr style="border-color: #555555; width: 30%;">
            Lorem ipsum dolor sit amet, consectetur adipisicing.
            <br>
            <hr style="border-color: #555555; width: 10%;">
            Lorem ipsum dolor sit amet, consectetur adipisicing.
        </div>
    </div>
    <form action="#" style="width: 70%; margin: auto;margin-bottom: 60px;" class="text-center" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="name" placeholder="Your Name" class="form-control" required>
            </div>
            <div class="col-md-4">
                <input type="email" name="email" placeholder="Your Email" class="form-control" required>
            </div>
            <div class="col-md-4">
                <select name="place" class="form-control">
                    <option value="place 1">Someplace</option>
                    <option value="place 2">2</option>
                </select>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;margin-bottom: 40px;">
            <div class="col-md-4">
                <input type="time" name="time_slot" placeholder="Time" class="form-control" value="20:30" >
            </div>
            <div class="col-md-4">
                <input type="Date" name="res_date" placeholder="Date (mm-dd-yyyy)" class="form-control" required>
            </div>
            <div class="col-md-4">
                <select name="no_of_people" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;margin-bottom: 40px;">
            <div class="col-md-4 col-md-offset-4">
                <input type="number" name="phone" placeholder="Your Phone Number" class="form-control" required>
            </div>
        </div>
        <button class="btn btn-primary" style="padding: 10px 40px;">BOOK A TABLE</button>
    </form>
    @include('footer')
@endsection
