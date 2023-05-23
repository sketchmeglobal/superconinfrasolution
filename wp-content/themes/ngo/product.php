<?php 
//Template Name:product Page
 ?>
<?php get_header(); ?>


    <!-- TOP-NAV-END -->
    <!-- HERO--SECTION-BANNER--IMAGE--START -->
    <header class="position-relative">
        <div class="bg-image ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/all-new-img/product-banner-utws.png" class="img-fluid d-bnr-xs-none" alt="Cinque Terre" width="100%" height="100%">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/today/product-banner-mobile.png" class="img-fluid d-bnr-xs-show" alt="Cinque Terre" width="100%" height="100%">

        </div>
        <div class="bnr-text">
            <h3 class="bnr-drk-yello borderr">Our Products</h3>
        </div>
    </header>
    <!-- HERO--SECTION-BANNER--IMAGE--END -->
    <!-- LIST-SOCIAL-WORK-START -->
    
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-start align-items-center mt-4">
                <h2 class="text-center text-black py-3 z-index-3 me-2 fw-bold">The products manufacturing in our factory
                </h2>
                <img class="z-index-3" src="<?php echo get_template_directory_uri(); ?>/assets/image/leaf-icon-gradient.png" alt="">
            </div>
            <div class="text-justify">
                
            </div>
        </div>
    </div>

    <!-- LIST-SOCIAL-WORK-END -->
    <!-- EXECUTIVE TEAM ---- START -->
    <?php
                        $args = array('post_type' => 'products', 'post_status' => 'publish','order' => 'ASC');
                            $products = new WP_Query($args);
                            while ( $products->have_posts() ) : $products->the_post();
                             $image = get_field('product_image_field');
                          ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <!-- <div class=" py-2 bg-lightgray ">
                    <a class="py-3 text-center text-decoration-none" href="#">
                        <p class="mb-0 fw-bold text-light">Toilet cleaner</p>
                    </a>
                </div> -->
                <div class=" py-2 bg-lightgray ">

                    <p class="text-center  mb-0 fw-bold text-light"><?=the_title() ?></p>

                </div>
            </div>
        </div>
    </div>
    <!-- EXECUTIVE TEAM ---- END -->
    <!-- TOILET-CLEANER----START -->
    <div class="container my-5 mar-two">
        <div class="row">
            <div class="col-md-4 d-flex  align-items-center"><img class="img-fluid"
                    src="<?php echo $image['url']; ?>" alt=""></div>

            <div class="col-md-4 d-flex justify-content-between flex-column">
                <div class="my-2  red-line">
                    <h3 class="text-human f-siz-2ee "><?=the_title() ?></h3>
                </div>
                <div class="row text-underline">
                    <div class="col-6">
                        <p class=" fw-bold ">Quantity</p>
                    </div>
                    <div class="col-6">
                        <p class=" fw-bold"><?=get_field('products_quantity_field')?></p>
                    </div>

                </div>
                <div class="row text-underline">
                    <div class="col-6">
                        <p class=" fw-bold ">Price</p>
                    </div>
                    <div class="col-6">
                        <p class=" fw-bold"><?=get_field('product_price_field')?></p>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="py-2 d-flex d-fl-center">
                            <a class=" py-3 text-center text-decoration-none hvr-anim mrr" href="http://localhost/ngo/contact-us" target="_blank">

                                <p class="mb-0 fw-bold  button-style-right-poligon text-light py-3">
                                    Support</p>

                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex   flex-column">
                <div class="my-2 green-line">
                    <h3 class="text-sv-wild f-siz-2ee">About The Product</h3>
                </div>
                <p class="text-justify fw-bold"> <?=get_field('products_process_field')?></p>
            </div>

        </div>
    </div>
<?php endwhile; ?>
    <!-- TOILET-CLEANER----END -->
    <!-- EXECUTIVE TEAM ---- START -->
    
    <!-- WHITE-FINILE----END -->
    <!-- FOOTER-------START -->
    <?php get_footer() ?>
    <!-- FOOTER-------END -->

   