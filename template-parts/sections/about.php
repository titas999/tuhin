
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-7.png" alt="Signature"
                     class="img-fluid">
            </div>
            <div class="col-md-6">
                <p class="color-base">ABOUT ME!</p>
                <h2 class="text-white mb-4">My Real Life is Up to You?
                    I am a <span class="color-base">Wordpress Developer</span>
                </h2>
                <p>I’m a web developer and graphic designer living in New York, USA. I spend my days with my hands
                    in many different areas of web development from back end programming to front end engineering.
                </p>
                <div class="row">
                    <div class="col-md-6 about-bullet">
                        <ul class="bullet-check">
                            <li>Different of web development</li>
                            <li>Gun Violence Prevention</li>
                            <li>Eiusmod tempor incidid labore</li>
                        </ul>
                    </div>
                    <div class="col-md-6 about-bullet">
                        <ul class="bullet-check">
                            <li>Graphic designer living</li>
                            <li>Jiusmod tempor incididunt</li>
                        </ul>
                    </div>
                </div>

                <div class="wrap-button mt-50">
                    <a href="#" class="btn btn-medium btn-inline btn-fill mr-4">Cv Download</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sig.png" alt="Signature"
                         class="img-fluid">
                </div>
            </div>
        </div>

        <div class="about-info-wrap p-5">
            <div class="about-info p-5">
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="text-white text-uppercase mb-4">Contact Now</h6>
                        <p><i class="fas fa-envelope-open-text mr-2 color-base"></i>exampol@gmail.com</p>
                        <p><i class="fas fa-phone-alt mr-2 color-base"></i>+012 345 678 910</p>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-white text-uppercase mb-4">Address</h6>
                        <p><i class="fas fa-map-marker-alt mr-2 color-base"></i>123 West 12th Street, Suite 456
                            New York, NY 123456

                        </p>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-white text-uppercase mb-4">Social Media</h6>
                        <p><i class="far fa-comment-alt mr-2 color-base"></i>Also find us social media below</p>

                        <div class="inline-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
