<!DOCTYPE html>
<html class="sb-init">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include './header.php'; ?>
    </head>
    <body>
        <style>
            #home_banner
            {
                background: url('/slider/slider-agency1.jpg') no-repeat 0 50%;
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
        <div id="header" class="clearfix">
            <div class="container" style="height: 100px;" id="header-top">
                <div class="new-year-hat">
                    <!--div class="santa-hat">
                            <img alt="" src="http://www.stableflow.com/images/santa-hat.png" />
                    </div>
                    <div class="snow snow-one">
                            <img alt="" src="http://www.stableflow.com/images/snow.png" />
                    </div>
                    <div class="snow snow-two">
                            <img alt="" src="http://www.stableflow.com/images/snow.png" />
                    </div>
                    <div class="snow snow-three">
                            <img alt="" src="http://www.stableflow.com/images/snow.png" />
                    </div-->
                    <a title="Home" class="logo" href=""></a>	
                </div>

                <div id="language-header" style="margin-top: 15px; color: #0861CF;">
                    <div class="phones">
                        <!--
                        <span>us:</span>
                        <a href="tel:+17183953674">+1 718 395 3674</a>
                        <span>uk:</span>
                        <a href="tel:+4402081448618">+44 020 8144 8618</a>
                        -->
                        <span>email:</span>
                        <a href="mailto:sales@stableflow.com">sales@stableflow.com</a>
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
                        <a href="http://www.stableflow.com/" class="logo small_displ" title="Home"></a>
                        <div class="container small">
                            <div class="rfp">
                                <!--
                                <a class="header_sep hl1 hphone" href="tel:+17183953674">+1 718 395 3674</a>
                                <a class="header_sep hl2 hphone" href="tel:+4402081448618">+44 020 8144 8618</a>
                                -->
                                <a class="header_sep hl3 hlink" href="mailto:sales@stableflow.com">sales@stableflow.com</a>
                                <a href="http://www.stableflow.com/contact/" class="btn btn-navbar lang" style="font-size: 17px; text-transform: uppercase;">Request a quote »</a>
                            </div>
                        </div>
                        <div class="nav-collapse collapse navbar-inverse-collapse" style="font-size: 20px;">
                            <?php include './menu.php'; ?>
                        </div><!-- /.nav-collapse -->
                    </div><!-- /navbar-inner -->
                </div>
                <div id="pcat">
                    <span class="btn_grey" style="margin: 0;"><a href="http://www.stableflow.com/services/#" class="sb-toggle-right" style="margin: 0;">Select a Category</a></span>
                </div>
            </div>
        </div>
        <div id="sb-site" style="min-height: 609px;">
            <div id="text">

                <style>
                    .main-cont h3 {
                        font-size: 22px;
                    }
                </style>    
                <div class="main-cont container">
                    <h1>Services</h1>
                    <div class="row-fluid">
                        <div class="left span6">
                            <h3>Web development</h3>
                            <ul>
                                <li>Websites</li>
                                <li>Web applications</li>
                                <li>Content Management Systems (CMS)</li>
                                <li>Software-as-a-service (SAAS)</li>
                                <li>Single-page applications (SPA) and websites</li>
                            </ul> 
                            <br>
                            <span class="btn_grey"><a href="http://www.stableflow.com/contact/?txtSubject=Web%20Development">Request</a></span>
                            <br>
                            <br>
                        </div>    
                        <div class="right span6">                    
                            <h3>Mobile development</h3>
                            <ul>
                                <li>Applications for iPad and iPhone. Distribution to App Store</li>
                                <li>Applications for Android phones and tablets. Distribution to Google Play</li>
                                <li>Hybrid mobile applications</li>
                                <li>Web services in support of online mobile apps</li>
                                <br>
                                <span class="btn_grey"><a href="http://www.stableflow.com/contact/?txtSubject=Mobile%20development">Request</a></span>
                                <br>
                            </ul></div>
                    </div>
                    <div class="row-fluid">
                        <div class="left span6">
                            <h3 style="border-top: 1px dashed #ECECEC;">Own Development Team</h3>
                            <p>Own Development Team model represents full-time development resources, allocated to work exclusively on your projects on a long-term basis. StableFlow is responsible for recruiting, hiring, housing, and retaining a team of specialists, who have precisely the set of knowledge and technologies that are needed to you. We offer you flexibility in terms of team size and structure as well as the option to increase or decrease numbers during the engagement.</p>
                            <br>
                            <span class="btn_grey"><a href="http://www.stableflow.com/contact/?txtSubject=Own%20Development%20Team">Request</a></span>
                            <br>
                        </div>    
                        <div class="right span6">                    
                            <h3 style="border-top: 1px dashed #ECECEC;">Skills Augmentation</h3>
                            <p>If your existing team has a shortfall in knowledge or resources, StableFlow can augment the existing members to help meet your delivery target. Experts with specific skills can be involved on as-needed basis for particular tasks or dedicated for full-time work as a member of your team. We know how to integrate quickly and efficiently with your existing team structure and processes.</p>
                            <br>
                            <span class="btn_grey"><a href="http://www.stableflow.com/contact/?txtSubject=Skills%20Augmentation">Request</a></span>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </body></html>