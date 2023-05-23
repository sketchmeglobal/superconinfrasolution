<?php get_header(); ?>
<header class="position-relative">
        <div class="bg-image ">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="w-100">
        </div>
        <div class="bnr-text">
            <h3 class="bnr-drk-yello borderr">Contact Us</h3>
        </div>
    </header>
<?php the_content(); ?>
<?php get_footer(); ?>