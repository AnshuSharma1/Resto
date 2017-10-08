@extends('layout')
@section('style')

    #jumbo {
    background: #222;

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
    <div id="jumbo" class="text-center">
        <h3 style="margin-top: 0; padding-top: 30px;color: white; font-size: 30px;letter-spacing: 7px;font-family: Candara;">
            MENU</h3>
        <hr style="width: 20%;border-color: lightgray;">
        <p style="padding: 10px 40px; color: #bebebe; letter-spacing: 2px; font-family: Cambria; font-size: 17px;">
            Something good to eat. <br> I am sure you ll love it! Bon apetit!<br>
        </p>
        <br>
        <div class="row" style="padding-bottom: 100px;">
            <div class="col-md-4" style="padding:0;"><img src="{{ asset('storage/images/food1.jpeg') }}" alt="#"
                                                          width="100%" height="320px"></div>
            <div class="col-md-4" style="padding-right: 0;padding-left:0; "><img
                        src="{{ asset('storage/images/food2.jpeg') }}" alt="#" width="100%" height="320px"></div>
            <div class="col-md-4" style="padding: 0;"><img src="{{ asset('storage/images/food3.jpg') }}" alt="#"
                                                           width="100%" height="320px"></div>
        </div>
    </div>
@endsection

@section('content')
    <div class="starters">
        <h2 class="text-center menu-type">Starters</h2>
        <hr style="width: 40%; border-color: black;">
        <br>
        <div class="row " style="padding: 20px 0 20px 80px;color: black;">
            <div class="col-md-4">
                <h4 class="item-head">Lorem ipsum.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Deleniti, est!
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn starter-btn">
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </button>
                &nbsp
                <select name="star1"
                        style="padding: 8px; border-radius:5px;vertical-align: bottom;border-color: #196c4b; ">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <hr class="dot">
            </div>
            <div class="col-md-4">
                <h4 class="item-head">Dolor sit amet.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn starter-btn" >
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </button>
                &nbsp
                <select name="star2"
                        style="padding: 8px; border-radius:5px;vertical-align: bottom;border-color: #196c4b; ">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <hr class="dot">
            </div>
            <div class="col-md-4">
                <h4 class="item-head">Lorem amet.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn starter-btn" >
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </button>
                &nbsp
                <select name="star3"
                        style="padding: 8px; border-radius:5px;vertical-align: bottom;border-color: #196c4b; ">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <hr class="dot">
            </div>
        </div>
        <div class="row " style="padding: 20px 0 20px 80px;color: black;">
            <div class="col-md-4">
                <h4 class="item-head">Lorem ipsum.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Deleniti, est!
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn starter-btn" >
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </button>
                &nbsp
                <select name="star1"
                        style="padding: 8px; border-radius:5px;vertical-align: bottom;border-color: #196c4b; ">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <hr class="dot">
            </div>
            <div class="col-md-4">
                <h4 class="item-head">Dolor sit amet.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn starter-btn" >
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </button>
                &nbsp
                <select name="star2"
                        style="padding: 8px; border-radius:5px;vertical-align: bottom;border-color: #196c4b; ">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <hr class="dot">
            </div>
            <div class="col-md-4">
                <h4 class="item-head">Lorem amet.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn starter-btn" >
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </button>
                &nbsp
                <select name="star3"
                        style="padding: 8px; border-radius:5px;vertical-align: bottom;border-color: #196c4b; ">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <hr class="dot">
            </div>
        </div>
    </div>
    <div class="menu">
        <h2 class="text-center menu-type">Mains</h2>
        <hr style="width: 40%; border-color: black;">
        <br>
        <div class="row " style="padding: 20px 0 20px 80px;color: black;">
            <div class="col-md-4" >
                <h4 class="item-head">Lorem ipsum.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Deleniti, est!
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn mains-btn" >
                    <i class="fa fa-shopping-bag" aria-hidden="true" ></i>
                </button>
                &nbsp
                <select name="mains1" class="main-qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <hr class="dot">
            </div>
            <div class="col-md-4">
                <h4 class="item-head">Dolor sit amet.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn mains-btn" >
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </button>
                &nbsp
                <select name="mains2" class="main-qty" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <hr class="dot">
            </div>
            <div class="col-md-4">
                <h4 class="item-head">Lorem amet.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn mains-btn" >
                    <i class="fa fa-shopping-bag" aria-hidden="true" ></i>
                </button>
                &nbsp
                <select name="mains3" class="main-qty"  >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <hr class="dot">
            </div>
        </div>
        <div class="row " style="padding: 20px 0 20px 80px;color: black;">
            <div class="col-md-4" >
                <h4 class="item-head">Lorem ipsum.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Deleniti, est!
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn mains-btn">
                    <i class="fa fa-shopping-bag" aria-hidden="true" ></i>
                </button>
                &nbsp
                <select name="mains4" class="main-qty" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <hr class="dot">
            </div>
            <div class="col-md-4">
                <h4 class="item-head">Dolor sit amet.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn mains-btn" >
                    <i class="fa fa-shopping-bag" aria-hidden="true" ></i>
                </button>
                &nbsp
                <select name="mains5" class="main-qty" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <hr class="dot">
            </div>
            <div class="col-md-4">
                <h4 class="item-head">Lorem amet.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn mains-btn" >
                    <i class="fa fa-shopping-bag" aria-hidden="true" ></i>
                </button>
                &nbsp
                <select name="mains6" class="main-qty" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <hr class="dot">
            </div>
        </div>
    </div>
    @include('footer')
@endsection
