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
                            <h1>About Us</h1>
                            <p>EEW provides only the best practices in Web and Mobile application development since 2009.</p>
                            <!--
                            <p>We have started with a small team of web programmers. Since that time we have been engaged by businesses, individuals, software development outsourcing companies and technology startups for which we successfully completed more than a hundred of projects and earned high client satisfaction.</p>
                            -->
                            <p>We are a Company, that fully manages the processes of business analysis, development, quality control and delivery of custom Web &amp; Mobile applications.<!-- Our team includes managers, architects, software engineers, designers and quality assurance specialists.--></p>
                            <p>We affordably and efficiently support your business requirements and your software needs by providing technology &amp; architecture consulting, user experience, development and quality assurance services.</p>
                            <p>We are committed to becoming long-term, trusted technology partner, dedicated to meeting your needs today and support your growing needs tomorrow.</p>
                            <h3>Key Facts</h3>
                            <ul>
                                <li>Founded in 2009. Over 6 years in IT software development</li>
                                <li>Privately held, owner-managed company</li>
                                <li>30+ highly-experienced managers, architects and programmers</li>
                                <li>Development center located in Eastern Europe - Kharkov, Ukraine</li>
                                <li>Less than 10% staff turnover rate</li>
                                <li>100+ successfully completed projects with different scope</li>
                                <li>About 75% customer return rate</li>
                            </ul>
                            <a class="company-profile" href="#" target="_blank">Download Company Profile</a>    
                        </div>
                        <div class="span3 sb-cont">    
                            <div class="sidebarmenu">
                                <ul>

                                    <li class="active"><a href="AboutUs.php" title="About Us">About Us</a></li>


                                    <li><a href="Process.php" title="Process">Process</a></li>



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