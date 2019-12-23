
<?php
global $tuhin_section_id;
$tuhin_section_meta = get_post_meta($tuhin_section_id,'tuhin_about_s',true);
$tuhin_section             = get_post( $tuhin_section_id );

$tuhin_about_image = wp_get_attachment_image_src( $tuhin_section_meta['about_image_upload'][0], 'full' );

?>

<section id="about-section" class="p-100 pb-5 bg-one-dark about-layout-two">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 text-center bg-zig">
                <div class="zig-zag">
                    <div class="zig-zag-item item-one"></div>
                    <div class="zig-zag-item item-two"></div>
                    <div class="zig-zag-item item-three"></div>
                </div>
                <img src="<?php echo $tuhin_about_image[0];?>" alt="Signature"
                     class="img-fluid">
            </div>
            <div class="col-md-6">
                <p class="color-base"><?php echo esc_html($tuhin_section_meta['about_subheading'])?></p>
                <h2 class="text-white mb-4"><?php echo esc_html($tuhin_section_meta['about_heading'])?>
                </h2>
                <?php echo apply_filters('the_content', $tuhin_section_meta['about_description']);?>
                <div class="wrap-button mt-50">
                    <a href="<?php echo esc_url($tuhin_section_meta['about_button_url'])?>" class="btn btn-medium btn-inline btn-fill mr-4"><?php echo esc_html($tuhin_section_meta['about_button_text'])?></a>
                </div>
            </div>
        </div>
    </div>
</section>
