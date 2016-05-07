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
                            <img alt="" src="http://www.#.com/images/santa-hat.png" />
                    </div>
                    <div class="snow snow-one">
                            <img alt="" src="http://www.#.com/images/snow.png" />
                    </div>
                    <div class="snow snow-two">
                            <img alt="" src="http://www.#.com/images/snow.png" />
                    </div>
                    <div class="snow snow-three">
                            <img alt="" src="http://www.#.com/images/snow.png" />
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
                        <a href="#" class="logo small_displ" title="Home"></a>
                        <div class="container small">
                            <div class="rfp">
                                <a class="header_sep hl3 hlink" href="mailto:sales@eewtech.in">sales@eewtech.in</a>
                                <a href="Contact.php" class="btn btn-navbar lang" style="font-size: 17px; text-transform: uppercase;">Request a quote »</a>
                            </div>
                        </div>
                        <div class="nav-collapse collapse navbar-inverse-collapse" style="font-size: 20px;">
                            <?php include './menu.php'; ?>
                        </div>
                    </div>
                </div>
                <div id="pcat">
                    <span class="btn_grey" style="margin: 0;"><a href="#" class="sb-toggle-right" style="margin: 0;">Select a Category</a></span>
                </div>
            </div>
        </div>
        <div id="sb-site" style="min-height: 609px;">
            <div id="text">

                <div class="main-cont container">
                    <div class="row-fluid">
                        <div class="span9 m-cont">    
                            <h1 class="expertisemobileimg">Mobile Applications</h1>
                            <h3>Native iOS / Android applications</h3>
                            <p>Our mobile development experience covers variety of domains:</p>
                            <div class="row-fluid">
                                <div class="left span6">
                                    <ul>
                                        <li>Mobile Utilities</li>
                                        <li>Business Applications</li>
                                        <li>Social Networking</li>
                                        <li>Communication</li>
                                        <li>Entertainment</li>
                                        <li>Everyday tasks</li>
                                        <li>E-commerce</li>
                                        <li>Financial Services</li>
                                    </ul>            
                                </div>
                                <div class="right span6">
                                    <ul>
                                        <li>Booking Services</li>
                                        <li>Media Content Distribution</li>
                                        <li>Electronic Forms and Catalogs</li>
                                        <li>QRCode, Barcode processing</li>
                                        <li>GPS and Geolocation</li>
                                        <li>Data Visualization</li>
                                        <li>Photo capturing and editing</li>
                                        <li>Augmented Reality</li>
                                    </ul>            
                                </div>
                            </div>
                            <p>and more...</p>
                            <h3>Comprehensive solutions, built around mobile functionality</h3>
                            <p>Mobile application implementation often requires not only the development of the mobile client.
                                Application may have online database, CMS, communicate with API to exchange portions of data, etc.
                                So besides the development of the mobile client we provide the following service:</p>
                            <ul>
                                <li>Design of supporting website</li>
                                <li>Custom API and data source development</li>
                                <li>Back-end development for data management</li>
                                <li>Integration with existing back-end software</li>
                            </ul>
                            <h3>Mobile Web HTML5 applications (with native-like experience)</h3>
                            <p>Mobile web application is written in HTML5, CSS3, JavaScript and server-side languages (e.g. PHP, Rails).</p>
                            <p>The true advantage of developing mobile web application is cross platform compatibility that reduces costs for development of multiple mobile platforms.</p>
                            <p>The major concern is that mobile web apps can access a limited amount of the device’s native features and information (orientation, geolocation, media, etc.) Such features as feedback mechanics like vibration and sounds, gyroscope physics, etc. not available.</p>
                            <h3>Mobile games</h3>
                            <p>EEW provides mobile game development services for creating both 2D &amp; 3D custom game applications for Android and iOS based mobile devices.</p>
                        </div>
                        <div class="span3 sb-cont">    
                            <div class="sidebarmenu">
                                <ul>

                                    <li><a href="Solution.php" title="Solutions">Solutions</a></li>


                                    <li><a href="WebDevelopmentServices.php" title="Website Development">Website Development</a></li>


                                    <li class="active"><a href="Mobiledevelopmentservices.php" title="Mobile Applications">Mobile Applications</a></li>


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