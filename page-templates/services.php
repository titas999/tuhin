<?php
/**
 * Template Name: Services
 */
get_header();
?>

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
        Service Area
    ========================================
    -->
    <section id="service-section" class="p-100 bg-dark-light">
        <div class="container">
            <div class="row">
                <?php
                $tuhin_args = array(
                    'post_type' => 'service',
                    'posts_per_page' => '6',
                );
                $query = new WP_Query($tuhin_args);
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <div class="col-md-4">
                        <div class="single-service-wrap item-one text-center">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            }
                            ?>
                            <h4 class="text-white flex-order"><?php the_title(); ?></h4>
                            <p class="flex-order"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>