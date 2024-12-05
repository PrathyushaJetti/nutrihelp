<?php ;
$meta = [
    'title' => " Contact Us - AS Nutri Help | In Hyderabad",
    'description' => "Contact AS Nutri Help for expert guidance on personalized diet plans, weight management, diabetes care, meal planning, and achieving your health goals today!",
    'keywords' => "Contact us",


]; 
include('includes/header.php')

    ?>

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading ttm-textcolor-white">
                                <h1 class="title">Contact Us</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i> Home </a>
                                </span>
                                <span class="ttm-bread-sep"> &nbsp; :&nbsp;: &nbsp; </span>
                                <span><span class="ttm-textcolor-skincolor">Contact Us</span></span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!--contact-top-section-->
        <section class="ttm-row contact-top-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="featured-icon-box without-icon ttm-bgcolor-skincolor spacing-11">
                                    <div class="featured-title">
                                        <h5 class="mb-15">Location </h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p><b>Address:</b>Raheem Villa, 2nd Floor Road No 3 & 5,
                                            Opposite MJ College, Near IVRCL, Banjara Hills,
                                            Hyderabad, Telangana</p>
                                            
                                            
                                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-white btn-inline mb-10 ttm-btn-underline" href="#">View More</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div><!--roe end-->
            </div>
        </section>
        <!--contact-top-section end-->
        <!--contact-form-section-->
        <section class="ttm-row contact-form-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="pt-50">
                            <h3 class="font-23">Contact Us. </h3>
                            <p>Reach out to AS Nutri Help for personalized diet plans and expert nutrition guidance tailored to your health and wellness goals.</p>
                            <div class="row mt-15">
                                <div class="col-md-12">
                                    <p>Email: <a href="mailto:support@asnutrihelp.com">support@asnutrihelp.com</a></p>
                                    <p>Ph: <a href="tel:+011234567899">(+01) 123 456 7899</a></p>
                                    <p>Website: <a href="https://asnutrihelp.com">asnutrihelp.com</a></p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row  spacing-12 box-shadow1 ttm-bgcolor-white mb-25">
                            <div class="col-md-12">
                                <h4>Send Your Message</h4>
                                <p>Dont hesitate to send messge us, Our team will help you 24/7.</p>
                                <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" method="post" action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="your-name" type="text" value="" placeholder="Name" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="your-phone" type="text" value="" placeholder="Phone" required="required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="email" type="email" value="" placeholder="Email" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="venue" type="text" value="" placeholder="Subject" required="required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <label>
                                        <span class="text-input"><textarea name="message" rows="5" cols="40" placeholder="Tell us about your business" required="required"></textarea></span>
                                    </label>
                                    <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-round  ttm-btn-style-fill ttm-btn-bgcolor-skincolor mb-5" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--contact-form-section end-->

        <!--map-start-->
        <div class="map-wrapper">
            <div id="map_canvas"></div>
        </div>
        <!--map-end-->

    </div><!--site-main end-->

    <?php ;
 
 include('includes/footer.php')
 
     ?>
</html>