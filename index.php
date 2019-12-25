<?php
get_header(); ?>

<section id="innar-hero" class="innar-hero">
    <div class="container">
        <div class="section-title text-center">
            <h2><?php wp_title('') ?></h2>
            <a href="<?php echo get_home_url(); ?>" class="go-back"><?php _e('Go Back to Homepage', 'tuhin'); ?></a>
        </div>
    </div>
</section>

<section id="blog-single" class="p-100 bg-one-dark">
    <div class="container">
        <div class="row">
            <!-- Blog Content -->
            <div class="main-blog">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="col-md-6">
                            <div class="main-blog-content">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } ?>
                                <div class="blog-contents">
                                    <a href="<?php the_permalink(); ?>">
                                        <h3 class="blog-title"><?php the_title() ?></h3>
                                    </a>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
