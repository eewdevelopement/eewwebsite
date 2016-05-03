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
                        <a href="mailto:sales@#">sales@#</a>
                    </div>
                    <div class="request_btn">
                        <span class="btn_grey"><a href="http://www.#/contact/" title="">Calculate your project's development cost »</a></span>                
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
                        <a href="http://www.#/" class="logo small_displ" title="Home"></a>
                        <div class="container small">
                            <div class="rfp">
                                <a class="header_sep hl3 hlink" href="mailto:sales@#">sales@#</a>
                                <a href="http://www.#/contact/" class="btn btn-navbar lang" style="font-size: 17px; text-transform: uppercase;">Request a quote »</a>
                            </div>
                        </div>
                        <div class="nav-collapse collapse navbar-inverse-collapse" style="font-size: 20px;">
                            <?php include './menu.php'; ?>
                        </div> 
                    </div> 
                </div>
                <div id="pcat">
                    <span class="btn_grey" style="margin: 0;"><a href="http://www.#/cms/#" class="sb-toggle-right" style="margin: 0;">Select a Category</a></span>
                </div>
            </div>
        </div>
        <div id="sb-site" style="min-height: 609px;">
            <div id="text">

                <div class="main-cont container">
                    <div class="row-fluid">
                        <div class="span9 m-cont">    
                            <h1 class="cmsimg">CMS solutions</h1>
                            <p>StableFlow offers CMS solutions that are intended to help businesses manage and distribute information faster and more efficiently.</p>
                            <p>CMS solutions often includes:</p>
                            <ul>
                                <li>Non-technical Content Creation and Publishing</li>
                                <li>Dynamic Structure Generation</li>
                                <li>Document Management (incl. PDFs, images, video and audio files, etc)</li>
                                <li>Admin Roles Management</li>
                                <li>User Management</li>
                            </ul>
                            <p>and more...</p>
                            <h3>Open Source CMS Solutions</h3>
                            <p>We built our CMS Solutions using up-to-date CMS and CMF:</p>
                            <ul>
                                <li>WordPress</li>
                                <li>TYPO3</li>
                                <li>Drupal</li>
                            </ul>
                            <h3>WordPress CMS</h3>
                            <ul>
                                <li>WordPress theme design and customization</li>
                                <li>WordPress plugin installation, customization, development</li>
                                <li>WordPress full website solutions</li>
                                <li>WordPress e-commerce solutions</li>
                                <li>WordPress multilingual websites</li>
                                <li>Moving existing site to WordPress</li>
                                <li>WordPress integration with Social Media, CRM, Email marketing software, Payment gateways, Survey software</li>
                            </ul>
                        </div>
                        <div class="span3 sb-cont">    
                            <div class="sidebarmenu">
                                <ul>
                                    <li><a href="http://www.#/solutions/" title="Solutions">Solutions</a></li>
                                    <li><a href="http://www.#/web-development/" title="Website Development">Website Development</a></li>
                                    <li><a href="http://www.#/mobile-development/" title="Mobile Applications">Mobile Applications</a></li>
                                    <li class="active"><a href="http://www.#/cms/" title="CMS Solutions">CMS Solutions</a></li>
                                    <li><a href="http://www.#/e-commerce/" title="E-commerce Solutions">E-commerce Solutions</a></li>
                                    <li><a href="http://www.#/cloud/" title="Cloud Solutions">Cloud Solutions</a></li>
                                    <li><a href="http://www.#/workflow-automation/" title="Business Process Automation">Business Process Automation</a></li>
                                    <li><a href="http://www.#/social-networking/" title="Social Networking">Social Networking</a></li>
                                    <li><a href="http://www.#/media-content-distribution/" title="Media Content Distribution">Media Content Distribution</a></li>
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