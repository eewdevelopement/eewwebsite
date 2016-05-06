<!DOCTYPE html>
<html class="sb-init"><head>
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
                    <span class="btn_grey" style="margin: 0;"><a href="http://www.#.com/process/#" class="sb-toggle-right" style="margin: 0;">Select a Category</a></span>
                </div>
            </div>
        </div>
        <div id="sb-site" style="min-height: 609px;">
            <div id="text">

                <div class="main-cont container">
                    <div class="row-fluid">
                        <div class="span9 m-cont">
                            <h1>Process</h1>
                            <h3>Development Methodologies</h3>
                            <ul>
                                <li>Agile</li>
                                <li>SCRUM</li>
                                <li>Kanban</li>
                            </ul>
                            <h3>Development Life-cycle</h3>
                            <!--
                            <p>Do we have ability to develop the full stack (Backend, Web, Android, iPhone)?</p>
                            <ul><li>Yes</li></ul>
                            -->
                            <p><b>Tools commonly used for the organization of work (ticket system, version control,...):</b></p>
                            <ul><li>Redmine, Jira, Gemini, Asana, Confluence, Bitbucket, Git, GitHub</li></ul>
                            <!--
                            <p>Do we able to work on multiple projects at the same time?</p>
                            <ul><li>Yes</li></ul>
                            -->
                            <p><b>How are business requirements transferred to the developers:</b></p>
                            <ul><li>EEW can dedicate technical Project Manager (PM) with fluent English for project(s) coordination or client can communicate with the developers directly.</li></ul>
                            <p><b>Development process (with PM):</b></p>
                            <ul><li>PM will lead client through all steps of the process to implement the best practices and IT strategy. PM will be in a constant touch with the client via email, phone and instant messengers to ensure that client requirements, feedback and comments are timely reflected in the technical specifications on all stages of the project and to ensure the highest conformity of the end product to the client vision. PM will be in direct contact with the development team and report on project status to client.
                                    All the work will be performed on the EEW development server. Client will be granted access to the development server, source control and thus provided with the ability to monitor development progress. During the development stage, client will be updated on the status of the project regularly by PM, showed screenshots, schemes or other visual results of the work. PM will take into consideration client comments and take corrective actions where appropriate.</li></ul>
                            <p><b>How do we ensure the quality of the developed software:</b></p>
                            <ul><li>EEW has a Quality Assurance department. This department is responsible for testing control of all software developed in the company. Testing team is responsible for finding and documenting bugs, defects and weak points of software, providing the PM and development team with information on detected problems.</li></ul>
                            <p><b>How do we ensure proper documentation of the code:</b></p>
                            <ul><li>EEW use PHP Storm and PHP Code Sniffer Tool, also modern IDE force developers to document all input and return parameters of all functions. This approach also allows to create separate development documentation from all comments in code.</li></ul>
                            <h3>Support</h3>
                            <p>Additional support can include:</p>
                            <ul>
                                <li>Ongoing support for modifications and improvements after project launch. Experts with specific skills can be involved on as-needed basis for particular tasks or dedicated for full-time.</li>
                                <li>Predefined and scheduled hours of developers support according to specified hourly rate.</li>
                                <li>Extra QA and administrators support according to specified hourly rate.</li>
                                <li>Stress testing of a system (to find out how much users it can handle).</li>
                            </ul>
                        </div>
                        <div class="span3 sb-cont">    
                            <div class="sidebarmenu">
                                <ul>

                                    <li><a href="AboutUs.php" title="About Us">About Us</a></li>


                                    <li class="active"><a href="Process.php" title="Process">Process</a></li>



                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </body></html>