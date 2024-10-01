<?php /*Template Name: roadshows */ get_header(); ?>

    <section class="mainn-banner" style="background-image: url(<?php the_field('banner_bg'); ?>);">
        <div class="container">
            <h1>
                <?php the_field('banner_heading'); ?>
            </h1>
        </div>
    </section>
    <section class="road-show">
        <div class="inner-book-lemo-sec">
            <div class="road-show-content">
                <div class="road-show-heading">
                    <h2>
                        <?php the_field('roadshows_heading'); ?>
                    </h2>
                </div>

                <div class="book-lemo-para">
                    <p>
                        <?php the_field('roadshows_para'); ?>
                    </p>
                    <div class="read-btn">

                        <?php
                        $link = get_field('roadshows_btn');
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
            </div>
            <div class="pickup-airport">
                <div class="pickup-airport-contnt animation-custom">
                    <h4>
                        <?php the_field('roadshows_sub_heading'); ?>
                    </h4>
                    <p>
                        <?php the_field('roadshows_sub_para'); ?>
                    </p>
                    <p>
                        <?php the_field('roadshows_sub_para2'); ?>
                    </p>
                </div>
                <div class="airport-image animation-custom">
                    <img src="<?php the_field('roadshows_image'); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="why-roadshow">
        <div class="container">
            <div class="inner-roadshow">
                <div class="roadshowq-image animation-custom">
                    <img src="<?php the_field('organize_a_roadshow_image'); ?>" alt="" class="img-fluid">
                </div>
                <div class="roadshow-contnt animation-custom">
                    <h2>
                        <?php the_field('organize_a_roadshow_heading'); ?>
                    </h2>
                    <?php if (have_rows('organize_a_roadshow_para_repeater')):
                        while (have_rows('organize_a_roadshow_para_repeater')):
                            the_row(); ?>
                            <p>
                                <?php the_sub_field('organize_a_roadshow_para'); ?>
                            </p>
                        <?php endwhile; endif; ?>

                </div>
            </div>
        </div>
    </section>
    <section class="corporate-treval">
        <div class="container">
            <div class="corporate-travel-contnt">
                <div class="corporate-top">
                    <div class="phil-left animation-custom">
                        <h2>
                            <?php the_field('transportation_for_a_roadshow_heading'); ?>
                        </h2>
                        <h4>
                            <?php the_field('transportation_for_a_roadshow_sub_heading'); ?>
                        </h4>
                        <p>
                            <?php the_field('transportation_for_a_roadshow_para'); ?>
                        </p>
                    </div>

                </div>
                <div class="corporate-right animation-custom">
                    <img src="<?php the_field('transportation_for_a_roadshow_image'); ?>" alt="" class="img-fluid">


                </div>

            </div>
        </div>
    </section>
    <section class="why-aj">
        <div class="container">
            <div class="inner-aj-why">
                <div class="aj-why-right">
                    <div class="aj-why-right-image animation-custom">
                        <img src="<?php the_field('roadshow_transportation_image'); ?>" alt="" class="img-fluid">
                    </div>
                    <p class="animation-custom">
                        <?php the_field('roadshow_transportation_para'); ?>
                    </p>
                </div>
                <div class="aj-why-left">
                    <h2 class="animation-custom">
                        <?php the_field('roadshow_transportation_heading'); ?>
                    </h2>
                    <p class="animation-custom">
                        <?php the_field('roadshow_transportation_para2'); ?>
                    </p>
                    <p class="animation-custom">
                        <?php the_field('roadshow_transportation_para3'); ?>
                    </p>
                </div>

            </div>
        </div>
    </section>


<?php get_footer(); ?>