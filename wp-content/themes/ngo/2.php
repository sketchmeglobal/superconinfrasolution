<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO</title>
    <style>
.cont>div {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2em;
    color: #ffeead;

}

.cont>div>img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border: 1px solid black;
    border-radius: 13px;
}

/* Grid */
.cont {
    display: grid;
    grid-gap: 5px;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-auto-rows: 125px;
    grid-auto-flow: dense;
    /* Fill all spaces with fitted images */
}

.horizontal {
    grid-column: span 2;
}

.vertical {
    grid-row: span 2;
}

.big {
    grid-column: span 2;
    grid-row: span 2;
}

/* Media Queries */

@media screen and (min-width: 1024px) {
    .wrapper {
        width: 960px;
        margin: 0 auto;
    }
}
</style>
    <!-- STYLE.CSS==BAGLLEO -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <!-- BOOTSTRAP.STYLE.CSS==BAGLLEO -->
    <!-- <link href="<?php echo get_template_directory_uri(); ?>/https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Icon Font Stylesheet -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link href="<?php echo get_template_directory_uri(); ?>/https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
</head>
<body>
    <div class="top-nav-bg-color-darkblue">
    <div class="container py-3">
        <div class="row">
            <div class="col-md-3 col-12 mob-alg-cntr align-items-center d-flex mob-mb-3">
                <!--mdum-flex-column-->

                <a class="btn-square  hvr-color-change rounded-0 me-4 mob-icn-f-size" href="<?php echo get_template_directory_uri(); ?>/#"><i
                                class="fa-solid fa-envelope"></i></a>
                        <a class="btn-square  hvr-color-change rounded-0 me-4 mob-icn-f-size" href="<?php echo get_template_directory_uri(); ?>/#"><i
                                class="fa-solid fa-phone"></i></a>

                <!-- <div class="h-100  d-inline-flex align-items-center px-2 f-siz-3 for-mob-center">
                    <a class="text-black text-decoration-none text-light sm-f-z" href="<?php echo get_template_directory_uri(); ?>/#">
                        <div class="d-flex justify-content-center align-items-center"><i
                                class="fa-solid fa-envelope me-3"></i>
                            <div class="d-flex flex-column">
                            </div>
                        </div>

                    </a>

                </div>-->
                <a class="btn-square  hvr-color-change rounded-0 me-4 d-none-bg-bl-sm mob-icn-f-size" href="<?php echo get_template_directory_uri(); ?>/#"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a class="btn-square  hvr-color-change rounded-0 me-4 d-none-bg-bl-sm mob-icn-f-size" href="<?php echo get_template_directory_uri(); ?>/#"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a class="btn-square  hvr-color-change rounded-0 d-none-bg-bl-sm mob-icn-f-size" href="<?php echo get_template_directory_uri(); ?>/#"><i class="fa-brands fa-youtube"></i></a>

            </div>
            <div class="col-12 d-none-bg-bl-sm">
                <div class="row ">
                <a class="d-flex justify-content-center align-items-center" href="<?php echo get_template_directory_uri(); ?>/index.php"><img class="rounded-3 img-fluid" loading="lazy"
                            src="<?php echo get_template_directory_uri(); ?>/assets/image/universal-logo.jpg" alt="" width="80"></a>
                </div>
            </div>
            <div class="col-md-6 col-12 text-center d-flex justify-content-center align-items-center mob-mb-3">
                <a class="text-light text-decoration-none" href="<?php echo get_template_directory_uri(); ?>/#">
                    <h1 class="utws-f-size mb-0 fw-bold">UNIVERSAL TRUTH WELFARE SOCIETY</h1>
                </a>
            </div>
            <div class="col-md-3 col-12 d-flex justify-content-end align-items-center">
                <div class="row  d-mob-none">
                    <div class="d-inline-flex ">
                        <!-- <a class="btn-square text-pink rounded-0 me-4" href="<?php echo get_template_directory_uri(); ?>/#"><i
                        class="fa-regular fa-star-half-stroke"></i></a> -->
                        <a class="btn-square  hvr-color-change rounded-0 me-4" href="<?php echo get_template_directory_uri(); ?>/#"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a class="btn-square  hvr-color-change rounded-0 me-4" href="<?php echo get_template_directory_uri(); ?>/#"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a class="btn-square  hvr-color-change rounded-0" href="<?php echo get_template_directory_uri(); ?>/#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- SECOND-NAV-BAR -->
<div class="sticky-top bg-l-light">
<div class="container sticky-top">
    <div class="row">
        <div class="col-md-12 p-0 px-0">
            <nav class="navbar navbar-expand-lg  navbar-light sticky-top">
                <!--- bg-light-->
                <div class="container-fluid p-0 px-0">
                    <a class="navbar-brand d-mob-none" href="<?php echo get_template_directory_uri(); ?>/index.php"><img class="img-fluid" loading="lazy"
                            src="<?php echo get_template_directory_uri(); ?>/assets/image/universal-logo.jpg" alt="" width="80"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
</div>