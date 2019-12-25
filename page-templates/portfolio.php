<?php
/**
 * Template Name: Portfolio
 */
get_header(); ?>

    <section id="innar-hero" class="innar-hero">
        <div class="container">
            <div class="section-title text-center">
                <h2><?php echo get_the_title(); ?></h2>
                <a href="<?php echo get_home_url(); ?>" class="go-back"><?php _e('Go Back to Homepage', 'tuhin'); ?></a>
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
                        <?php
                        $terms = get_terms("category"); // get all categories, but you can use any taxonomy
                        $count = count($terms); //How many are they?
                        if ($count > 0) {  //If there are more than 0 terms
                            foreach ($terms as $term) {  //for each term:
                                echo "<div data-filter='." . $term->slug . "' class=\"cbp-filter-item\">" . $term->name . "</div>\n";
                            }
                        }
                        ?>
                        <!--                    <div data-filter='.".$term->slug."' class="cbp-filter-item">Logo</div>-->
                        <!--                    <div data-filter=".photography" class="cbp-filter-item">Photography</div>-->
                        <!--                    <div data-filter=".videos" class="cbp-filter-item">Videos</div>-->
                        <!--                    <div data-filter=".web-design" class="cbp-filter-item">Web Design</div>-->
                        <!--                    <div data-filter=".development" class="cbp-filter-item">Development</div>-->
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                    <div id="grid-container">
                        <?php
                        $args = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => 12,
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()):
                            while ($query->have_posts()) :
                                $query->the_post();
                                $termsArray = get_the_terms($post->ID, "category");  //Get the terms for this particular item
                                $termsString = ""; //initialize the string that will contain the terms
                                foreach ($termsArray as $term) { // for each term
                                    $termsString .= $term->slug . ' '; //create a string that has all the slugs
                                }
                                ?>
                                <div class="cbp-item <?php echo $termsString; ?>">
                                    <!-- data-title attribute will be use to populate lightbox caption -->
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('', array(
                                            'class' => 'img-fluid'

                                        ));
                                    } ?>
                                    <div class="cbp-hover">
                                        <h4>
                                            <a class="cbp-lightbox" data-title="Portfolio One" href="<?php echo get_template_directory_uri(); ?>/assets/img/work/9.jpg">
                                                <?php the_title(); ?>
                                            </a>
                                        </h4>
                                        <p><a href="#"><?php the_category(','); ?></a></p>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </section>
<?php get_footer(); ?>