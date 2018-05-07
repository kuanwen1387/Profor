<?php
// Include html header
$page_title = 'Contact';
include ('includes/header.html');
?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Profor</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=University+of+Wollongong,+Wollongong,+New+South+Wales,+Australia&key=AIzaSyALQTDb6pUIBLV5_kaat1pEIMeQlshTme8"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>+614 9802 3035</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:profor@gmail.com">profor321@gmail.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>3 Information Sciences
                            <br>Northfields Ave, Wollongong NSW 2522</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Get
                        <strong>In Touch</strong>
                    </h2>
                    <hr>
                    <p>Profor appreciates that you are interested in us. Please fill in the form
                     and we will get back to you in 24 hours.</p>
                    <form role="form" action="form-handler-nodb.php" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" name="phone" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea name="message" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<?php
include ('includes/footer.html');
?>
