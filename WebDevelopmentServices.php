<!DOCTYPE html>
<html class="sb-init">
    <?php include './header.php'; ?>
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
                        <a href="mailto:sales@#.com">sales@#.com</a>
                    </div>
                    <div class="request_btn">
                        <span class="btn_grey"><a href="http://www.#.com/contact/" title="">Calculate your project's development cost »</a></span>                
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
                        <a href="http://www.#.com/" class="logo small_displ" title="Home"></a>
                        <div class="container small">
                            <div class="rfp">
                                <!--
                                <a class="header_sep hl1 hphone" href="tel:+17183953674">+1 718 395 3674</a>
                                <a class="header_sep hl2 hphone" href="tel:+4402081448618">+44 020 8144 8618</a>
                                -->
                                <a class="header_sep hl3 hlink" href="mailto:sales@#.com">sales@#.com</a>
                                <a href="http://www.#.com/contact/" class="btn btn-navbar lang" style="font-size: 17px; text-transform: uppercase;">Request a quote »</a>
                            </div>
                        </div>
                        <div class="nav-collapse collapse navbar-inverse-collapse" style="font-size: 20px;">
                            <?php include './menu.php'; ?>
                        </div><!-- /.nav-collapse -->
                    </div><!-- /navbar-inner -->
                </div>
                <div id="pcat">
                    <span class="btn_grey" style="margin: 0;"><a href="http://www.#.com/web-development/#" class="sb-toggle-right" style="margin: 0;">Select a Category</a></span>
                </div>
            </div>
        </div>
        <div id="sb-site" style="min-height: 609px;">
            <div id="text">
                <div class="main-cont container">
                    <div class="row-fluid">
                        <div class="span9 m-cont">    
                            <h1>LAMP &amp; MEAN Web Development</h1>
                            <p>As an experienced web development company StableFlow offers custom web solutions based on:</p>
                            <ul>
                                <li><strong>LAMP</strong> - Linux, Apache, MySQL, PHP software stack</li>
                                <li><strong>MEAN</strong> - MongoDB, ExpressJS, AngularJS, NodeJS based fullstack js framework</li>
                            </ul>
                            <h3>Custom Websites and Web Portals</h3>
                            <p>Professional website design, development and maintenance services for various website projects from brochure sites to multi-functional web portals.</p>
                            <p>We develop any custom components:</p>
                            <ul>
                                <li>Content Management System</li>
                                <li>Dynamic Content Generation</li>
                                <li>Advanced Search Mechanism Integration</li>
                                <li>Payment Processing</li>
                                <li>Media Streaming</li>
                                <li>Site Statistics</li>
                            </ul>
                            <p>and more...</p>
                            <h3>Responsive Web Design</h3>
                            <p>Design of different website layouts for specific devices (based on screen size and browser features) giving site visitors an optimal user experience.</p>
                            <h3>API integration</h3>
                            <p>Extending website functionality through integration with third-party online services:</p>
                            <ul>
                                <li>Social Networking Services</li>
                                <li>Google APIs</li>
                                <li>Electronic Payments Platforms</li>
                                <li>CRM</li>
                                <li>Search Servers</li>
                                <li>Email Marketing Software</li>
                                <li>Advanced Survey Software</li>
                                <li>Affiliate Tracking Software</li>
                                <li>Shopping Web Services</li>
                                <p>and more...</p>
                            </ul>
                            <h3>Extending Website Access by Providing Mobile Client</h3>
                            <p>Development of custom Web Service (API), iOS, Android and HTML5 Mobile Web application with access to the main functions of the website.</p>
                        </div>
                        <div class="span3 sb-cont">    
                            <div class="sidebarmenu">
                                <ul>

                                    <li><a href="http://www.#.com/solutions/" title="Solutions">Solutions</a></li>


                                    <li class="active"><a href="http://www.#.com/web-development/" title="Website Development">Website Development</a></li>


                                    <li><a href="http://www.#.com/mobile-development/" title="Mobile Applications">Mobile Applications</a></li>


                                    <li><a href="http://www.#.com/cms/" title="CMS Solutions">CMS Solutions</a></li>


                                    <li><a href="http://www.#.com/e-commerce/" title="E-commerce Solutions">E-commerce Solutions</a></li>


                                    <li><a href="http://www.#.com/cloud/" title="Cloud Solutions">Cloud Solutions</a></li>


                                    <li><a href="http://www.#.com/workflow-automation/" title="Business Process Automation">Business Process Automation</a></li>


                                    <li><a href="http://www.#.com/social-networking/" title="Social Networking">Social Networking</a></li>


                                    <li><a href="http://www.#.com/media-content-distribution/" title="Media Content Distribution">Media Content Distribution</a></li>



                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </body></html>