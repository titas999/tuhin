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
            <p class="hero-w-massage">Welcome to My Portfolio</p>

            <div class="hero-social">
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/111.png" alt="WPequal"
                 class="hero-personal-img img-fluid">
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-white hero-title">I am Mesbah-ul-Karim</h2>
                <h2 class="hero-job">Wordpress Developer </h2>
                <p class="text-white hero-sub-text">I'm a
                    Political man with extensive experience for over 25
                    years. <br> My
                    xpertise
                    is to create and
                    design.
                </p>
                <a href="#" class="btn btn-medium">Contact Us</a>
            </div>
        </div>
    </div>
</section>