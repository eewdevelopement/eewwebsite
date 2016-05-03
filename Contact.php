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
                    <a title="Home" class="logo" href=""></a>	
                </div>

                <div id="language-header" style="margin-top: 15px; color: #0861CF;">
                    <div class="phones">
                        <span>email:</span>
                        <a href="mailto:sales@#">sales@#</a>
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
                                <a class="header_sep hl3 hlink" href="mailto:sales@#">sales@#</a>
                                <a href="Contact.php" class="btn btn-navbar lang" style="font-size: 17px; text-transform: uppercase;">Request a quote »</a>
                            </div>
                        </div>
                        <div class="nav-collapse collapse navbar-inverse-collapse" style="font-size: 20px;">
                            <?php include './menu.php'; ?>
                        </div>
                    </div>
                </div>
                <div id="pcat">
                    <span class="btn_grey" style="margin: 0;"><a href="Contact.php" class="sb-toggle-right" style="margin: 0;">Select a Category</a></span>
                </div>
            </div>
        </div>
        <div id="sb-site" style="min-height: 609px;">
            <div id="text">
                <style>
                    @media (max-width: 767px) {
                        .submit {
                            text-align: center;
                        }
                    }
                </style>    
                <div class="main-cont container">
                    <h1 class="contactimg">Contact Us</h1>
                    <br>
                    <div style="text-transform: uppercase;">
                        <p><b>Email:</b> <a href="mailto:sales@#">sales@#</a></p>
                    </div>
                    <br>
                    <h3>Request A Quote</h3>
                    <br>
                    <p>Please submit your project details using the form below and we will get back to you promptly regarding your request.</p>
                    <br>
                    <p>* - means required fields</p>
                    <br>
                    <form method="post" action="Contact.php" enctype="multipart/form-data">

                        <div class="row-fluid">
                            <div class="span3">
                                <p>Full name:&nbsp;*</p>
                            </div>    
                            <div class="span9">
                                <input type="text" name="txtName" value="" id="txtName" class="inputtext medium">
                                <span id="vldName" class="note "></span>


                            </div>
                        </div>    

                        <div class="row-fluid">
                            <div class="span3">
                                <p>Company / Organization:</p>
                            </div>    
                            <div class="span9">
                                <input type="text" name="txtCompany" value="" id="txtCompany" class="inputtext medium">
                            </div>
                        </div>    

                        <div class="row-fluid">
                            <div class="span3">
                                <p>Phone:</p>
                            </div>    
                            <div class="span9">
                                <input type="text" name="txtPhone" value="" id="txtPhone" class="inputtext medium">
                            </div>
                        </div>    

                        <div class="row-fluid">
                            <div class="span3">
                                <p>Email:&nbsp;*</p>
                            </div>    
                            <div class="span9">
                                <input type="text" name="txtEmail" value="" id="txtEmail" class="inputtext medium">
                                <span id="vldEmail" class="note "></span>


                            </div>
                        </div>    
                        <div class="row-fluid">
                            <div class="span3">
                                <p>Subject:&nbsp;*</p>
                            </div>    
                            <div class="span9">
                                <input type="text" name="txtSubject" value="" id="txtSubject" class="inputtext medium">
                                <span id="vldSubject" class="note "></span>


                            </div>
                        </div>    
                        <div class="row-fluid">
                            <div class="span3">
                                <p>Message:&nbsp;*</p>
                            </div>    
                            <div class="span9">
                                <textarea name="txtDescription" id="txtDescription" style="height:170px; width:475px;" class="txta"></textarea>
                                <span id="vldDescription" class="note "></span>


                            </div>
                        </div>    

                        <div class="row-fluid" style="margin-top: 20px;">
                            <div class="span3">
                                <p>Upload files:</p>
                            </div>    
                            <div class="span9">
                                <input type="file" name="uplSpec1" id="uplSpec1">
                            </div>
                        </div>    

                        <div class="row-fluid" style="margin-top: 20px;">
                            <div class="span3">
                            </div>    
                            <div class="span9 submit">
                                <span class="btn_grey"><input type="hidden" name="btnSubmit_submitValue" value="796806"><input type="submit" name="btnSubmit" value="Submit" id="btnSubmit"></span>
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </body>
</html>