<?php /*Template Name: global-corporate-travel */ get_header(); ?>

    <section class="mainn-banner" style="background-image: url(<?php the_field('banner_bg'); ?>);">
        <div class="container">
            <h1>
                <?php the_field('banner_heading'); ?>
            </h1>
        </div>
    </section>
    <section class="ground-tranportation">
        <div class="container">
            <div class="inner-ground-transportation">
                <div class="ground-transportation-contnt">
                    <h2>
                        <?php the_field('global_corporate_travel_heading'); ?>
                    </h2>
                    <h4>
                        <?php the_field('global_corporate_travel_sub_heading'); ?>
                    </h4>
                    <p>
                        <?php the_field('global_corporate_travel_para'); ?>
                    </p>
                </div>
                <div class="ground-transportation-image">
                    <img src="<?php the_field('global_corporate_travel_image'); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="why-roadshow">
        <div class="container">
            <div class="inner-roadshow">
                <div class="ts-bussiness-image animation-custom">
                    <img src="<?php the_field('tailored_solutions_image'); ?>" alt="" class="img-fluid">
                </div>
                <div class="roadshow-contnt animation-custom">
                    <h2>
                        <?php the_field('tailored_solutions_heading'); ?>
                    </h2>
                    <p>
                        <?php the_field('tailored_solutions_para'); ?>
                    </p>
                    <h3>
                        <?php the_field('tailored_solutions_sub_heading'); ?>
                    </h3>
                    <p>
                        <?php the_field('tailored_solutions_para2'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="special-occasion-3">
        <div class="container">
            <div class="inner-special-occasion3">
                <div class="in-sp-left">
                    <div class="sp-left animation-custom">
                        <div class="sp-left-image">
                            <img src="<?php the_field('special-occasion_image'); ?>" alt="" class="img-fluid">
                        </div>
                        <h4>
                            <?php the_field('special-occasion_heading'); ?>
                        </h4>
                        <p>
                            <?php the_field('special-occasion_para'); ?>
                        </p>
                        <p>
                            <?php the_field('special-occasion_para2'); ?>
                        </p>
                    </div>
                </div>
                <div class="in-sp-right">
                    <div class="sp-right animation-custom">
                        <div class="sp-right-image">
                            <img src="<?php the_field('special-occasion_image2'); ?>" alt="" class="img-fluid">
                        </div>
                        <h4>
                            <?php the_field('special-occasion_heading2'); ?>
                        </h4>
                        <p>
                            <?php the_field('special-occasion_paraa2'); ?>
                        </p>
                    </div>
                    <div class="sp-right animation-custom">
                        <div class="spp-right-image">
                            <img src="<?php the_field('special-occasion_image3'); ?>" alt="" class="img-fluid">
                        </div>
                        <h4>
                            <?php the_field('special-occasion_heading3'); ?>
                        </h4>
                        <p>
                            <?php the_field('special-occasion_para3'); ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="global-fleet">
        <div class="container">
            <div class="en-responsibe">
                <div class="en-responsibe-image animation-custom">
                    <img src="<?php the_field('environmental_image'); ?>" alt="" class="img-fluid">
                </div>
                <div class="pa-fleet-contnt animation-custom">
                    <h2>
                        <?php the_field('environmental_heading'); ?>
                    </h2>
                    <p>
                        <?php the_field('environmental_para1'); ?>
                    </p>
                    <p>
                        <?php the_field('environmental_para2'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>



<?php get_footer(); ?>