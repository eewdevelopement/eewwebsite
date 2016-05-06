<!DOCTYPE html>
<html class="sb-init">
    <head>
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
                            <img alt="" src="http://www#/images/santa-hat.png" />
                    </div>
                    <div class="snow snow-one">
                            <img alt="" src="http://www#/images/snow.png" />
                    </div>
                    <div class="snow snow-two">
                            <img alt="" src="http://www#/images/snow.png" />
                    </div>
                    <div class="snow snow-three">
                            <img alt="" src="http://www#/images/snow.png" />
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
                        <span class="btn_grey"><a href="http://www#/contact/" title="">Calculate your project's development cost »</a></span>                
                    </div>    
                </div>
            </div>
            <div class="contr_nav_bar_bg">
                <div class="navbar navbar-inverse container" style="position: static;">
                    <?php include './menu.php'; ?>
                </div><!-- /.nav-collapse -->
            </div><!-- /navbar-inner -->
        </div>
        <div id="pcat">
            <span class="btn_grey" style="margin: 0;"><a href="http://www#/solutions/#" class="sb-toggle-right" style="margin: 0;">Select a Category</a></span>
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
                            <a class="servlink1" href="http://www#/web-development/">WEBSITES AND WEB PORTALS</a>
                            <ul>
                                <li>We design and develop various website projects from brochure sites to multi-functional web portals</li>
                            </ul>
                        </div>
                        <div class="right span6">
                            <a class="servlink1" href="http://www#/mobile-development/">Mobile applications</a>
                            <ul>
                                <li>We design advanced mobile solutions for business, everyday tasks, communication, social networking and entertainment</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="left span6">
                            <a class="servlink1" href="http://www#/cms/">CONTENT AND DOCUMENT MANAGEMENT</a>
                            <ul>
                                <li>Our content management solutions are intended to help businesses manage and distribute information faster and more efficiently</li>
                            </ul>
                        </div>
                        <div class="right span6">
                            <a class="servlink1" href="http://www#/e-commerce/">E-commerce and online payments</a>
                            <ul>
                                <li>We implement online stores, B2B and B2C marketplaces, comprehensive payments solutions, mobile e-commerce, in-app purchases</li>
                            </ul>   
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="left span6">
                            <a class="servlink1" href="http://www#/workflow-automation/">BUSINESS PROCESS AUTOMATION</a>
                            <ul>
                                <li>We automate business processes by developing, implementing and integrating enterprise web solutions</li>
                            </ul>
                        </div>
                        <div class="right span6">
                            <a class="servlink1" href="http://www#/social-networking/">SOCIAL NETWORKING</a>
                            <ul>
                                <li>We implement social networking features and build online communities</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="left span6">
                            <a class="servlink1" href="http://www#/cloud/">SAAS (SOFTWARE-AS-A-SERVICE)</a>
                            <ul>
                                <li>We develop Software-as-a-Service solutions (SaaS) which is highly scalable and runs in the Cloud</li>
                            </ul>
                        </div>
                        <div class="right span6">
                            <a class="servlink1" href="http://www#/media-content-distribution/">MEDIA CONTENT DISTRIBUTION</a>
                            <ul>
                                <li>We offer solutions for media content distribution via the Web, Mobile, IPTV, Smart TV</li>
                            </ul>        
                        </div>
                    </div>
                </div>
                <div class="span3 sb-cont">    
                    <div class="sidebarmenu">
                        <ul>

                            <li class="active"><a href="http://www#/solutions/" title="Solutions">Solutions</a></li>


                            <li><a href="http://www#/web-development/" title="Website Development">Website Development</a></li>


                            <li><a href="http://www#/mobile-development/" title="Mobile Applications">Mobile Applications</a></li>


                            <li><a href="http://www#/cms/" title="CMS Solutions">CMS Solutions</a></li>


                            <li><a href="http://www#/e-commerce/" title="E-commerce Solutions">E-commerce Solutions</a></li>


                            <li><a href="http://www#/cloud/" title="Cloud Solutions">Cloud Solutions</a></li>


                            <li><a href="http://www#/workflow-automation/" title="Business Process Automation">Business Process Automation</a></li>


                            <li><a href="http://www#/social-networking/" title="Social Networking">Social Networking</a></li>


                            <li><a href="http://www#/media-content-distribution/" title="Media Content Distribution">Media Content Distribution</a></li>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>
</body></html>