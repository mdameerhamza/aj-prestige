<?php /*Template Name: airport-transportation */ get_header(); ?>

    <section class="mainn-banner" style="background-image: url(<?php the_field('banner_bg'); ?>);">
        <div class="container">
            <h1>
                <?php the_field('banner_heading'); ?>
            </h1>
        </div>
    </section>
    <section class="private-drivers">
        <div class="container">
            <div class="inner-private-drivers">
                <div class="private-drivers-heading">
                    <h2>
                        <?php the_field('airport_limo_heading'); ?>
                    </h2>
                    <p>
                        <?php the_field('airport_limo_sub_heading'); ?>
                    </p>
                    <div class="read-btn">

                        <?php
                        $link = get_field('airport_limo_btn');
                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="" href="<?php echo esc_url($link_url); ?>"
                                target="<?php echo esc_attr($link_target); ?>">
                                <?php echo esc_html($link_title); ?>
                                <div class="ancr-image"><img
                                        src="<?php echo get_bloginfo('template_url'); ?>/assets/images/ancr-arrow.svg"
                                        alt="" class="img-fluid"></div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="private-drivers-image">
                    <h4>
                        <?php the_field('airport_limo_para'); ?>
                    </h4>
                    <div class="private-image">
                        <img src="<?php the_field('airport_limo_image'); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="LIMOUSINE-service">
        <div class="container">
            <div class="inner-roadshow">
                <div class="LIMOUSINE-service-image animation-custom">
                    <img src="<?php the_field('premium_limo_image'); ?>" alt="" class="img-fluid">
                </div>
                <div class="roadshow-contnt animation-custom">
                    <span class="small-heading">
                        <?php the_field('premium_limo_small_heading'); ?>
                    </span>
                    <h2>
                        <?php the_field('premium_limo_heading'); ?>
                    </h2>
                    <p>
                        <?php the_field('premium_limo_para'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="airport-why-aj-2">
        <div class="container">
            <div class="pa-why-aj-2">
                <div class="pa-why-aj-tp-2">
                    <div class="pa-why-aj-heading-2 animation-custom">
                        <h2>
                            <?php the_field('why_book_a_limo_heading'); ?>
                        </h2>
                        <h3>
                            <?php the_field('why_book_a_limo_sub_heading'); ?>
                        </h3>
                        <p>
                            <?php the_field('why_book_a_limo_para'); ?>
                        </p>
                    </div>
                    <div class="pa-why-aj-image-2">
                        <div class="pa-why-in-image-2 animation-custom">
                            <img src="<?php the_field('why_book_a_limo_image'); ?>" alt="" class="img-fluid">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="shuttle-service">
        <div class="container">
            <div class="inner-Professional-Chauffeurs">
                <div class="Professional-Chauffeurs-left animation-custom">
                    <h2>
                        <?php the_field('airport_shuttle_service_heading'); ?>
                    </h2>
                    <div class="Professional-Chauffeurs-cntnt">
                        <?php if (have_rows('airport_shuttle_service_repeater')):
                            while (have_rows('airport_shuttle_service_repeater')):
                                the_row(); ?>
                                <p>
                                    <?php the_sub_field('airport_shuttle_service_para'); ?>
                                </p>
                            <?php endwhile; endif; ?>
                    </div>
                </div>
                <div class="Professional-Chauffeurs-right">
                    <div class="Professional-image1 animation-custom">
                        <img src="<?php the_field('airport_shuttle_service_image1'); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="Professional-image2 animation-custom">
                        <img src="<?php the_field('airport_shuttle_service_image2'); ?>" alt="" class="img-fluid">
                    </div>

                </div>
            </div>
            <div class="pa-why-aj-2">
                <div class="pa-why-aj-tp-2">
                    <div class="airport-why-aj-image-2">
                        <div class="airport-why-in-image-2 animation-custom">
                            <img src="<?php the_field('what_limo_services_image'); ?>" alt="" class="img-fluid">
                        </div>

                    </div>
                    <div class="pa-why-aj-heading-2 animation-custom">
                        <h2>
                            <?php the_field('what_limo_services_heading'); ?>
                        </h2>
                        <p>
                            <?php the_field('what_limo_services_para'); ?>
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>

<?php get_footer(); ?>