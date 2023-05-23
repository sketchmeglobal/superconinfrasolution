
<footer class="top-nav-bg-color-darkblue pt-2">
    <div class=" py-4 ">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-12 d-flex justify-content-center align-items-center flex-column ftr-mob-mb-3">
                    <div class="ftr-logo">
                        <a class="navbar-brand" href="#"><img class="img-fluid" loading="lazy"
                                src="<?php echo get_template_directory_uri(); ?>/assets/image/universal-logo.jpg" alt="" width="80"></a>
                    </div>
                    <div class="text-center text-light mt-4">
                        <h4>UNIVERSAL TRUTH <br>WELFARE SOCIETY</h4>
                    </div>

                    <div class="d-inline-flex mt-4">
                        <?php
                        $args = array('post_type' => 'social_media_links', 'post_status' => 'publish','order' => 'ASC');
                            $social_media_links = new WP_Query($args);
                            while ( $social_media_links->have_posts() ) : $social_media_links->the_post();
                          ?>
                        <!-- <a class="btn-square text-pink rounded-0 me-4" href="#"><i
                        class="fa-regular fa-star-half-stroke"></i></a> -->
                        <a class="btn-square hvr-color-change rounded-0 me-4" href="<?=get_field('facebook_link')?>" target="_blank"><i
                                class="fa-brands fa-facebook-f"></i></a>
                         <a class="btn-square hvr-color-change rounded-0 me-4" href="<?=get_field('whatsapp_link')?>" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    <a class="btn-square hvr-color-change rounded-0 me-4" href="<?=get_field('instagram_link')?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a class="btn-square hvr-color-change rounded-0 me-4" href="<?=get_field('twitter_link')?>" target="_blank"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a class="btn-square hvr-color-change rounded-0" href="<?=get_field('youtube_link')?>" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                         <?php
                     endwhile;
                     wp_reset_postdata();
                     ?>
                    </div>
                </div>
                <div class="col-md-3 col-12 d-flex flex-column ftr-mob-mb-3" id="contct">
                    <div class=" text-light mb-3 ftr-mob-algin-cntr">
                        <h4 class="fw-bold">Contact us</h4>
                        
                    </div>
                    <?php
                        $args_con = array('post_type' => 'contacts_info', 'post_status' => 'publish');
                            $contacts_info = new WP_Query($args_con);
                            while ( $contacts_info->have_posts() ) : $contacts_info->the_post();
                          ?>
                    <div class="col-12">
                        <div class="text d-flex  align-items-center mob-justify-center mob-ftr-clm">
                            <p class="fa-solid fa-envelope text-light me-3"></p>
                            <div class="d-flex justify-content-center flex-column">
                            <p class="p-0 pb-0 m-0"><a href="mailto:<?=get_field('email_1')?>"
                                                    class="text-decoration-none text-light"><?=get_field('email_1')?></a>
                                                
                                                
                                                </p>
                                            <p><a href="mailto:<?=get_field('email_2')?>" class="text-decoration-none text-light">
                                                    <?=get_field('email_2')?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text d-flex  align-items-center mob-justify-center mob-ftr-clm">
                            <p class="fa fa-phone text-light me-3"></p>
                            <div class="d-flex justify-content-center ">
                                <p class="p-0 pb-0 m-0 me-2"><a href="tel:<?=get_field('phone_number_1')?>"
                                        class="text-decoration-none text-light">+91
                                        <?=get_field('phone_number_1')?></a></p>
                                <p><a href="tel:<?=get_field('phone_number_2')?>" class="text-decoration-none text-light">+91
                                        <?=get_field('phone_number_2')?></a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="text d-flex  align-items-center mob-justify-center mob-ftr-clm">
                            <p class="fa fa-map-marker text-light me-3"></p>
                            <div class="d-flex justify-content-center flex-column">
                            <p class="p-0 pb-0 m-0 text-light"><?=get_field('address')?></p>
                                           
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <!--  -->
                </div>
                <div class="col-md-3 col-12 text-light mob-text-center ftr-mob-mb-3">
                    <h4 class="fw-bold">Donate</h4>
                   
                    <h6 class="text-bold mt-4">NEFT / IMPS -</h6>
                    A/C Holder: JYOTI CHEMICO CORPORATION 
                    <br>A/C No.: 06760510000687
                    <br>IFSC: UCBA0000676
                    <br>Bank: UCO BANK
                    <br>Branch: B.T.ROAD BRANCH
                    
                </div>
                <div class="col-md-3 col-12 d-flex  justify-content-center align-items-center">
                    <div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/image/sp.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
          <div>
          <hr style="color:white;">
          <h5 class="text-center" style="color:white;">Registered under Indian Trusts Act</h5>
          <small class="d-block mx-auto text-light text-center"> --- Gratitude from <a href="https://sketchmeglobal.com/" target="new">Sketch Me Global</a> ---</small>
          </div>
    </div>
</footer>
    <!-- FOOTER-------END -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/svg.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/index.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/lightbox-plus-jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
</body>

</html>