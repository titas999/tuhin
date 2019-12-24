<?php
/**
 * Template Name: Portfolio
 */
get_header(); ?>

<section id="innar-hero" class="innar-hero">
    <div class="container">
        <div class="section-title text-center">
            <h2><?php echo get_the_title(); ?></h2>
            <a href="<?php echo get_home_url(); ?>" class="go-back"><?php _e('Go Back to Homepage','tuhin'); ?></a>
        </div>
    </div>
</section>


<!--
========================================
    Portfolio Area
========================================
-->
<section id="portfolio" class="bg-one-dark p-100 portfolio-layout-one">
    <div class="container">
        <div class="row">
            <div class="col-md-9 filter-layout mx-auto text-center">
                <div id="filters-container" class="cbp-l-filters-button cbp-l-filters-left">
                    <!-- '*' means shows all item elements -->
                    <div data-filter="*" class="cbp-filter-item cbp-filter-item-active">Show All</div>
                    <div data-filter=".logo-filter" class="cbp-filter-item">Logo</div>
                    <div data-filter=".photography" class="cbp-filter-item">Photography</div>
                    <div data-filter=".videos" class="cbp-filter-item">Videos</div>
                    <div data-filter=".web-design" class="cbp-filter-item">Web Design</div>
                    <div data-filter=".development" class="cbp-filter-item">Development</div>
                </div>
            </div>
            <div class="col-md-12 mb-5">
                <div id="grid-container">
                    <div class="cbp-item web-design">
                        <!-- data-title attribute will be use to populate lightbox caption -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/13.jpg" alt="custom alt 1" class="img-fluid">
                        <div class="cbp-hover">
                            <h4><a class="cbp-lightbox" data-title="Portfolio One"
                                   href="<?php echo get_template_directory_uri(); ?>/assets/img/work/9.jpg">Portfolio One</a></h4>
                            <p><a href="#">Web Design</a></p>
                        </div>
                    </div>
                    <div class="cbp-item development web-design">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/14.jpg" alt="custom alt 1" class="img-fluid">
                        <div class="cbp-hover">
                            <h4><a class="cbp-lightbox" data-title="Portfolio Two"
                                   href="<?php echo get_template_directory_uri(); ?>/assets/img/work/10.jpg">Portfolio Two</a></h4>
                            <p><a href="#">Web Design</a>, <a href="#">Development</a></p>
                        </div>
                    </div>
                    <div class="cbp-item logo-filter photography ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/15.jpg" alt="custom alt 1" class="img-fluid">
                        <div class="cbp-hover">
                            <h4><a class="cbp-lightbox" data-title="Portfolio Three"
                                   href="<?php echo get_template_directory_uri(); ?>/assets/img/work/11.jpg">Portfolio Three</a></h4>
                            <p><a href="#">logo</a>, <a href="#">Photography</a></p>
                        </div>
                    </div>
                    <div class="cbp-item videos development">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/16.jpg" alt="custom alt 1" class="img-fluid">
                        <div class="cbp-hover">
                            <h4><a class="cbp-lightbox" data-title="Portfolio Four"
                                   href="<?php echo get_template_directory_uri(); ?>/assets/img/work/12.jpg">Portfolio Four</a></h4>
                            <p><a href="#">Videos</a>, <a href="#">Development</a></p>
                        </div>
                    </div>
                    <div class="cbp-item web-design videos">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/17.jpg" alt="custom alt 1" class="img-fluid">
                        <div class="cbp-hover">
                            <h4><a class="cbp-lightbox" data-title="Portfolio five"
                                   href="<?php echo get_template_directory_uri(); ?>/assets/img/work/9.jpg">Portfolio Five</a></h4>
                            <p><a href="#">Videos</a>, <a href="#">Web Design</a></p>
                        </div>
                    </div>
                    <div class="cbp-item photography logo-filter">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/18.jpg" alt="custom alt 1" class="img-fluid">
                        <div class="cbp-hover">
                            <h4><a class="cbp-lightbox" data-title="Portfolio six"
                                   href="<?php echo get_template_directory_uri(); ?>/assets/img/work/9.jpg">Portfolio six</a></h4>
                            <p><a href="#">Photography</a>, <a href="#">Logo</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>