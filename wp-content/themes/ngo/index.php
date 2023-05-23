<?php 
//Template Name:Home
 ?>

<section id="attention-section">
    <div class="container-fluid  bg-darkblue">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="mt-2">
                        <!-- <a href="#" class="text-decoration-none bg-yellow"> </a> -->
                        <h4 class="border p-1 rounded text-danger text-center bg-yellow fw-bolder attention">
                            Attention
                        </h4>

                    </div>
                </div>
                <div class="col-md-10 d-flex justify-content-center align-items-center text-light">


                    <div class="ticker__viewport">
                        <ul class="ticker__list" data-ticker="list">
                           <!--  <li class="ticker__item" data-ticker="item"><a href="https://utws.org"><i
                                        class="material-icons" style="position: relative; top: 5px;line-height: 0;">
                                    </i>
                                    <a href="https://utws.org">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, aliquam?</a>
                                </a></li> -->
                                <?php
                        $args = array('post_type' => 'attention_board', 'post_status' => 'publish','order' => 'ASC');
                            $attention_board = new WP_Query($args);
                            while ( $attention_board->have_posts() ) : $attention_board->the_post();
                          ?>
                            <li class="ticker__item" data-ticker="item"><a href="<?=get_field('attention_url')?>" target="_blank"><?=the_title() ?></a> </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>

                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_header(); ?>

    <!-- TOP-NAV-END -->


    <!-- NAV-BAR-END -->

    <!-- CAROUSUL ----START -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-page-banner-1.png" class=" w-100 d-bnr-xs-none" alt="...">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/today/mobile-slider-1.png" class=" w-100 d-bnr-xs-show" alt="...">

                <div class="carousel-caption  d-md-block">
                    <h5 class="teaser__title">Great Soul For Good Work</h5>
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="hero-rh-hnd fw-bold mb-0 borderr">Reach Your Hand</p>
                    </div>
                    <div class="container mrg-tp-5">
                        <div class="row mob-flx-cl-rivarsee">
                            <div class="col-md-6 col-6">
                                <div class="py-2 d-flex d-fl-riverse buto-mb">
                                    <a id="mob-donate" class=" py-3 text-center text-decoration-none hvr-anim"
                                    href="http://localhost/ngo/contact-us" target="_blank">

                                        <p class="mb-0 fw-bold  button-style-left-poligon text-light   py-3">Donate
                                        </p>

                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="py-2 d-flex d-fl-start buto-mb">
                                    <a id="mob-Join" class=" py-3 text-center text-decoration-none hvr-anim"
                                    href="http://localhost/ngo/contact-us" target="_blank">

                                        <p class="mb-0 fw-bold  button-style-right-poligon text-light py-3">Join
                                            Hands</p>

                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-page-banner-1.png" class=" w-100 d-bnr-xs-none" alt="...">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/today/mobile-slider-1.png" class=" w-100 d-bnr-xs-show" alt="...">

                <div class="carousel-caption  d-md-block">
                    <h5 class="teaser__title">Great Soul For Good Work</h5>
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="hero-rh-hnd fw-bold mb-0 borderr">Reach Your Hand</p>
                    </div>
                    <div class="container mrg-tp-5">
                        <div class="row mob-flx-cl-rivarsee">
                            <div class="col-md-6 col-6">
                                <div class="py-2 d-flex d-fl-riverse buto-mb">
                                    <a id="mob-donate" class=" py-3 text-center text-decoration-none hvr-anim"
                                        href="contact.php">

                                        <p class="mb-0 fw-bold  button-style-left-poligon text-light   py-3">Donate
                                        </p>

                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="py-2 d-flex d-fl-start buto-mb">
                                    <a id="mob-Join" class=" py-3 text-center text-decoration-none hvr-anim"
                                        href="contact.php">

                                        <p class="mb-0 fw-bold  button-style-right-poligon text-light py-3">Join
                                            Hands</p>

                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-page-banner-1.png" class=" w-100 d-bnr-xs-none" alt="...">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/today/mobile-slider-1.png" class=" w-100 d-bnr-xs-show" alt="...">

                <div class="carousel-caption  d-md-block">
                    <h5 class="teaser__title">Great Soul For Good Work</h5>
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="hero-rh-hnd fw-bold mb-0 borderr">Reach Your Hand</p>
                    </div>
                    <div class="container mrg-tp-5">
                        <div class="row mob-flx-cl-rivarsee">
                            <div class="col-md-6 col-6">
                                <div class="py-2 d-flex d-fl-riverse buto-mb">
                                    <a id="mob-donate" class=" py-3 text-center text-decoration-none hvr-anim"
                                        href="contact.php">

                                        <p class="mb-0 fw-bold  button-style-left-poligon text-light   py-3">Donate
                                        </p>

                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="py-2 d-flex d-fl-start buto-mb">
                                    <a id="mob-Join" class=" py-3 text-center text-decoration-none hvr-anim"
                                        href="contact.php">

                                        <p class="mb-0 fw-bold  button-style-right-poligon text-light py-3">Join
                                            Hands</p>

                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- CAROUSUL ----END -->

    <!-- ABOUT-OUR-ORGANISATION-----START -->
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center mt-4">
                <h2 class="text-center text-black py-3 z-index-3 me-2 fw-bold mobile-f-siz">About our organisation</h2>
                <img class="z-index-3 img-fluid mob-leaf-size" src="<?php echo get_template_directory_uri(); ?>/assets/image/leaf-icon-gradient.png" alt="">
            </div>
            <div class="text-center">
                <p>
                    ‘UNIVERSAL TRUTH WELFARE SOCIETY’ is a non-profit Charity Organization, Universal Truth Welfare Society has transformed lives in every dimension spoken. From eliminating the root problems of education by providing free education and meals to providing special guided education to the deaf and dumb. 
                </p>
            </div>
            <div class="col-md-6 col-12">
                <!-- <a class=" py-3 text-center text-decoration-none" href="#">
                    <div class="py-2 bg-lightgray">
                        <p class="mb-0 fw-bold text-light">Mission</p>
                    </div>
                </a> -->
                <div class=" py-2 bg-lightgray ">

                    <p class="text-center  mb-0 fw-bold text-light">Mission</p>

                </div>
                <p class="text-justify mt-4">
                    We leverage existing community and Government resources to ensure that all childrens are in school and learning well.
                </p>
                <div>

                    <div class="py-2 show-more-text-color">
                        <a class=" py-3 text-center text-decoration-none show-more-text-color" data-bs-toggle="modal"
                            data-bs-target="#staticBackdropp" href="#">

                            <p class="mb-0 fw-bold ">show more</p>

                        </a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdropp" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-overlay"></div>
                            <div class="modal-content">
                                <!-- BUTTON -->
                                <div class="close-button-style justify-content-end button-style-modal">
                                    <!-- <button type="button"
                                            class="btn-close text-dark z-index-20 bg-light" data-bs-dismiss="modal"
                                            aria-label="Close"></button> -->
                                    <button type="button" class="text-light btn-close btn-close-white"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!--fast-modal-->
                                <div class="modal-header">
                                    <div class="d-flex justify-content-center align-items-center  modal-title"
                                        id="staticBackdropLabel">
                                        <h2 class="text-center text-black py-3 z-index-3 me-2 fw-bold">Mission
                                        </h2>
                                        <img class="z-index-3" src="<?php echo get_template_directory_uri(); ?>/assets/image/leaf-icon-gradient.png" alt="">
                                    </div>

                                </div>
                                <div class="modal-body">
                                    <p class="text-justify text-clack z-index-20">We leverage existing community and Government resources to ensure that all childrens are in school and learning well.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-12">
                <!-- <a class=" py-3 text-center text-decoration-none" href="#">
                    <div class="py-2 bg-lightgray">
                        <p class="mb-0 fw-bold text-light">Vission</p>
                    </div>
                </a> -->
                <div class=" py-2 bg-lightgray ">

                    <p class="text-center  mb-0 fw-bold text-light">Vission</p>

                </div>
                <p class="text-justify mt-4">
                    We aim to achieve behavioural, social and economic transformation for all poor people towards an India where all people have equal opportunities to access quality life.
                </p>
                <div>
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Launch static backdrop modal
                    </button> -->
                    <div class="py-2 show-more-text-color">
                        <a class=" py-3 text-center text-decoration-none show-more-text-color" data-bs-toggle="modal"
                            data-bs-target="#staticBackdropop" href="#">

                            <p class="mb-0 fw-bold ">show more</p>

                        </a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdropop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-overlay"></div>
                            <div class="modal-content">
                                <!-- BUTTON -->
                                <div class="close-button-style justify-content-end button-style-modal">
                                    <!-- <button type="button"
                                            class="btn-close text-dark z-index-20 bg-light" data-bs-dismiss="modal"
                                            aria-label="Close"></button> -->
                                    <button type="button" class="text-light btn-close btn-close-white"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!--fast-modal-->
                                <div class="modal-header">
                                    <div class="d-flex justify-content-center align-items-center  modal-title"
                                        id="staticBackdropLabel">
                                        <h2 class="text-center text-black py-3 z-index-3 me-2 fw-bold">Vision
                                        </h2>
                                        <img class="z-index-3" src="<?php echo get_template_directory_uri(); ?>/assets/image/leaf-icon-gradient.png" alt="">
                                    </div>

                                </div>
                                <div class="modal-body">
                                    <p class="text-justify text-clack z-index-20">We aim to achieve behavioural, social and economic transformation for all girls towards an India where all children have equal opportunities to access quality education.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal fade" id="staticBackdropop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-overlay"></div>
                            <div class="modal-content">
                             
                                <div class="modal-header">
                                  
                                    <div class="d-flex justify-content-center align-items-center  modal-title"
                                        id="staticBackdropLabel">
                                        <h2 class="text-center text-black py-3 z-index-3 me-2 fw-bold">Vission
                                        </h2>
                                        <img class="z-index-3" src="<?php echo get_template_directory_uri(); ?>/assets/image/leaf-icon-gradient.png" alt="">
                                    </div>
                                    <div class="close-button-style"> <button type="button"
                                            class="btn-close text-light z-index-20 bg-light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <p class="text-justify text-clack z-index-20">Lorem ipsum dolor sit amet
                                        consectetur, adipisicing elit.
                                        Repellendus quibusdam, ut porro, ipsa nesciunt, aut cumque voluptatem natus quas
                                        sequi omnis eos! Ad, nostrum aliquid amet assumenda doloribus illo rerum? dolor
                                        sit amet consectetur, adipisicing elit.
                                        Repellendus quibusdam, ut porro, ipsa nesciunt, aut cumque voluptatem natus quas
                                        sequi omnis eos! Ad, nostrum aliquid amet assumenda doloribus illo rerum?</p>
                                </div>

                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class=" py-2 bg-lightgray ">

                    <p class="text-center  mb-0 fw-bold text-light">Raise your hand for humanity</p>

                </div>
                <!-- <div class=" py-2 bg-lightgray ">
                    <a class="py-3 text-center text-decoration-none" href="#">
                        <p class="mb-0 fw-bold text-light">Raise your hand for humanity</p>
                    </a>
                </div> -->

            </div>
        </div>
    </div>


    <!-- ABOUT-OUR-ORGANISATION-----END -->
    <!--RAISE YOUR HAND SECTION-START  -->
    <div class="line-container-main my-5">
        <!-- <div class="line_container">
            <svg viewBox="0 0 369 592" fill="none" preserveAspectRatio="xMidYMid meet">
                <path id="mypath"
                    d="M366.538 0V100.661C367.206 104.998 365.838 113.597 355.027 113.291H207.881L190.364 124.773C188.362 126.815 183.157 129.672 178.352 124.773L168.342 117.884H188.362C190.197 117.246 192.766 115.434 188.362 113.291H180.855C179.02 112.653 176.45 110.842 180.855 108.698H202.876L190.364 100.278C189.196 99.6401 186.26 98.747 183.858 100.278L163.337 113.291H36.2115H15.1907C10.5194 112.781 1.37706 114.363 2.17785 124.773"
                    stroke="#E09B9B" stroke-width="4" />
            </svg>
        </div> -->
        <div class="container">
            <div class="row">

                <div class="col-md-12 py-3 bdr-1">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/image/new-ngo-icn-img/humanity-icon-image.png" alt="">
                        </div>
                        <div class="col-md-6 d-flex justify-content-center  flex-column text-justify flex-column">
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <div class="my-2">
                                        <h3 class="text-human f-siz-3ee">Humanity</h3>
                                    </div>
                                    <p class="fw-bold">Humanity is an integral part of life which tells that to help other living beings, try to understand others and realize their problems with our perspective and try to help them. For expressing humanity, you don’t need to be a well-off person; everyone can show humanity by helping someone or sharing with them, part of our ration. Every religion in this world tells us about humanity, peace and love.

