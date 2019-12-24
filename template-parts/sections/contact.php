<?php
global $tuhin_section_id;
$tuhin_section_meta = get_post_meta( $tuhin_section_id, 'tuhin_contact_section', true );
$tuhin_section             = get_post( $tuhin_section_id );
$section_title = $tuhin_section->post_title;
?>
<section id="contact-section" class="p-100 bg-one-dark">
    <div class="container">
        <div class="sec-heading-wrap text-center mb-60">
            <h2><?php echo esc_html($section_title); ?></h2>
            <span class="sec-divider">
                    <span class="sec-dot"></span>
                    <span class="sec-dot-big"></span>
                    <span class="sec-dot"></span>
                </span>
        </div>
        <div class="row contact-content-wrap">
            <div class="contact-form col-md-7" id="contact_form">


                                    <?php echo do_shortcode('[contact-form-7 id="43" title="Contact form 1"]'); ?>

                <div class="ast_con_message"></div>

            </div>
            <div class="col-md-4">
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.923942040706!2d89.355603315377!3d24.90057584978005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc5580e6d1053d%3A0x79830ecb3e34f2f4!2sMomo%20Inn!5e0!3m2!1sen!2sbd!4v1569495532146!5m2!1sen!2sbd"
                        style="width: 100%" height="400" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>