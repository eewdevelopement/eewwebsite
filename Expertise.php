<html class="sb-init">
    <?php include './header.php'; ?>
    <body>
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
        <div id="header" class="clearfix">
            <div class="container" style="height: 100px;" id="header-top">
                <div class="new-year-hat">
                    <a title="Home" class="logo" href=""></a>	
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
                            <?php include './menu.php'; ?>
                        </div> 
                    </div> 
                </div>
                <div id="pcat">
                    <span class="btn_grey" style="margin: 0;"><a href="CMSsolution.php" class="sb-toggle-right" style="margin: 0;">Select a Category</a></span>
                </div>
            </div>
        </div>
        <!--SAGAR ADD CODE BELOW-->        
        <div id="sb-site" style="min-height: 609px;">
            <div id="text">

                <div class="main-cont container">
                    <div class="row-fluid">
                        <div class="span9 m-cont">    
                            <h1 class="expertiseapiimg">Our Expertise</h1>
                            <div class="row-fluid">
                                <div class="left span6">
                                    <h3>Project Type Expertise</h3>
                                    <ul>
                                        <li><a href="WebDevelopmentServices.php">Website &amp; Web portals</a></li>
                                        <li><a href="#">Single-page applications (SPA)</a></li>
                                        <li><a href="CMSsolution.php">Content Management Systems (CMS)</a></li>
                                        <li><a href="E-commerceSolutions.php">Online stores &amp; Mobile E-commerce</a></li>
                                        <li><a href="#">Software-as-a-Service (SAAS)</a></li>
                                        <li><a href="#">Business Process Automation (CRM, ERP, ...)</a></li>
                                        <li><a href="SocialNetworkingservices.php">Social Media Applications</a></li>
                                        <li><a href="Mobiledevelopmentservices.php">Mobile Applications</a></li>
                                        <li><a href="#">Mobile Games</a></li>
                                        <li><a href="#">SmartTV Applications</a></li>
                                    </ul>
                                </div>
                                <div class="right span6">
                                    <h3>Business Domain Expertise</h3>  
                                    <ul>
                                        <li class=""><a href="E-commerc&RetailPortfolio.php">E-commerce &amp; Retail</a></li>

                                        <li class=""><a href="#">Travel &amp; Booking</a></li>

                                        <li class=""><a href="#">Communities &amp; Networks</a></li>

                                        <li class=""><a href="#">Telecommunications</a></li>

                                        <li class=""><a href="#">Arts &amp; Entertainment</a></li>

                                        <li class=""><a href="#">Media Distribution</a></li>

                                        <li class="active"><a href="#">News and Publications</a></li>

                                        <li class=""><a href="#">Customer Management</a></li>

                                        <li class=""><a href="#">eLearning &amp; Online Training</a></li>

                                        <li class=""><a href="#">Sport &amp; Health</a></li>

                                        <li class=""><a href="#">Business</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="span3 sb-cont">    
                            <div class="sidebarmenu">
                                <ul>

                                    <li class="active"><a href="Expertise.php" title="Expertise">Expertise</a></li>


                                    <li><a href="WebExpertise.php" title="Web">Web</a></li>


                                    <li><a href="MobileExpertise.php" title="Mobile">Mobile</a></li>


                                    <li><a href="CloudExpertise.php" title="Cloud">Cloud</a></li>


                                    <li><a href="ApiExpertise.php" title="API">API</a></li>



                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--SAGAR ADD CODE BELOW--> 
        <?php include './footer.php'; ?>
    </body>
</html>