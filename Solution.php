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
                        <a href="http://www.eewtech.in/" class="logo small_displ" title="Home"></a>
                        <div class="container small">
                            <div class="rfp">
                                <!--
                                <a class="header_sep hl1 hphone" href="tel:+17183953674">+1 718 395 3674</a>
                                <a class="header_sep hl2 hphone" href="tel:+4402081448618">+44 020 8144 8618</a>
                                -->
                                <a class="header_sep hl3 hlink" href="mailto:sales@eewtech.in">sales@eewtech.in</a>
                                <a href="Contact.php" class="btn btn-navbar lang" style="font-size: 17px; text-transform: uppercase;">Request a quote »</a>
                            </div>
                        </div>
                        <div class="nav-collapse collapse navbar-inverse-collapse" style="font-size: 20px;">
                            <?php include './menu.php'; ?>
                        </div><!-- /.nav-collapse -->
                    </div><!-- /navbar-inner -->
                </div>
                <div id="pcat">
                    <span class="btn_grey" style="margin: 0;"><a href="#" class="sb-toggle-right" style="margin: 0;">Select a Category</a></span>
                </div>
            </div>
        </div>
        <div id="sb-site" style="min-height: 609px;">
            <div id="text">

                <style>
                    .servlink1 {
                        font-size: 20px;
                        text-decoration: underline !important;
                    }
                    .servlink1:hover {
                        text-decoration: none !important;
                    }
                </style>    
                <div class="main-cont container">
                    <div class="row-fluid">
                        <div class="span9 m-cont">    
                            <h1>Solutions</h1>
                            <div class="row-fluid">
                                <div class="left span6">
                                    <a class="servlink1" href="WebDevelopmentServices.php">WEBSITES AND WEB PORTALS</a>
                                    <ul>
                                        <li>We design and develop various website projects from brochure sites to multi-functional web portals</li>
                                    </ul>
                                </div>
                                <div class="right span6">
                                    <a class="servlink1" href="Mobiledevelopmentservices.php">Mobile applications</a>
                                    <ul>
                                        <li>We design advanced mobile solutions for business, everyday tasks, communication, social networking and entertainment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="left span6">
                                    <a class="servlink1" href="CMSsolution.php">CONTENT AND DOCUMENT MANAGEMENT</a>
                                    <ul>
                                        <li>Our content management solutions are intended to help businesses manage and distribute information faster and more efficiently</li>
                                    </ul>
                                </div>
                                <div class="right span6">
                                    <a class="servlink1" href="E-commerceSolutions.php">E-commerce and online payments</a>
                                    <ul>
                                        <li>We implement online stores, B2B and B2C marketplaces, comprehensive payments solutions, mobile e-commerce, in-app purchases</li>
                                    </ul>   
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="left span6">
                                    <a class="servlink1" href="CustomBusinessApplicationDevelopmentServices.php">BUSINESS PROCESS AUTOMATION</a>
                                    <ul>
                                        <li>We automate business processes by developing, implementing and integrating enterprise web solutions</li>
                                    </ul>
                                </div>
                                <div class="right span6">
                                    <a class="servlink1" href="SocialNetworkingservices.php">SOCIAL NETWORKING</a>
                                    <ul>
                                        <li>We implement social networking features and build online communities</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="left span6">
                                    <a class="servlink1" href="CloudSolution.php">SAAS (SOFTWARE-AS-A-SERVICE)</a>
                                    <ul>
                                        <li>We develop Software-as-a-Service solutions (SaaS) which is highly scalable and runs in the Cloud</li>
                                    </ul>
                                </div>
                                <div class="right span6">
                                    <a class="servlink1" href="MediaContentDistribution.php">MEDIA CONTENT DISTRIBUTION</a>
                                    <ul>
                                        <li>We offer solutions for media content distribution via the Web, Mobile, IPTV, Smart TV</li>
                                    </ul>        
                                </div>
                            </div>
                        </div>
                        <div class="span3 sb-cont">    
                            <div class="sidebarmenu">
                                <ul>

                                    <li class="active"><a href="Solution.php" title="Solutions">Solutions</a></li>


                                    <li><a href="WebDevelopmentServices.php" title="Website Development">Website Development</a></li>


                                    <li><a href="Mobiledevelopmentservices.php" title="Mobile Applications">Mobile Applications</a></li>


                                    <li><a href="CMSsolution.php" title="CMS Solutions">CMS Solutions</a></li>


                                    <li><a href="E-commerceSolutions.php" title="E-commerce Solutions">E-commerce Solutions</a></li>


                                    <li><a href="CloudSolution.php" title="Cloud Solutions">Cloud Solutions</a></li>


                                    <li><a href="CustomBusinessApplicationDevelopmentServices.php" title="Business Process Automation">Business Process Automation</a></li>


                                    <li><a href="SocialNetworkingservices.php" title="Social Networking">Social Networking</a></li>


                                    <li><a href="MediaContentDistribution.php" title="Media Content Distribution">Media Content Distribution</a></li>



                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </body></html>