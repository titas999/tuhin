<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>
    <section id="hero-section">
        <div class="container">
            <div class="hero-row-outer">
                <p class="hero-w-massage">Welcome to My Portfolio</p>

                <div class="hero-social">
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/111.png" alt="WPequal"
                     class="hero-personal-img img-fluid">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-white hero-title">I am Mesbah-ul-Karim</h2>
                    <h2 class="hero-job">Wordpress Developer </h2>
                    <p class="text-white hero-sub-text">I'm a
                        Political man with extensive experience for over 25
                        years. <br> My
                        xpertise
                        is to create and
                        design.
                    </p>
                    <a href="#" class="btn btn-medium">Contact Us</a>
                </div>
            </div>
        </div>
    </section>


    <!--
    ========================================
        About Area
    ========================================
    -->
    <section id="about-section" class="p-100 pb-5 bg-one-dark about-layout-two">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 text-center bg-zig">
                    <div class="zig-zag">
                        <div class="zig-zag-item item-one"></div>
                        <div class="zig-zag-item item-two"></div>
                        <div class="zig-zag-item item-three"></div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-7.png" alt="Signature"
                         class="img-fluid">
                </div>
                <div class="col-md-6">
                    <p class="color-base">ABOUT ME!</p>
                    <h2 class="text-white mb-4">My Real Life is Up to You?
                        I am a <span class="color-base">Wordpress Developer</span>
                    </h2>
                    <p>I’m a web developer and graphic designer living in New York, USA. I spend my days with my hands
                        in many different areas of web development from back end programming to front end engineering.
                    </p>
                    <div class="row">
                        <div class="col-md-6 about-bullet">
                            <ul class="bullet-check">
                                <li>Different of web development</li>
                                <li>Gun Violence Prevention</li>
                                <li>Eiusmod tempor incidid labore</li>
                            </ul>
                        </div>
                        <div class="col-md-6 about-bullet">
                            <ul class="bullet-check">
                                <li>Graphic designer living</li>
                                <li>Jiusmod tempor incididunt</li>
                            </ul>
                        </div>
                    </div>

                    <div class="wrap-button mt-50">
                        <a href="#" class="btn btn-medium btn-inline btn-fill mr-4">Cv Download</a>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sig.png" alt="Signature"
                             class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="about-info-wrap p-5">
                <div class="about-info p-5">
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="text-white text-uppercase mb-4">Contact Now</h6>
                            <p><i class="fas fa-envelope-open-text mr-2 color-base"></i>exampol@gmail.com</p>
                            <p><i class="fas fa-phone-alt mr-2 color-base"></i>+012 345 678 910</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-white text-uppercase mb-4">Address</h6>
                            <p><i class="fas fa-map-marker-alt mr-2 color-base"></i>123 West 12th Street, Suite 456
                                New York, NY 123456

                            </p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-white text-uppercase mb-4">Social Media</h6>
                            <p><i class="far fa-comment-alt mr-2 color-base"></i>Also find us social media below</p>

                            <div class="inline-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--
    ========================================
        Service Area
    ========================================
    -->
    <section id="service-section" class="p-100 bg-dark-light">
        <div class="container">

            <div class="sec-heading-wrap text-center mb-60">
                <h2>MY Service</h2>
                <span class="sec-divider">
                    <span class="sec-dot"></span>
                    <span class="sec-dot-big"></span>
                    <span class="sec-dot"></span>
                </span>
            </div>

            <div class="row">
                <?php
                $tuhin_args = array(
                    'post_type' => 'service',
                    'posts_per_page' => '3',
                );
                $query = new WP_Query($tuhin_args);
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <div class="col-md-4">
                        <div class="single-service-wrap item-one text-center">
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                            ?>
                            <h4 class="text-white flex-order"><?php the_title(); ?></h4>
                            <p class="flex-order"><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </section>

    <!--
    ========================================
        Story & Newsletter Area
    ========================================
    -->
    <section id="story-section" class="p-100 bg-one-dark">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="single-story-wrap">
                        <p class="color-base">MY Storis!</p>
                        <h2 class="text-white">Some History of My Life, 1980 - 2019</h2>
                        <span class="sec-divider">
                            <span class="sec-dot"></span>
                            <span class="sec-dot-big"></span>
                            <span class="sec-dot"></span>
                        </span>
                        <p class="my-story-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incidi labore
                            et dolore.</p>

                        <div class="media mt-50">
                            <div class="user-avatar ml-2 mr-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-8.png"
                                     class=" rounded-circle" alt="Onuc - WPequal">
                            </div>
                            <div class="media-body align-self-center">
                                <h4 class="mt-0 color-base">Date Of Brith</h4>
                                <p class="text-white">25, March 1970</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="story-time-line">
                        <div class="d-flex timeline-item"><span class="text-white fixed-height">1980</span> Lorem ipsum
                            dolor sit amet.
                        </div>

                        <div class="d-flex timeline-item"><span class="text-white fixed-height">2000</span> Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit. Sed do eius empor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad mini quis nostrud exercitation ullamco.
                        </div>

                        <div class="d-flex timeline-item"><span class="text-white fixed-height">2010</span> Sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. empor incididunt ut labore et
                            dolore magna aliqua.
                        </div>

                        <div class="d-flex timeline-item"><span class="text-white fixed-height">2015</span> Eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.
                        </div>

                        <div class="d-flex timeline-item"><span class="text-white fixed-height">2019</span> Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco.
                        </div>
                    </div>

                    <a href="#" class="btn btn-medium btn-inline btn-fill mr-4">Cv Download</a>
                </div>
            </div>

            <div class="row bg-dark-light p-50 mt-100 newsletter-row">
                <div class="col-md-10 mx-auto">
                    <form id="mc-form">
                        <label for="mc-email" class="text-white label-text mb-0 text-center d-block"></label>
                        <div class="form-row align-items-center">
                            <div class="col-md-3">
                                <h2 class="text-white mb-0">Newslatter</h2>
                            </div>

                            <div class="col-md-6 pl-5">
                                <input id="mc-email" type="email" class="form-control" placeholder="youremail@mail.com">
                            </div>

                            <div class="col-md-3 text-left">
                                <button type="submit"
                                        class="btn btn-medium btn-inline btn-fill btn-flat ml-3">Subscribe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <!--
    ========================================
        Testimonial Area
    ========================================
    -->
    <section id="testimonial-section" class="p-100 bg-dark-light">
        <div class="container">

            <div class="sec-heading-wrap text-center mb-60">
                <h2>What Client Say</h2>
                <span class="sec-divider">
                    <span class="sec-dot"></span>
                    <span class="sec-dot-big"></span>
                    <span class="sec-dot"></span>
                </span>
            </div>

            <div class="testimonial-content-wrap">
                <div class="owl-carousel">
                    <?php
                    $tuhin_args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => '-1',
                    );
                    $query = new WP_Query($tuhin_args);
                    while ($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div>
                            <div class="testimonial-item">
                                <p><?php the_content(); ?></p>
                                <div class="media ml-2">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail(array('class' => 'mr-3 rounded-circle'));
                                    }
                                    ?>
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0"><?php the_title(); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!--
    ========================================
        Skill Area
    ========================================
    -->
    <section id="skill-section" class="p-100 bg-one-dark skill-layout-two">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="single-story-wrap">
                        <p class="color-base">Solution!</p>
                        <h2 class="text-white">Who is the <span class="color-base">Typhography</span> Solution to My
                            Team?</h2>
                        <p class="lead">We are a boutique digital transformation consultancy and
                            development company.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod empor nt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, uis nostrud tion ullamco laboris nisi ut
                            aliquip ex ea commodo onsequat. Duis aute irure dolor in reprehenderit in voluptate.</p>

                        <div class="media">
                            <a href="#" class="play-btn">
                                <i class="fas fa-play"></i>
                            </a>
                            <div class="media-body align-self-center">
                                <h6 class="mb-0">How we work</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 align-self-end bg-zig">
                    <div class="zig-zag">
                        <div class="zig-zag-item item-one"></div>
                        <div class="zig-zag-item item-two"></div>
                        <div class="zig-zag-item item-three"></div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-9.png" alt="Signature"
                         class="img-fluid">
                </div>

            </div>

            <div class="row skill-bars mt-100">
                <div class="col-md-6">
                    <div class="skill-item">
                        <p class="skill-title mb-0 text-white">Brand Identity- <span
                                    class="skill-title-right">(60%)</span></p>
                        <div class="progress">
                            <div class="progress-bar bg-base" style="width: 60%" role="progressbar" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-item">
                        <p class="skill-title mb-0 text-white">Javascript- <span class="skill-title-right">(78%)</span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar bg-base" style="width: 78%" role="progressbar" aria-valuenow="78"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-item pb-0">
                        <p class="skill-title mb-0 text-white">Photoshop- <span class="skill-title-right">(85%)</span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar bg-base" style="width: 85%" role="progressbar" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-item pb-0">
                        <p class="skill-title mb-0 text-white">Web Design- <span class="skill-title-right">(50%)</span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar bg-base" style="width: 50%" role="progressbar" aria-valuenow="50"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--
    ========================================
        Blog Area
    ========================================
    -->
    <section id="blog-section" class="p-100 bg-dark-light">
        <div class="container">
            <div class="sec-heading-wrap text-center mb-60">
                <h2>My Latest News</h2>
                <span class="sec-divider">
                    <span class="sec-dot"></span>
                    <span class="sec-dot-big"></span>
                    <span class="sec-dot"></span>
                </span>
            </div>
            <div class="row blog-content-wrap">
                <?php
                $tuhin_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '3',
                );
                $query = new WP_Query($tuhin_args);
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <div class="col-md-4">
                        <div class="blog-item item-one">
                            <div class="blog-image">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                }
                                ?>
                                <div class="blog-tag">
                                        <?php the_category(); ?>
                                </div>
                            </div>
                            <p class="date-time text-white"><?php echo get_the_date(); ?></p>
                            <h4 class="blog-title"><a class="text-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </section>

    <!--
    ========================================
        Contact Area
    ========================================
    -->
    <section id="contact-section" class="p-100 bg-one-dark">
        <div class="container">
            <div class="sec-heading-wrap text-center mb-60">
                <h2>Contact Me</h2>
                <span class="sec-divider">
                    <span class="sec-dot"></span>
                    <span class="sec-dot-big"></span>
                    <span class="sec-dot"></span>
                </span>
            </div>
            <div class="row contact-content-wrap">
                <form class="contact-form col-md-7" method="post" action="#" id="contact_form">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="con_name" class="required" placeholder="Your Name*"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="email" name="con_email" class="required" placeholder="Your Email*"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="con_phone" placeholder="Phone"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="con_company" placeholder="Subject"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <textarea name="con_message" class="required" placeholder="Message*"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="ast_btn btn btn-medium btn-inline btn-fill"
                                    name="con_submit"><span>Send Message<i class="sgi sgi-Mail"></i></span></button>
                            <img src="ajax/loader.gif" alt="" class="ast_loader"/>
                        </div>
                    </div>

                    <div class="ast_con_message"></div>

                </form>
                <div class="col-md-4">
                    <div class="google-map">
                        <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.923942040706!2d89.355603315377!3d24.90057584978005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc5580e6d1053d%3A0x79830ecb3e34f2f4!2sMomo%20Inn!5e0!3m2!1sen!2sbd!4v1569495532146!5m2!1sen!2sbd"
                                style="width: 100%" height="400" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
    ========================================
        Footer Area
    ========================================
    -->
<?php get_footer(); ?>