<?php get_header(); ?>

<section id="innar-hero" class="innar-hero">
    <div class="container">
        <div class="section-title text-center">
            <h2><?php echo get_the_title(); ?></h2>
            <p>
                <a href="<?php echo get_home_url(); ?>" class="go-back"><?php _e('Go Back to Homepage', 'tuhin'); ?></a>
            </p>
        </div>
    </div>
</section>


<!--
========================================
    Blog Details Area
========================================
-->
<?php
while (have_posts()):
    the_post();
?>
<section id="blog-single" class="p-100 bg-one-dark">
    <div class="container">
        <div class="row">
            <!-- Blog Content -->
            <div class="col-md-8">
                <div class="blog-content-wrap">
                    <div class="row">
                        <div class="col-md-12 pb-5">
                            <?php if (has_post_thumbnail()){
                                the_post_thumbnail('', array('class' => 'blog-f-image'));
                            } ?>
                        </div>
                        <?php the_content(); ?>
                    </div>
    <?php comments_template(); ?>
                </div>
            </div>
            <!-- Blog Sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>