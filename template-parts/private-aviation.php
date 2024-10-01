<?php /*Template Name: private-aviation */ get_header(); ?>
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
                        <?php the_field('private_chauffeur_heading'); ?>
                    </h2>
                    <div class="read-btn">

                        <?php
                        $link = get_field('private_chauffeur_btn');
                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="primary-btn" href="<?php echo esc_url($link_url); ?>"
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
                        <?php the_field('private_chauffeur_para'); ?>
                    </h4>
                    <div class="private-image">
                        <img src="<?php the_field('private_chauffeur_image'); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Professional-Chauffeurs2">
        <div class="container">
            <div class="inner-Professional-Chauffeurs2">
                <div class="Professional-Chauffeurs-left2 animation-custom">
                    <h2>
                        <?php the_field('dependable_chauffeur_heading'); ?>
                    </h2>
                    <div class="Professional-Chauffeurs-cntnt">
                        <p>
                            <?php the_field('dependable_chauffeur_para'); ?>
                        </p>
                        <p>
                            <?php the_field('dependable_chauffeur_para2'); ?>
                        </p>
                        <p>
                            <?php the_field('dependable_chauffeur_para3'); ?>
                        </p>
                    </div>
                </div>
                <div class="Professional-Chauffeurs-right">
                    <div class="Professional-image1 animation-custom">
                        <img src="<?php the_field('dependable_chauffeur_image1'); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="Professional-image2 animation-custom">
                        <img src="<?php the_field('dependable_chauffeur_image2'); ?>" alt="" class="img-fluid">
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section class="pd-expensive">
        <div class="container">
            <div class="inner-pd-expensive">

                <div class="pa-why-aj-btm">
                    <?php if (have_rows('driver_repeater')):
                        while (have_rows('driver_repeater')):
                            the_row(); ?>
                            <div class="pa-why-aj-cntnt animation-custom">
                                <h3>
                                    <?php the_sub_field('driver_heading'); ?>
                                </h3>
                                <p>
                                    <?php the_sub_field('driver_para'); ?>
                                </p>
                            </div>
                        <?php endwhile; endif; ?>

                </div>

                <div class="pa-fleet">
                    <div class="pa-fleet-contnt animation-custom">
                        <h2>
                            <?php the_field('private_driver_heading'); ?>
                        </h2>
                        <?php if (have_rows('private_driver_repeater')):
                            while (have_rows('private_driver_repeater')):
                                the_row(); ?>
                                <p>
                                    <?php the_sub_field('private_driver_para'); ?>
                                </p>
                            <?php endwhile; endif; ?>

                    </div>
                    <div class="pa-fleet-image animation-custom">
                        <img src="<?php the_field('private_driver_image'); ?>" alt="" class="img-fluid">
                    </div>

                </div>

            </div>
        </div>
    </section>


<?php get_footer(); ?>