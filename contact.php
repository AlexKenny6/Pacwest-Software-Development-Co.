<?php require_once("../resources/config.php");  ?>
<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>
<section class="top-container">
    <header class="showcase showcase-contact">
        <h1>Contact Us</h1>
    </header>
    <?php include(TEMPLATE_FRONT . DS . "side_nav.php");  ?>
</section>
<!--Boxes-->
<section class="boxes boxes-contact">
    <div class="box">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><i class="fas fa-map-marked"></i> Everett, WA, US</p>
        <p><i class="far fa-envelope"></i> <a href="mailto:contact@pacwestsoftware.com">contact@pacwestsoftware.com</a></p>
    </div>
    <div class="box">
        <form class="forming" action="//www.enformed.io/aritd6re" method="post">
            <form class="forming" action="//www.enformed.io/aritd6re" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control"  name="name" placeholder="First Last">
                </div>
                <br>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input class="form-control"  name="email" type="email" placeholder="example@example.com">
                </div>
                <br>
                <textarea class="form-control"  name="message" placeholder="Please type here..." rows="5" style="width: 75%"></textarea>
                <br>
                <button class="btn btn-default pull-right" id="submit" name="submit" type="submit" value="Finish!">Send</button>
            </form>
        </form>
    </div>
</section>
<!--Map-->
<section class="info-contact">
        <!-- Google Images -->
    <div id="googleMap" style="height:400px;"></div>
    <script>
        function myMap() {
        var myCenter = new google.maps.LatLng(47.97899, -122.20179);
        var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIfQylP37uD84k9O7cSwi0YXl0_3C_Ebk&callback=myMap"></script>
    <!-- End of Google Maps -->
</section>
<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
