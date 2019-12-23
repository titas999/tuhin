<?php
global $tuhin_section_id;
$tuhin_section_meta = get_post_meta( $tuhin_section_id, 'tuhin_counter_section', true );
$tuhin_section             = get_post( $tuhin_section_id );

?>

<section id="story-section" class="p-100 bg-one-dark">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="single-story-wrap">
                    <p class="color-base">MY Storis!</p>
                    <h2 class="text-white">Some History of My Life, 1980 - 2019</h2>
                    <span class="sec-divider">
                            <span class="sec-dot"></span>
                            <span class="sec-dot-big"></span>
                            <span class="sec-dot"></span>
                        </span>
                    <p class="my-story-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incidi labore
                        et dolore.</p>

                    <div class="media mt-50">
                        <div class="user-avatar ml-2 mr-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-8.png"
                                 class=" rounded-circle" alt="Onuc - WPequal">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="mt-0 color-base">Date Of Brith</h4>
                            <p class="text-white">25, March 1970</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="story-time-line">
                    <div class="d-flex timeline-item"><span class="text-white fixed-height">1980</span> Lorem ipsum
                        dolor sit amet.
                    </div>

                    <div class="d-flex timeline-item"><span class="text-white fixed-height">2000</span> Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Sed do eius empor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad mini quis nostrud exercitation ullamco.
                    </div>

                    <div class="d-flex timeline-item"><span class="text-white fixed-height">2010</span> Sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. empor incididunt ut labore et
                        dolore magna aliqua.
                    </div>

                    <div class="d-flex timeline-item"><span class="text-white fixed-height">2015</span> Eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </div>

                    <div class="d-flex timeline-item"><span class="text-white fixed-height">2019</span> Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco.
                    </div>
                </div>

                <a href="#" class="btn btn-medium btn-inline btn-fill mr-4">Cv Download</a>
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