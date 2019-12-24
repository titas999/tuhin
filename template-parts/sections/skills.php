<?php
global $tuhin_section_id;
$tuhin_section_meta = get_post_meta($tuhin_section_id,'tuhin_skills_section',true);
$tuhin_section             = get_post( $tuhin_section_id );
$tuhin_section_title       = $tuhin_section->post_title;

$tuhin_skills_image = wp_get_attachment_image_src( $tuhin_section_meta['skills_main_image'][0], 'full' );
?>

<section id="skill-section" class="p-100 bg-one-dark skill-layout-two">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="single-story-wrap">
                    <p class="color-base"><?php echo esc_html($tuhin_section_meta['skills_subheading'])?></p>
                    <h2 class="text-white"><?php echo esc_html($tuhin_section_meta['skills_heading'])?></h2>
                    <?php echo apply_filters('the_content', $tuhin_section_meta['skills_description']);?>
                </div>
            </div>

            <div class="col-md-6 align-self-end bg-zig">
                <div class="zig-zag">
                    <div class="zig-zag-item item-one"></div>
                    <div class="zig-zag-item item-two"></div>
                    <div class="zig-zag-item item-three"></div>
                </div>
                <img src="<?php echo $tuhin_skills_image[0];?>" alt="Signature"
                     class="img-fluid">
            </div>

        </div>

        <div class="row skill-bars mt-100">
            <?php
            $tuhin_skills_items = $tuhin_section_meta['skills_items'];
            if (is_array($tuhin_skills_items)){
                foreach ($tuhin_skills_items as $tuhin_skills_item){ ?>
            <div class="col-md-6">
                <div class="skill-item">
                    <p class="skill-title mb-0 text-white"><?php echo esc_html($tuhin_skills_item['skills_items_name'])?></p>
                    <div class="progress">
                        <div class="progress-bar bg-base" style="width: <?php echo esc_html($tuhin_skills_item['skills_item_number'])?>%" role="progressbar" aria-valuenow="<?php echo esc_html($tuhin_skills_item['skills_item_number'])?>"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>


        </div>

    </div>
</section>