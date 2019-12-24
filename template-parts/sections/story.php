<?php
global $tuhin_section_id;
$tuhin_section_meta = get_post_meta( $tuhin_section_id, 'tuhin_story_section', true );
$tuhin_section             = get_post( $tuhin_section_id );

?>

<section id="story-section" class="p-100 bg-one-dark">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="single-story-wrap">
                    <p class="color-base"><?php echo esc_html($tuhin_section_meta['story_subheading'])?></p>
                    <h2 class="text-white"><?php echo esc_html($tuhin_section_meta['story_heading'])?></h2>
                    <span class="sec-divider">
                            <span class="sec-dot"></span>
                            <span class="sec-dot-big"></span>
                            <span class="sec-dot"></span>
                        </span>
                    <?php echo apply_filters('the_content', $tuhin_section_meta['story_description']);?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="story-time-line">
                    <?php
                    $tuhin_section_group = get_post_meta( $tuhin_section_id, 'tuhin_story_group', true );
                    if (is_array($tuhin_section_group)){
                        foreach ($tuhin_section_group as $tuhin_story_group){ ?>
                    <div class="d-flex timeline-item"><span class="text-white fixed-height"><?php echo esc_html($tuhin_story_group['story_year'])?></span><?php echo esc_html($tuhin_story_group['story_year_description'])?>
                    </div>
                    <?php
                        }
                    }
                    ?>


                </div>

                <a href="<?php echo esc_url($tuhin_section_meta['story_btn_url'])?>" class="btn btn-medium btn-inline btn-fill mr-4"><?php echo esc_html($tuhin_section_meta['story_btn_text'])?></a>
            </div>
        </div>

        <div class="row bg-dark-light p-50 mt-100 newsletter-row">
            <div class="col-md-10 mx-auto">
                <form id="mc-form">
                    <label for="mc-email" class="text-white label-text mb-0 text-center d-block"></label>
                    <div class="form-row align-items-center">
                        <div class="col-md-3">
                            <h2 class="text-white mb-0">Newslatter</h2>
                        </div>

                        <div class="col-md-6 pl-5">
                            <input id="mc-email" type="email" class="form-control" placeholder="youremail@mail.com">
                        </div>

                        <div class="col-md-3 text-left">
                            <button type="submit"
                                    class="btn btn-medium btn-inline btn-fill btn-flat ml-3">Subscribe
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>