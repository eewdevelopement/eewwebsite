<html class="sb-init"> 
    <?php
    include './header.php';
    ?>
    <style>
        #home_banner
        {
            background: url('images/banner/slider-agency1.jpg') no-repeat 0 50%;
            height: 800px;
        }
        .home_title {
            background: none;
            margin-top: 200px;
        }
        @media (max-width: 860px) {
            .hl2 {
                display: none !important;
            }
            .home_title {
                margin-top: 150px;
            }
            #home_banner
            {
                height: 600px;
            }
        }
        @media (max-width: 700px) {
            .hl3 {
                display: none !important;
            }
            .home_title {
                margin-top: 100px;
            }
            #home_banner
            {
                height: 500px;
            }
        }    
        @media (max-width: 520px) {
            .hl1 {
                display: none !important;
            }
            .home_title {
                margin-top: 50px;
            }
            #home_banner
            {
                height: 420px;
            }
        }    
        @media (max-width: 350px) {
            .rfp {
                display: none !important;
            }
            #home_banner
            {
                height: 420px;
            }
        }    
    </style>    
    <body>
        <div id="header" class="clearfix">
            <div class="container" style="height: 100px;" id="header-top">
                <div class="new-year-hat">
                    <a title="Home" class="logo" href="index.php"></a>	
                </div>
                <div id="language-header" style="margin-top: 15px; color: #0861CF;">
                    <div class="phones">
                        <span>email:</span>
                        <a href="mailto:sales@eewtech.in">sales@eewtech.in</a>
                    </div>
                    <div class="request_btn">
                        <span class="btn_grey"><a href="Contact.php" title="">Calculate your project's development cost »</a></span>                
                    </div>    
                </div>
            </div>
            <div class="contr_nav_bar_bg">
                <div class="navbar navbar-inverse container" style="position: static;">
                    <div class="navbar-inner">
                        <div class="header_sep" style="float: left; margin-top: 20px; margin-right: 5px;">  
                            <a class="btn btn-navbar sb-toggle-left" style="margin: 0 0 0 10px;">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                        </div>    
                        <a href="index.php" class="logo small_displ" title="Home"></a>
                        <div class="container small">
                            <div class="rfp">
                                <a class="header_sep hl3 hlink" href="mailto:sales@eewtech.in">sales@eewtech.in</a>
                                <a href="Contact.php" class="btn btn-navbar lang" style="font-size: 17px; text-transform: uppercase;">Request a quote »</a>
                            </div>
                        </div>
                        <div class="nav-collapse collapse navbar-inverse-collapse" style="font-size: 20px;">
                            <?php
                            include './menu.php';
                            ?>
                        </div>
                    </div>
                </div>
                <div id="pcat">
                    <span class="btn_grey" style="margin: 0;"><a href="#" class="sb-toggle-right" style="margin: 0;">Select a Category</a></span>
                </div>
            </div>
        </div>
        <div id="sb-site" style="min-height: 643px;">
            <div id="text">
                <link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css">
                <style>
                    .home_title {
                        font-size: 38px;    
                    }
                </style>

                <div id="home_banner">
                    <div class="container">
                        <h1 class="home_title">ONLY THE BEST PRACTICES IN <span>WEB</span> AND <span>MOBILE</span> APPLICATIONS DEVELOPMENT<!--<span>LAMP</span>, <span>MEAN</span> & <span>MOBILE</span> DEVELOPMENT--></h1>
                        <br>
                        <br>
                        <br>
                        <p style="text-align: center;"><a href="Services.php" class="btn_transparent">Get Started Today With Developer</a></p>
                        <br>
                    </div>
                </div>

                <div class="container tech_matrix">
                    <center><h2 class="home_subtitle">TECHNOLOGY <span>EXPERTISE</span></h2></center>
                    <div class="row-fluid" style="border-bottom: 1px solid #eee;">
                        <div class="left span2 bn">
                            <img alt="" src="images/mysql.png">
                        </div>
                        <div class="left span2 bl">
                            <img alt="" src="images/html5.png">
                        </div>
                        <div class="left span2 bl">
                            <img alt="" src="images/angularjs.png">
                        </div>
                        <div class="left span2 bl">
                            <img alt="" src="images/java.png">
                        </div>
                        <div class="left span2 bl">
                            <img alt="" src="images/express.png">
                        </div>
                        <div class="right span2 bl">
                            <img alt="" src="images/mean.png">
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="left span2 bn">
                            <img alt="" src="images/php.png">
                        </div>
                        <div class="left span2 bl">
                            <img alt="" src="images/mongodb.png">
                        </div>
                        <div class="left span2 bl">
                            <img alt="" src="images/js.png">
                        </div>
                        <div class="left span2 bl">
                            <img alt="" src="images/unity.png">
                        </div>
                        <div class="left span2 bl">
                            <img alt="" src="images/swift.png">
                        </div>
                        <div class="right span2 bl">
                            <img alt="" src="images/nodejs.png">
                        </div>
                    </div>
                </div>

                <div class="container tech_carousel">
                    <center><h2 class="home_subtitle">TECHNOLOGY <span>EXPERTISE</span></h2></center>
                    <div class="list_carousel6 responsive" style="margin: 20px 0;">
                        <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1004px; height: 72px; margin: 0px; overflow: hidden;"><ul id="foo6" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 7028px; height: 72px; z-index: auto;">
                                <li style="width: 229px;"><img alt="" src="images/mysql.png"></li>
                                <li style="width: 229px;"><img alt="" src="images/aws.png"></li>
                                <li style="width: 229px;"><img alt="" src="images/wordpress.png"></li>
                                <li style="width: 229px;"><img alt="" src="images/magento.png"></li>
                                <li style="width: 229px;"><img alt="" src="images/android.png"></li>
                                <li style="width: 229px;"><img alt="" src="images/ios.png"></li>
                                <li style="width: 229px;"><img alt="" src="images/unity.png"></li>
                                <li style="width: 229px;"><img alt="" src="images/social.png"></li>
                                <li style="width: 229px;"><img alt="" src="images/js.png"></li>
                                <li style="width: 229px;"><img alt="" src="images/jquery.png"></li>
                                <li style="width: 229px;"><img alt="" src="images/php.png"></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <br>
                </div>

                <div id="home_testimonial_container">
                    <div class="container">
                        <center><h2 class="home_subtitle">CUSTOMER <span>TESTIMONIALS</span></h2></center>
                        <br>
                        <div class="testimonial_wrapper">
                            <div class="bx-wrapper" style="max-width: 100%;">
                                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 175px;">
                                    <ul class="bxslider" style="width: 860%; position: relative; transition-timing-function: ease-in-out; transition-duration: 0s; transform: translate3d(-987px, 0px, 0px);">
                                        <li style="float: left; list-style: none; position: relative; width: 987px;" class="bx-clone">
                                            <p class="cite">"We have been working with EEW  for around a year. We have found them to be extremely professional and very pleasant to work with. Communication is excellent. We always receive replies to emails within a couple of hours, and project updates are frequent. They deliver every project on time, and on budget."</p>            
                                            <p class="author"><span>Lee Barlow</span><br>Managing Director, Splash Design Studio Ltd</p>
                                        </li>
                                        <li style="float: left; list-style: none; position: relative; width: 987px;">
                                            <p class="cite">"Working with EEW  is like having your own development team in your own office. Not only is their quality of work amazing, they are creative, professional, and on time with all of their deliveries. You will never have to worry about lack of communication, as they keep their clients updated with all stages of work. Highly recommended - a pleasure to work with."</p>            
                                            <p class="author"><span>Brian Cozzy</span><br>Creative Director, Creative Cellutions</p>
                                        </li>
                                        <li style="float: left; list-style: none; position: relative; width: 987px;">
                                            <p class="cite">"I cannot express how absolutely satisfied I was working with EEW . They were extremely knowledgeable in the programming skills required for my project, and were very responsive throughout every step of the process, not to mention they were quite patient with my many questions along the way. There were even some additional technical hurdles to my project I had not considered when I first proposed the project, and EEW  was able to research and come up with very good solutions to those issues. I will ABSOLUTELY be using them again in the future. Great job guys!"</p>            
                                            <p class="author"><span>Igor Vishnevskiy</span><br>Russian Google TV</p>
                                        </li>
                                        <li style="float: left; list-style: none; position: relative; width: 987px;">
                                            <p class="cite">"I have worked with EEW  on a large and ambitions web development project for the last 3 months. I have found them to be of exceptional value during the ongoing project. They have fantastic capability within the team and seem able to come up with a solution to any technical problem. I highly recommend EEW ."</p>            
                                            <p class="author"><span>Paul Doffman</span><br>Digital Marketing Manager, Visit West Lothian</p>
                                        </li>
                                        <li style="float: left; list-style: none; position: relative; width: 987px;">
                                            <p class="cite">"We have been working with EEW  for around a year. We have found them to be extremely professional and very pleasant to work with. Communication is excellent. We always receive replies to emails within a couple of hours, and project updates are frequent. They deliver every project on time, and on budget."</p>            
                                            <p class="author"><span>Lee Barlow</span><br>Managing Director, Splash Design Studio Ltd</p>
                                        </li>
                                        <li style="float: left; list-style: none; position: relative; width: 987px;" class="bx-clone">
                                            <p class="cite">"Working with EEW  is like having your own development team in your own office. Not only is their quality of work amazing, they are creative, professional, and on time with all of their deliveries. You will never have to worry about lack of communication, as they keep their clients updated with all stages of work. Highly recommended - a pleasure to work with."</p>            
                                            <p class="author"><span>Brian Cozzy</span><br>Creative Director, Creative Cellutions</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bx-controls bx-has-pager">
                                    <div class="bx-pager bx-default-pager">
                                        <div class="bx-pager-item">
                                            <a href="http://www.eewtech.in/" data-slide-index="0" class="bx-pager-link active">1</a>
                                        </div>
                                        <div class="bx-pager-item"><a href="http://www.eewtech.in/" data-slide-index="1" class="bx-pager-link">2</a></div>
                                        <div class="bx-pager-item"><a href="http://www.eewtech.in/" data-slide-index="2" class="bx-pager-link">3</a></div>
                                        <div class="bx-pager-item"><a href="http://www.eewtech.in/" data-slide-index="3" class="bx-pager-link">4</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>    

            </div>
        </div>
        <?php
        include './footer.php';
        ?>
    </body>
</html>