But humans have always indulged in acts that defy humanity, but we, as a generation, have to rise and strive to live in a world where everybody is living a fair life. And we can attain by acts of humanity. In last I would only say to any religion you belong to be a human first be a human lover strive for humanity as every religion teach us humanity and share your life with others as life is all about living for others and serving humanity that is why “no religion is higher than Humanity.”
                                    </p>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
                <!-- oooooooppp---111 -->
                <div class="col-md-12 py-3 bdr-2">
                    <div class="row mob-flex-cl-reverse">

                        <div class="col-md-6 d-flex justify-content-center text-justify flex-column">
                            <div class="row justify-content-end">
                                <div class="col-md-10 col-12">
                                    <div class="my-2">
                                        <h3 class="text-sv-wild f-siz-3ee">Save wild</h3>
                                    </div>
                                    <p class="fw-bold">The collection of flora and fauna that live in the wild is called wildlife. Wildlife is a vital part of the earth. But now a day the wildlife is continuously ruined by the human being and as a result of that, there arise some environmental issues before us.
The destruction of wildlife is mainly caused by deforestation. As a result of deforestation, we not only cause harm to trees but also a lot of wild animals, birds, etc. lose their natural dwelling place. Some wild animals are killed for their meat, skin, teeth, etc. Some superstitious beliefs are responsible for that. The government takes various steps to protect wildlife. But still, wildlife is in threat across the globe.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/image/new-ngo-icn-img/save-wild-icon-image.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- oooooopppp------22222 -->
                <div class="col-md-12 py-3 bdr-3">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/image/new-ngo-icn-img/save-water-icon-image.png" alt="">
                        </div>
                        <div class="col-md-6 d-flex justify-content-center  text-justify flex-column">
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <div class="my-2">
                                        <h3 class="text-sav-wtr f-siz-3ee">Save water</h3>
                                    </div>
                                    <p class="fw-bold">Water is the most critical asset. It is a fundamental element for every life on Earth, may it be flora or fauna. Without water, no life can survive, and Earth will be as dry as a rock. Water is additionally fundamental for purposes of irrigation and essential ordinary works. Today, we without realizing the importance of wastewater. We take a negligible attempt to spare water. Water in social events, programs, and festivities, highly wasted. In houses likewise, water is wasted each day. We have a terrible habit of keeping the tap running while we brush, shave, wash, or do some other everyday action. So different efforts must be made to save water.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-12 py-3 bdr-4">
                    <div class="row mob-flex-cl-reverse">

                        <div class="col-md-6 d-flex justify-content-center text-justify flex-column">
                            <div class="row justify-content-end">
                                <div class="col-md-10 col-12">
                                    <div class="my-2">
                                        <h3 class="text-sprt-cldn f-siz-3ee">Support children</h3>
                                    </div>
                                    <p class="fw-bold">Poverty is defined as the financial condition of a person, insufficient to sustain the vital needs of his/her own family. Any person of family which is unable to provide a square meal to the members or educate its children for the want of money is termed as poor and suffering from poverty. It is curse to the society and restricts the economical and social growth of a nation. Poverty eradication in a highly populous country as India could be a herculean task; though, it could be achieved through will power of the government and society. In the world scenario, poverty is great concern in the developing, under developed and the third world nations. Poverty also results in several diseases, law and order situations and very low standard of living.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/image/new-ngo-icn-img/support-children-icon-image.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--RAISE YOUR HAND SECTION-END  -->


    <!-- LATEST----PROJECT-----START -->
    <div
        class="container-fluid my-5 latest-project-bg-img d-flex justify-cotent-center flex-column align-items-center overflow-hidden ">
        <div class="d-flex justify-content-center align-items-center mt-4">
            <h2 class="text-center text-light py-3 z-index-3 me-2 fw-bold mobile-f-siz">Latest project</h2>
            <img class="z-index-3 img-fluid mob-leaf-size" src="<?php echo get_template_directory_uri(); ?>/assets/image/leaf-icon-gradient.png" alt="">
        </div>
        <div class="text-light text-center z-index-3 fw-bold">
        </div>
        <div class="container my-3 z-index-3">
            <!-- <h1 class="text-center fw-bold display-1 mb-5">Owl <span class="text-danger">Carousel</span></h1> -->
            <div class="row">
                <div class="col-12 m-auto ">
                    <div class="owl-one owl-carousel owl-theme">
                        <?php
                        $args = array('post_type' => 'project_image_slider', 'post_status' => 'publish','order' => 'ASC');
                            $project_image_slider = new WP_Query($args);
                            while ( $project_image_slider->have_posts() ) : $project_image_slider->the_post();
                             $image = get_field('project_image_slider_field');
                          ?> 
                        <div class="item item-bdr-top-radius margin">
                            <div class="card border-0 shadow">
                                <img src="<?php echo $image['url']; ?>" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4><?=the_title() ?></h4>

                                        <!-- <a href="#" class="btn btn-primary">view full story</a> -->
                                        <div class="py-2 d-flex d-fl-center">
                                            <a class=" py-3 text-center text-decoration-none hvr-anim" href="http://localhost/ngo/gallery" target="_blank" >

                                                <p class="mb-0 fw-bold  button-style-right-poligon text-light  py-3">
                                                    View images</p>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>





    <!-- LATEST----PROJECT-----END -->
    <!-- ACTIVITIES OF THE SOCITY  -----START   -->

    <div class="container text-center  my-5">
        <div class="d-flex justify-content-center align-items-center">
            <h2 class="text-center text-black py-2 z-index-3 me-2 fw-bold mobile-f-siz">Product ategory</h2>
            <img class="z-index-3 img-fluid mob-leaf-size" src="<?php echo get_template_directory_uri(); ?>/assets/image/leaf-icon-gradient.png" alt="">
        </div>
        <!-- <h4>Activities of the socity</h4> -->
        <p class="fw-bold lt-pgt-f-size-mob">In buying our products, you also help provide livelihood to an underprivileged people.</p>
        <div class="row pt-5 flx-no-rp">
           <div class="owl-three owl-carousel owl-theme">
               <?php
                        $args = array('post_type' => 'product_slider', 'post_status' => 'publish','order' => 'ASC');
                            $product_slider = new WP_Query($args);
                            while ( $product_slider->have_posts() ) : $product_slider->the_post();
                             $image_pro = get_field('product_slider_image');
                          ?>
                <div class="item"> <div class="d-flex flex-column justify-content-center align-items-center"><div><img class="img-fluid" src="<?php echo $image_pro['url']; ?>" alt="" width="80"></div>  <h5 class="fw-bold mt-3 prdt-mob-size"><?=the_title(); ?></h5></div>
                    </div>
                    <?php endwhile; ?>
            </div>
        </div>
        <div class="row">
            <div class="pt-4 d-flex d-fl-center z-index-3">
                <a class=" py-3 text-center text-decoration-none hvr-anim" href="http://localhost/ngo/product" target="_blank">

                    <p class="mb-0 fw-bold  button-style-right-poligon text-light  py-3">
                        More Products</p>

                </a>
            </div>
        </div>
    </div>

    <!-- ACTIVITIES OF THE SOCITY  -----END   -->
    <!-- AN APPELE -------START -->
    <div class="container-fluid-img py-5">

        <div class="container py-2">
            <div class="row an-app">
                <div class="d-flex justify-content-center align-items-center pb-5">
                    <h2 class="text-center text-light py-2 z-index-3 me-2 fw-bold mobile-f-siz">An appeal</h2>
                    <img class="z-index-3 img-fluid mob-leaf-size" src="<?php echo get_template_directory_uri(); ?>/assets/image/leaf-icon-gradient.png" alt="">
                </div>

                <div class="col-md-6 col-12">
                    <h4 class="text-center z-index-3 text-light fw-bolder">Support us by</h4>
                    <h4 class="text-center z-index-3 text-green  monotype-coursiv fw-bold">Purchasing a product</h4>
                    <p class="text-justify  z-index-3 text-light  px-2"></p>

                    <div class="py-2 d-flex d-fl-center z-index-3">
                        <a class=" py-3 text-center text-decoration-none hvr-anim" href="http://localhost/ngo/contact-us" target="_blank">

                            <p class="mb-0 fw-bold  button-style-right-poligon text-light  py-3">
                                Support Us</p>

                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <h4 class="text-center z-index-3 text-light fw-bolder">Join hands to</h4>
                    <h4 class="text-center z-index-3 text-op  monotype-coursiv fw-bold">Be a distributor</h4>
                    

                    <div class="py-2 d-flex d-fl-center z-index-3">
                        <a class=" py-3 text-center text-decoration-none hvr-anim" href="http://localhost/ngo/contact-us" target="_blank">

                            <p class="mb-0 fw-bold  button-style-right-poligon text-light  py-3">
                                Support Us</p>

                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- AN APPELE -------END -->

    <!-- GALLERY  ----- START -->
    <section id="gallery-section">
        <div class="container pb-4">
            <div class="d-flex justify-content-center align-items-center">
                <h2 class="text-center text-black py-5 z-index-3 me-2 fw-bold mobile-f-siz">Gallery</h2>
                <img class="z-index-3 img-fluid mob-leaf-size" src="<?php echo get_template_directory_uri(); ?>/assets/image/leaf-icon-gradient.png" alt="">
            </div>
            <div class="row">
                <div class="owl-two owl-carousel owl-theme">
                    <?php
                    $args_img = array('post_type' => 'gallery_slider', 'post_status' => 'publish','order' => 'ASC');
                            $gallery_slider = new WP_Query($args_img);
                            while ( $gallery_slider->have_posts() ) : $gallery_slider->the_post();
                             $image = get_field('gallery_image_slider_field');
                          ?> 
                    <div class="item"> <img class="rounded-5 img-fluid" src="<?php echo $image['url']; ?>" width="80">

                        <!-- <div class="owl-dots">
                            <button role="button" class="owl-dot active"><span></span></button>
                            <button role="button" class="owl-dot"><span></span></button>
                            <button role="button" class="owl-dot"><span></span></button>
                        </div> -->
                    </div>
                    <?php endwhile; ?>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- GALLERY  -----END -->

    <!-- FOOTER-------START -->
    <?php get_footer(); ?>
    <!-- FOOTER-------END -->