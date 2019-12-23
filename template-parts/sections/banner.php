<?php
global $tuhin_section_id;
$tuhin_section_meta = get_post_meta( $tuhin_section_id, 'tuhin_banner_s', true );
$tuhin_section             = get_post( $tuhin_section_id );
$tuhin_banner_image = wp_get_attachment_image_src( $tuhin_section_meta['hero_image_upload'][0], 'full' );
$tuhin_banner_heading= $tuhin_section_meta['banner_heading'];
$tuhin_banner_btn_text= $tuhin_section_meta['button_text'];
    ?>
<section id="hero-section">
    <div class="container">
        <div class="hero-row-outer">
            <div class="hero-social">
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>

            <img src="<?php echo $tuhin_banner_image[0]; ?>" alt="<?php echo esc_html($tuhin_banner_heading); ?>"
                 class="hero-personal-img img-fluid">
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-white hero-title"><?php echo esc_html($tuhin_banner_heading); ?></h2>
                <h2 class="hero-job"><?php echo esc_html($tuhin_section_meta['banner_subheading']); ?></h2>
                <?php
                echo apply_filters('the_content', $tuhin_section_meta['banner_description']);
                ?>
                <a href="<?php echo esc_url($tuhin_section_meta['button_url'])?>" class="btn btn-medium">
                    <?php echo esc_html($tuhin_banner_btn_text); ?>
                </a>
            </div>
        </div>
    </div>
</section>