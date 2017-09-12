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
    <nav class="navbar navbar-inverse" style="border-radius: 0; padding: 0 15px ;margin: 0; font-size: larger;">
        <div class="navbar-header">
            <div class="navbar-brand"
                 style="padding-left: 0; text-transform: uppercase; letter-spacing: 3px; font-size: 20px;">
                Resto
            </div>
        </div>
        <ul class="nav navbar-nav navbar-right" style="letter-spacing: 1px;">
            <li>
                <a href="#" class="navbar-item">Home</a>
            </li>
            <li>
                <a href="#" class="navbar-item">About</a>
            </li>
            <li>
                <a href="#" class="navbar-item">Login</a>
            </li>
        </ul>
    </nav>
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
            <div class="col-md-8 text-center" style="color: #ffffff;">
                <div style="font-size: 30px;text-transform: uppercase; font-family: Aparajita; letter-spacing: 3px;">
                    About Resto
                </div>
                <hr style="width: 80%; margin:10px auto;">
                <p style="padding: 100px;font-size: 20px; font-family: Calibri;">
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
    <div id="intro" style="padding: 20px;">
        <h1 class="h1 text-center"
            style="font-family: Calibri; text-transform: uppercase; font-size: 30px; letter-spacing: 2px;">
            Our&nbsp Restaurant
        </h1>
        <hr style="border-color: black; width: 50%;">
        <br>
        <div class="row">
            <div class="col-md-4 col-md-offset-1" style="background-color: #a94442;height: 400px;"></div>
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
                 style="font-size: larger; height: 400px; padding: 80px 0;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aliquid blanditiis corporis ducimus
                eos et eum iure minima nam necessitatibus nisi officiis quasi quibusdam quidem quod, reiciendis
                reprehenderit saepe sequi soluta. Aperiam consectetur, corporis debitis, deleniti dignissimos error eum
                in itaque modi, nulla provident qui reiciendis sequi veritatis voluptatum?
            </div>
            <div class="col-md-4 col-md-offset-1" style="background-color: salmon;height: 400px;"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 col-md-offset-1" style="background-color: palevioletred;height: 400px;"></div>
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
</div>
</body>
</html>