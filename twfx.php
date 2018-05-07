<?php
// Include html header
$page_title = 'Profor';
include ('includes/header.html');
?>

    <div class="container">
        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Documentation
                        <strong>TWFX</strong>
                    </h2>
                    <hr>
                    <p>Users could access the <a href="manual.pdf" target="_blank">User Manual</a> 
                        that shows the step by step on how to use the TWFX interface below.</p>
                    <p>The <a href="tech.pdf" target="_blank">Technical Documentation</a> shows the process on how the classifier is modeled.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Interface
                        <strong>TWFX</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <iframe src = "http://192.168.211.150:3838/proforApp/?showcase=0" style="border: 1px solid #AAA; width: 1100px; height: 840px;"></iframe>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    
    <!-- /.container -->

<?php
include ('includes/footer.html');
?>

