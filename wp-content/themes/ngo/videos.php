<?php 
//Template Name:video Page
?>
<?php get_header(); ?>
    <!-- opop -->
    <header class="position-relative">
        <div class="bg-image ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/today/video-gallery-banner.png" class="img-fluid d-bnr-xs-none" alt="Cinque Terre"
                width="100%" height="100%">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/today/video-gallery-banner-mobile.png" class="img-fluid d-bnr-xs-show"
                alt="Cinque Terre" width="100%" height="100%">

        </div>
        <div class="bnr-text">
            <h3 class="bnr-drk-yello borderr">Videos</h3>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-start align-items-center mt-4">
                <h2 class="text-center text-black py-3 z-index-3 me-2 fw-bold mobile-f-siz">Some videos from our
                    previous project</h2>
                <img class="z-index-3 img-fluid mob-leaf-size" src="<?php echo get_template_directory_uri(); ?>/assets/image/leaf-icon-gradient.png" alt="">
            </div>
            <div class="text-justify">
                
            </div>
        </div>
    </div>
    <!-- opop-END -->

    <div class="container my-5">
        <div class="row">
        <?php
                        $args = array('post_type' => 'videos', 'post_status' => 'publish','order' => 'DATE');
                            $videos = new WP_Query($args);
                            while ( $videos->have_posts() ) : $videos->the_post();
                          ?>
            <div class="col-md-4 col-12">
                <div class="card  text-white border-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/op-Nagative image.png" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center text-center">
                        <p class="card-text text-light text-center"><?=the_title() ?></p>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <p class="card-text"><a class="text-center text-decoration-none" href="<?=get_field('videos_url_field')?>" target="_blank"><?=the_title() ?></a></p>
                </div>
            </div>
            <?php endwhile; ?>
<!--  -->
        </div>
    </div>
    <!-- NEW -->
    <!-- FOOTER-------START -->
    <?php get_footer(); ?>
    <!-- FOOTER-------END -->

    
