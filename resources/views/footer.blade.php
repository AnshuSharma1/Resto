<div class="footer" style="background-color: #222;color: white;">
    <div class="row" style="margin: 0; padding: 20px 60px 20px 75px;">
        <h3 style="border-color: whitesmoke;">CONNECT WITH US</h3>
        <hr style="width: 94%; margin-left:0; ">
    </div>
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
                        <br>Lorem ipsum dolor sit amet, consectetur adipisicing.
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
            <div id="googleMap" style="width:85%;height:350px;"></div>
        </div>
    </div>
</div>
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
