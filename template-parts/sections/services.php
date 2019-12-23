<?php
global $tuhin_section_id;
$tuhin_section_meta = get_post_meta( $tuhin_section_id, 'tuhin_services_section', true );
$tuhin_section             = get_post( $tuhin_section_id );

?>
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