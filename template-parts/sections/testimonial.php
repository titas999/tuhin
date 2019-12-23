<?php
global $tuhin_section_id;
$tuhin_section             = get_post( $tuhin_section_id );
$section_title = $tuhin_section->post_title;
?>

<section id="testimonial-section" class="p-100 bg-dark-light">
    <div class="container">

        <div class="sec-heading-wrap text-center mb-60">
            <h2><?php echo esc_html($section_title)?></h2>
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