<?php
global $tuhin_section_id;
$tuhin_section_meta = get_post_meta($tuhin_section_id,'tuhin_projects_section',true);
$tuhin_section             = get_post( $tuhin_section_id );
$tuhin_section_title       = $tuhin_section->post_title;

$tuhin_projects_image = wp_get_attachment_image_src( $tuhin_section_meta['projects_main_image'][0], 'full' );
?>

<section id="skill-section" class="p-100 bg-one-dark skill-layout-two">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="single-story-wrap">
                    <p class="color-base">Solution!</p>
                    <h2 class="text-white">Who is the <span class="color-base">Typhography</span> Solution to My
                        Team?</h2>
                    <p class="lead">We are a boutique digital transformation consultancy and
                        development company.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod empor nt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, uis nostrud tion ullamco laboris nisi ut
                        aliquip ex ea commodo onsequat. Duis aute irure dolor in reprehenderit in voluptate.</p>

                    <div class="media">
                        <a href="#" class="play-btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="media-body align-self-center">
                            <h6 class="mb-0">How we work</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 align-self-end bg-zig">
                <div class="zig-zag">
                    <div class="zig-zag-item item-one"></div>
                    <div class="zig-zag-item item-two"></div>
                    <div class="zig-zag-item item-three"></div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-9.png" alt="Signature"
                     class="img-fluid">
            </div>

        </div>

        <div class="row skill-bars mt-100">
            <div class="col-md-6">
                <div class="skill-item">
                    <p class="skill-title mb-0 text-white">Brand Identity- <span
                                class="skill-title-right">(60%)</span></p>
                    <div class="progress">
                        <div class="progress-bar bg-base" style="width: 60%" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skill-item">
                    <p class="skill-title mb-0 text-white">Javascript- <span class="skill-title-right">(78%)</span>
                    </p>
                    <div class="progress">
                        <div class="progress-bar bg-base" style="width: 78%" role="progressbar" aria-valuenow="78"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skill-item pb-0">
                    <p class="skill-title mb-0 text-white">Photoshop- <span class="skill-title-right">(85%)</span>
                    </p>
                    <div class="progress">
                        <div class="progress-bar bg-base" style="width: 85%" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skill-item pb-0">
                    <p class="skill-title mb-0 text-white">Web Design- <span class="skill-title-right">(50%)</span>
                    </p>
                    <div class="progress">
                        <div class="progress-bar bg-base" style="width: 50%" role="progressbar" aria-valuenow="50"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>