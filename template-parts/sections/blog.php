<?php
global $tuhin_section_id;
$tuhin_section_meta = get_post_meta( $tuhin_section_id, 'tuhin_features_section', true );
$tuhin_section             = get_post( $tuhin_section_id );

?>

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
