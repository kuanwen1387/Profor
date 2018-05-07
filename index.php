<?php
// Include html header
$page_title = 'Home';
include ('includes/header.html');
?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">TWFX</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Profor</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Tweets
                        <strong>With ingishts</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/home1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <p>There are 313 million Twitter users in this world where there are knowledge to be discovered 
                    from the tweets of the users. Every second, on average, around 6,000 tweets are tweeted on Twitter,
                     which corresponds to over 350,000 tweets sent per minute, 500 million tweets per day and around 200 billion tweets per year.
                    Using machine learning and artificial intelligence methods, tremendous knowledge could be discovered from these tweets.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">TWFX
                        <strong>Goals</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/home2.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <p>There have been various research using tweets from Twitter to predict the stock market such as done by
                     <a href="https://www.stat.berkeley.edu/~aldous/157/Old_Projects/Sang_Chung_Sandy_Liu.pdf" target="_blank">(Chung and Liu)</a>,
                     <a href="http://cs229.stanford.edu/proj2013/HuJiaoZhu-Using%20Tweets%20to%20Predict%20the%20Stock%20Market.pdf" target="_blank">(Hu, Jiao and Zhu)</a>
                     and <a href="http://www.businessinsider.com.au/ecb-twitter-bullishness-stock-market-moves-2015-7?r=UK&IR=T" target="_blank">(Grut)</a>.
                     TWFX will focus on the foreign exchange market
                     by researching on the methods used by previous research on predicting the stock market and create a model
                     that could be used to predict the foreign exchange market.</p>
                    
                    <p>TWFX aims to predict the foreign exchange market by using the knowledge discovered from tweets around the world.
                     Various Artificial Intelligence and Machine Learning methods will be used to produce prediction models to predict
                     the trend of currencies in the foreign exchange market where the model with the best accuracy will be selected.
                     TWFX will be focused on users that are interested in the foreign exchange market.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">TWFX
                        <strong>Design</strong>
                    </h2>
                    <hr>
                    <p>TWFX will be developed using the agile methodology of Kanban due to the inherent changing nature of the project
                     where tremendous research has to be done and also data collection will use significant amount of project time.
                     The project will constantly be build with additional modules to increase the accuracy of the prediction models.</p>
                    
                    <p>Using the primary characteristic of Kanban, the Kanban board will be used to list the requirements and tasks of the project.
                     Current and future ideas for the project will be added to the dashboard to provide a backlog to prioritize tasks,
                     assign tasks to team members, tracking of progress and better work scheduling.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">TWFX
                        <strong>Environment</strong>
                    </h2>
                    <hr>
                    <p>Integrated Development Environment will be used to develop the modules that are needed for TWFX
                     and also the web browser interface that will be utilized by TWFX. GitHub will be used as the project's
                     versioning system.</p>
                    
                    <p>TWFX's initial idea is to be distributed in two form with the first one being a Client-Server architecture
                     where TWFX will be hosted by Profor. The second form is server-side-distribution where interested
                    users could host the Client-Server architecture of TWFX on their chosen server.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">TWFX
                        <strong>Benefits</strong>
                    </h2>
                    <hr>
                    <p>Users of TWFX would benefit and gain an advantage in the foreign exchange market from the accuracy
                     of the predictions on the trend of the foreign exchange market. An accurate prediction of a currency
                     will give the user that invest in the currency monetary rewards from the trend of the currency.
                    The user could be an investor that invest in the foreign exchange market or just simply a user
                     that plans to holiday in a foreign country and could plan when to purchase a certain currency.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">TWFX
                        <strong>References</strong>
                    </h2>
                    <hr>
                    <p><a href="https://www.stat.berkeley.edu/~aldous/157/Old_Projects/Sang_Chung_Sandy_Liu.pdf" target="_blank">Predicting Stock Market Fluctuations from Twitter</a></p>
                    <p><a href="http://cs229.stanford.edu/proj2013/HuJiaoZhu-Using%20Tweets%20to%20Predict%20the%20Stock%20Market.pdf" target="_blank">Using Tweets to Predict the Stock Market</a></p>
                    <p><a href="http://www.businessinsider.com.au/ecb-twitter-bullishness-stock-market-moves-2015-7?r=UK&IR=T" target="_blank">The ECB says Twitter can predict the stock market</a></p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<?php
include ('includes/footer.html');
?>
