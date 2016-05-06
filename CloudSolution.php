<!DOCTYPE html>
<html class="sb-init"><!--<![endif]-->
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
                                <a class="header_sep hl3 hlink" href="mailto:sales@#.com">sales@#.com</a>
                                <a href="Contact.php" class="btn btn-navbar lang" style="font-size: 17px; text-transform: uppercase;">Request a quote »</a>
                            </div>
                        </div>
                        <div class="nav-collapse collapse navbar-inverse-collapse" style="font-size: 20px;">
                            <?php include './menu.php'; ?>
                        </div><!-- /.nav-collapse -->
                    </div><!-- /navbar-inner -->
                </div>
                <div id="pcat">
                    <span class="btn_grey" style="margin: 0;"><a href="CloudSolution.php" class="sb-toggle-right" style="margin: 0;">Select a Category</a></span>
                </div>
            </div>
        </div>
        <div id="sb-site" style="min-height: 609px;">
            <div id="text">

                <div class="main-cont container">
                    <div class="row-fluid">
                        <div class="span9 m-cont">    
                            <h1 class="expertisewebimg">Cloud Solutions</h1>
                            <p>StableFlow specializes in the development of Software-as-a-Service solutions (SaaS) which is highly scalable and runs in the cloud.</p>
                            <p>Our cloud solution services:</p>
                            <ul>
                                <li>Developing SaaS solution</li>
                                <li>Moving existing applications into the cloud</li>
                                <li>Ongoing support and maintenance</li>
                                <li>System administration</li>
                            </ul>
                            <p>StableFlow uses the following cloud-computing platforms in SaaS solutions:</p>
                            <h3>Google Cloud Platform</h3>
                            <p>Google Cloud Platform is a set of modular cloud-based services that allow you to create anything from simple websites to complex applications.</p>
                            <h3>Google App Engine</h3>
                            <p>Google App Engine is a platform for building scalable web applications and mobile backends. App Engine provides you with built-in services and APIs such as NoSQL datastores, memcache, and a user authentication API, common to most applications.</p>
                            <h3>Amazon Web Services (AWS)</h3>
                            <p>AWS is a set of web services that together creates a cloud computing platform, offered by Amazon.com. Amazon ElastiCache databases, Amazon Elastic Compute Cloud (EC2) and Amazon Simple Storage Service (S3) are the most advanced and well-known of these services. The platform allows users to work with a wide range of Amazon web-services and virtual machines.</p>
                            <h3>Rackspace Cloud</h3>   
                            <p>Rackspace Cloud is a set of cloud computing products and services, offered by Rackspace.com. Offerings include web application hosting or platform as a service (Cloud Sites), Cloud Storage (Cloud Files), virtual private server (Cloud Servers), load balancers, databases, backup, and monitoring.</p>
                            <h3>Digital Ocean</h3>   
                            <p>DigitalOcean is a simple cloud hosting, built for developers.</p>
                        </div>
                        <div class="span3 sb-cont">    
                            <div class="sidebarmenu">
                                <ul>

                                    <li><a href="Solution.php" title="Solutions">Solutions</a></li>


                                    <li><a href="WebDevelopmentServices.php" title="Website Development">Website Development</a></li>


                                    <li><a href="Mobiledevelopmentservices.php" title="Mobile Applications">Mobile Applications</a></li>


                                    <li><a href="CMSsolution.php" title="CMS Solutions">CMS Solutions</a></li>


                                    <li><a href="E-commerceSolutions.php" title="E-commerce Solutions">E-commerce Solutions</a></li>


                                    <li class="active"><a href="CloudSolution.php" title="Cloud Solutions">Cloud Solutions</a></li>


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