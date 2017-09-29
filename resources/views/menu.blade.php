@extends('layout')
@section('style')

    #jumbo {
    background: #222;

    }
    .row{
    margin:0;
    }
    .starter-head{
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

@section('container')
    <div class="starters" style="font-size: 13px; font-family: 'Quicksand', sans-serif; width: 90%;margin: auto; padding-bottom: 40px;">
        <h2 class="text-center">Starters</h2>
        <hr style="width: 40%; border-color: black;">
        <br>
        <div class="row " style="padding: 20px 0 20px 80px;color: black;">
            <div class="col-md-4" >
                <h4 class="starter-head">Lorem ipsum.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Deleniti, est!
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn" style="border-color: #6b6b6b; background-color: #32d694;">
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </button>
                &nbsp
                <select name="star1" style="padding: 8px; border-radius:5px;vertical-align: bottom;border-color: #25a371; " >
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
                <h4 class="starter-head">Dolor sit amet.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn" style="border-color: #6b6b6b; background-color: #32d694;">
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </button>
                &nbsp
                <select name="star2" style="padding: 8px; border-radius:5px;vertical-align: bottom;border-color: #196c4b; " >
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
                <h4 class="starter-head">Lorem amet.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn" style="border-color: #6b6b6b; background-color: #32d694;">
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </button>
                &nbsp
                <select name="star3" style="padding: 8px; border-radius:5px;vertical-align: bottom;border-color: #196c4b; " >
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
                <h4 class="starter-head">Lorem ipsum.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Deleniti, est!
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn" style="border-color: #6b6b6b; background-color: #32d694;">
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </button>
                &nbsp
                <select name="star1" style="padding: 8px; border-radius:5px;vertical-align: bottom;border-color: #25a371; " >
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
                <h4 class="starter-head">Dolor sit amet.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn" style="border-color: #6b6b6b; background-color: #32d694;">
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </button>
                &nbsp
                <select name="star2" style="padding: 8px; border-radius:5px;vertical-align: bottom;border-color: #196c4b; " >
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
                <h4 class="starter-head">Lorem amet.</h4>
                Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                <p style="margin: 10px 0; ">$9</p>
                <button type="button" class="btn" style="border-color: #6b6b6b; background-color: #32d694;">
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="color: white;"></i>
                </button>
                &nbsp
                <select name="star3" style="padding: 8px; border-radius:5px;vertical-align: bottom;border-color: #196c4b; " >
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
@endsection