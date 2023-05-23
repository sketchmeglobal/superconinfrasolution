<?php 
//Template Name:contact Page
 ?>
<?php get_header(); ?>


    <!-- NAV-BAR-START -->

    <!-- TOP-NAV -->
    
    <!-- TOP-NAV-END -->
    <!-- HERO--SECTION-BANNER--IMAGE--START -->
    <header class="position-relative">
        <div class="bg-image ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/today/contact-banner.png" class="img-fluid d-bnr-xs-none" alt="Cinque Terre"
                width="100%" height="100%">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/today/contact-banner-mobile.png" class="img-fluid d-bnr-xs-show" alt="Cinque Terre"
                width="100%" height="100%">

        </div>
        <div class="bnr-text">
            <h3 class="bnr-drk-yello borderr">Contact Us</h3>
        </div>
    </header>


    <!-- CONTACT--SECTION-START -->
 <!-- LIST-SOCIAL-WORK-START -->
 <div class="container">
        <div class="row">
            <div class="d-flex justify-content-start align-items-center mt-4">
                <h2 class="text-center text-black py-3 z-index-3 me-2 fw-bold">Support us for humanity
                </h2>
                <img class="z-index-3" src="<?php echo get_template_directory_uri(); ?>/assets/image/leaf-icon-gradient.png" alt="">
            </div>
            <div class="text-justify">
                <p>
                    Over the years many individuals, housing societies and employees of corporates have been purchasing our products. In buying our products, you also help provide livelihood to an underprivileged people. In case you wish to support by facilitating sale of our products in your place of work/ residential premises or buying our products for your personal consumption contact us
                </p>
            </div>
        </div>
    </div>

    <!-- LIST-SOCIAL-WORK-END -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <!-- <div class=" py-2 bg-lightgray ">
                    <a class="py-3 text-center text-decoration-none" href="#">
                        <p class="mb-0 fw-bold text-light">Toilet cleaner</p>
                    </a>
                </div> -->
                <div class=" py-2 bg-lightgray ">

                    <p class="text-center  mb-0 fw-bold text-light">Contact details</p>

                </div>
            </div>
        </div>

    </div>
    <!-- EXECUTIVE TEAM ---- END -->
    <!-- <div class="container">
        <div class="row">
            <div class="my-2 red-line">
                <h3 class="text-human f-siz-2ee ">Contact</h3>
            </div>
        </div>
    </div> -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <!-- <h2 class="heading-section">Contact Form</h2> -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="">
                        <div class="row mb-5">
                        <?php
                        $args_con = array('post_type' => 'contacts_info', 'post_status' => 'publish');
                            $contacts_info = new WP_Query($args_con);
                            while ( $contacts_info->have_posts() ) : $contacts_info->the_post();
                          ?>
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center text-light">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span class="fw-bold">Address:</span> <?=get_field('address')?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center text-light">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text d-flex justify-content-center">
                                        <!-- <p><span>Phone:</span> <a href="tel://1234567090" class="text-decoration-none">+91
                                        7003438229</a></p> -->
                                        <p class="fw-bold">Phone:</p>
                                        <div class="d-flex justify-content-center flex-column">
                                            <p class="p-0 pb-0 m-0"><a href="tel:<?=get_field('phone_number_1')?>"
                                                    class="text-decoration-none">+91
                                                    <?=get_field('phone_number_1')?></a></p>
                                            <p><a href="tel:<?=get_field('phone_number_2')?>" class="text-decoration-none">+91
                                            <?=get_field('phone_number_2')?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center text-light">
                                        <span class="fa-solid fa-envelope"></span>
                                    </div>
                                    <div class="text d-flex justify-content-center">
                                        <!-- <p><span>Email:</span> <a href="#"
                                                class="text-decoration-none">info@yoursite.com</a></p> -->
                                        <p class="fw-bold">Gmail :</p>
                                        <div class="d-flex justify-content-center flex-column">
                                            <p class="p-0 pb-0 m-0"><a href="mailto:<?=get_field('email_1')?>"
                                                    class="text-decoration-none"><?=get_field('email_1')?></a></p>
                                            <p><a href="mailto:<?=get_field('email_2')?>" class="text-decoration-none">
                                           <?=get_field('email_2')?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <!-- <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center text-light">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Website</span> <a href="#"
                                                class="text-decoration-none">yoursite.com</a></p>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                        <div class="container p-0 mt-4">
                                <div class="row justify-content-center pt-5">
                                    <div class="col-md-12 p-0 ">
                                        <div class=" py-2 bg-lightgray ">

                                            <p class="text-center  mb-0 fw-bold text-light">Donation Details</p>

                                        </div>
                                    </div>
                                </div>

                        </div>
   <div class="container">
<div class="row mt-3">
   <div class="col-md-6 col-12">
     <div class="row justify-content-center align-items-center">
       <div class="col-md-9 border rounded border-3 bbox-shadow px-4 py-3">
             <h4 class="fw-bold">Donate</h4>
                   
                    <h6 class="text-bold mt-4">NEFT / IMPS -</h6>
                    A/C Holder: JYOTI CHEMICO CORPORATION 
                    <br>A/C No.: 06760510000687
                    <br>IFSC: UCBA0000676
                    <br>Bank: UCO BANK
                    <br>Branch: B.T.ROAD BRANCH
                    
                    
       </div>
     </div>
   </div>
   <div class="col-md-6 col-12">
<div class="row justify-content-center align-items-center">
       <div class="col-md-9 border rounded border-3 bbox-shadow px-4 py-3">
             <h4 class="fw-bold">Donate</h4>
                   
                    <h6 class="text-bold mt-4">NEFT / IMPS -</h6>
                    A/C Holder: ANUBHAB ENTERPRISE 
                    <br>A/C No.: 753201010050479
                    <br>IFSC: UBIN0575321
                    <br>Bank: UNION BANK
                    <br>Branch: BELGHARIA BRANCH
                    
       </div>
     </div>
   </div>

</div>
   </div>
                        <div class="row no-gutters justify-content-center align-items-center py-5">

                            <div class="col-md-12 d-flex align-items-stretch">

                                <iframe style="border:0; width:100%;"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.7381016983804!2d88.37487128550958!3d22.663551325558878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89c4c6d10077f%3A0xf3c88867c57e2f5a!2sKamarhati%20Municipality!5e0!3m2!1sen!2sin!4v1678361967617!5m2!1sen!2sin" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                    width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <!-- <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                  
                                    <div class="my-2 ">
                                        <h3 class="text-human f-siz-2ee ">Fill the form</h3>
                                    </div>
                                    <div id="form-message-warning" class="mb-4"></div>
                                   
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                        placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30"
                                                        rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                               
                                                <div class="py-2 d-flex d-fl-center">
                                                    <a class=" py-3 text-center text-decoration-none hvr-anim" href="#">

                                                        <p
                                                            class="mb-0 fw-bold  button-style-right-poligon text-light px-5 py-3">
                                                            Submit</p>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CONTACT--SECTION-END -->





    <!-- FOOTER-------START -->
    <?php get_footer(); ?>
    <!-- FOOTER-------END -->

   