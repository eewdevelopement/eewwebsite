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

                <div class="main-cont container">
                    <div class="row-fluid">
                        <div class="span9 m-cont">    
                            <h1 class="expertisewebimg">Social Networking</h1>
                            <h3>Start your Social Networking project with StableFlow</h3>
                            <p>At EEW you will find a winning solution for your Social Networking project.</p>
                            <p>To make your solution easy to develop, maintain, scale and update in the future, EEW offers:</p>
                            <ul>
                                <li>Selecting an appropriate technology and framework for a social networking solution</li>
                                <li>Database, Application and Server architecture design, capable of withstanding high load</li>
                                <li>Cloud and CDN solutions</li>
                                <li>Architecture scalability for future extension</li>
                                <li>Modular architecture structure for easier maintenance and support</li>
                                <li>Comprehensive support and maintenance after the project is launched</li>
                            </ul>
                            <h3>Social Networking Project Types</h3>
                            <p>EEW offers its expertise in building:</p>
                            <ul>
                                <li>Online Communities</li>
                                <li>Online Services with Social Features</li>
                                <li>Mobile Client / Mobile Web Application for SN</li>
                                <li>Applications for Social Networks -  Facebook, Twitter, VK, ...</li>
                            </ul>
                            <h3>Features</h3>
                            <p>Common features and tools, that we can include in your Social Networking project:</p>
                            <div class="row-fluid">
                                <div class="left span6">
                                    <ul>
                                        <li>Media Gallery</li>
                                        <li>Comments</li>
                                        <li>Rating System</li>
                                        <li>Content Flagging</li>
                                        <li>Friends Lists</li>
                                        <li>Search</li>
                                        <li>Groups</li>
                                        <li>Polls and Contests</li>
                                        <li>Blogs &amp; Blog Comments</li>
                                        <li>Discussion Threads</li>
                                    </ul>
                                </div>
                                <div class="right span6">
                                    <ul>
                                        <li>Calendars</li>
                                        <li>Events</li>
                                        <li>Alerts and Notifications</li>
                                        <li>Instant Messaging</li>
                                        <li>User Management System</li>
                                        <li>Content Management System</li>
                                        <li>Content Moderation</li>
                                        <li>Ad Management System</li>
                                        <li>Task Management</li>
                                        <li>Statistics</li>
                                    </ul>
                                </div>
                            </div>
                            <p>and more...</p>
                        </div>
                        <div class="span3 sb-cont">    
                            <div class="sidebarmenu">
                                <ul>

                                   <li><a href="Solution.php" title="Solutions">Solutions</a></li>
                                    <li><a href="WebDevelopmentServices.php" title="Website Development">Website Development</a></li>
                                    <li><a href="Mobiledevelopmentservices.php" title="Mobile Applications">Mobile Applications</a></li>
                                    <li><a href="CMSsolution.php" title="CMS Solutions">CMS Solutions</a></li>
                                    <li ><a href="E-commerceSolutions.php" title="E-commerce Solutions">E-commerce Solutions</a></li>
                                    <li><a href="CloudSolution.php" title="Cloud Solutions">Cloud Solutions</a></li>
                                    <li><a href=CustomBusinessApplicationDevelopmentServices.php" title="Business Process Automation">Business Process Automation</a></li>
                                    <li class="active"><a href="SocialNetworkingservices.php" title="Social Networking">Social Networking</a></li>
                                    <li><a href="Mobiledevelopmentservices.php" title="Media Content Distribution">Media Content Distribution</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </body></html>