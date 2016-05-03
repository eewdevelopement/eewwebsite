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
                            <img alt="" src="http://#/images/santa-hat.png" />
                    </div>
                    <div class="snow snow-one">
                            <img alt="" src="http://#/images/snow.png" />
                    </div>
                    <div class="snow snow-two">
                            <img alt="" src="http://#/images/snow.png" />
                    </div>
                    <div class="snow snow-three">
                            <img alt="" src="http://#/images/snow.png" />
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
                        <span class="btn_grey"><a href="http://#/contact/" title="">Calculate your project's development cost »</a></span>                
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
                        <a href="http://#/" class="logo small_displ" title="Home"></a>
                        <div class="container small">
                            <div class="rfp">

                                <a class="header_sep hl3 hlink" href="mailto:sales@stableflow.com">sales@stableflow.com</a>
                                <a href="http://#/contact/" class="btn btn-navbar lang" style="font-size: 17px; text-transform: uppercase;">Request a quote »</a>
                            </div>
                        </div>
                        <div class="nav-collapse collapse navbar-inverse-collapse" style="font-size: 20px;">
                            <?php include './menu.php'; ?>
                        </div> 
                    </div> 
                </div>
                <div id="pcat">
                    <span class="btn_grey" style="margin: 0;"><a href="http://#/workflow-automation/#" class="sb-toggle-right" style="margin: 0;">Select a Category</a></span>
                </div>
            </div>
        </div>
        <div id="sb-site" style="min-height: 609px;">
            <div id="text">

                <div class="main-cont container">
                    <div class="row-fluid">
                        <div class="span9 m-cont">    
                            <h1 class="businessimg">Business Process Automation</h1>
                            <h3>Effective business process management</h3>
                            <p>StableFlow provides services to develop, implement and integrate custom business solutions that allows reduce resource requirements and operating costs by automating business processes, enable effective management and enhance the productivity of organization.</p>        
                            <p>Our expertise covers all the main domains allowing us to support business processes:</p>
                            <ul>
                                <li>Customer Relationship Management (CRM)</li>
                                <li>Workflow Automation and Task Management</li>
                                <li>Appointments Scheduling</li>
                                <li>Inventory Management</li>
                                <li>Accounting &amp; Billing</li>
                                <li>Paperless Filing</li>
                            </ul>
                            <p>and more...</p>
                            <h3>Long-term partnership</h3>
                            <p>StableFlow is focused on long-term partnership providing careful step-by-step project execution with clear deliverables at each phase, full cycle implementation, maintenance and improvement of the solutions created.</p>
                        </div>
                        <div class="span3 sb-cont">    
                            <div class="sidebarmenu">
                                <ul>
                                    <li><a href="http://#/solutions/" title="Solutions">Solutions</a></li>
                                    <li><a href="http://#/web-development/" title="Website Development">Website Development</a></li>
                                    <li><a href="http://#/mobile-development/" title="Mobile Applications">Mobile Applications</a></li>
                                    <li><a href="http://#/cms/" title="CMS Solutions">CMS Solutions</a></li>
                                    <li><a href="http://#/e-commerce/" title="E-commerce Solutions">E-commerce Solutions</a></li>
                                    <li><a href="http://#/cloud/" title="Cloud Solutions">Cloud Solutions</a></li>
                                    <li class="active"><a href="http://#/workflow-automation/" title="Business Process Automation">Business Process Automation</a></li>
                                    <li><a href="http://#/social-networking/" title="Social Networking">Social Networking</a></li>
                                    <li><a href="http://#/media-content-distribution/" title="Media Content Distribution">Media Content Distribution</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </body>
</html>