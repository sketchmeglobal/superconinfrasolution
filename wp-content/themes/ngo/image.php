<?php 
//Template Name:image Page
 ?>
<?php get_header(); ?>
    <header class="position-relative">
        <div class="bg-image ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/today/image-gallery-banner.png" class="img-fluid d-bnr-xs-none" alt="Cinque Terre"
                width="100%" height="100%">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/today/image-gallery-banner-mobile.png" class="img-fluid d-bnr-xs-show"
                alt="Cinque Terre" width="100%" height="100%">

        </div>
        <div class="bnr-text">
            <h3 class="bnr-drk-yello borderr">Gallery</h3>
        </div>
    </header>


    <!-- GALLERY-START -->
    <!-- opop -->
    <div class="container">

    <div class="d-flex justify-content-center align-items-center my-5">
                <h2 class="text-center text-black py-3 z-index-3 me-2 fw-bold">Gallery
                </h2>
                <img class="z-index-3" src="<?php echo get_template_directory_uri(); ?>/assets/image/leaf-icon-gradient.png" alt="">
            </div>
    
        <div class="row">
            <?php
                        $args = array('post_type' => 'gallery_images', 'post_status' => 'publish','order' => 'DATE');
                            $gallery_images = new WP_Query($args);
                            while ( $gallery_images->have_posts() ) : $gallery_images->the_post();
                             $image = get_field('gallery_images_field');
                          ?>
            <div class="col-md-3 col-6 mb-3"><a class="example-image-link" href="<?php echo $image['url']; ?>"

                    data-lightbox="example-1"><img class="img-fluid" class="example-image img-fluid"

                        src="<?php echo $image['url']; ?>" alt="image-1" w="100" /></a></div>
                  <?php endwhile; ?>


        </div>
    </div>
    <!-- opop-END -->
    <div class="container ">
        <div class="row justify-content-center">
            <!-- <div class="col-md-2 col-6 "> <a class="example-image-link" href="<?php echo get_template_directory_uri(); ?>/assets/image/new-gallery/1.jpeg"
                    data-lightbox="example-1"><img class="img-fluid" class="example-image img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/image/new-gallery/1.jpeg"
                        alt="image-1" w="100" /></a>
            </div>
            <div class="col-md-2 col-6 ">
                <a class="example-image-link" href="<?php echo get_template_directory_uri(); ?>/assets/image/new-gallery/2.jpeg" data-lightbox="example-1"><img
                        class="example-image img-fluid img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/image/new-gallery/2.jpeg" alt="image-1" w="100" /></a>
            </div>
            <div class="col-md-2 col-6 h-50">
                <a class="example-image-link" href="<?php echo get_template_directory_uri(); ?>/assets/image/gallery-1.png" data-lightbox="example-1"><img
                        class="example-image img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/image/gallery-1.png" alt="image-1" /></a>
            </div> -->

        </div>
        <!-- <div class="row">
            <div class="col-md-12 text-center my-4">
                <a href="<?php echo get_template_directory_uri(); ?>/https://dmgmch.edu.in/gallery" class="btn btn-warning">View more...</a>
            </div>
        </div> -->
    </div>
    <!-- NEW -->
    <!-- FOOTER-------START -->
    <?php get_footer(); ?>
    <!-- FOOTER-------END -->

    
