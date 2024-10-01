<?php /*Template Name: home */ get_header(); ?>
    <section class="banner">
        <div class="main-banner">
            <div class="banner-swiper">
                <div class="swiper-slide">
                    <div class="slider-bg" style="background-image: url(<?php the_field('home_banner_bg'); ?>);">
                        <div class="slider-name1">
                            <h1>
                                <?php the_field('home_banner_heading'); ?>
                            </h1>
                            <span>
                                <?php the_field('home_banner_text'); ?>
                            </span>
                        </div>
                        <div class="slider-frame">
                            <?php if ( $home_banner_iframe = get_field( 'home_banner_iframe' ) ) : ?>
	<?php echo $home_banner_iframe; ?>
<?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="about2">
        <div class="container">
            <div class="about2-in-sec animation-custom">
                <h2>
                    <?php the_field('about_heading'); ?>
                </h2>
                <p>
                    <?php the_field('about_para'); ?>
                </p>

                <?php
                $link = get_field('about_btn');
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="primary-button" href="<?php echo esc_url($link_url); ?>"
                        target="<?php echo esc_attr($link_target); ?>">
                        <span>
                            <?php echo esc_html($link_title); ?>
                        </span>
                        <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/arrow-left 22323.svg" alt=""
                            class="img-fluid">
                    </a>
                <?php endif; ?>
            </div>
            <div class="about2-image animation-custom">
                <img src="<?php the_field('about_image'); ?>" alt="" class="img-fluid">
            </div>
        </div>
    </section>
    <section class="service2">
        <div class="container">
            <span class="small-heading animation-custom">
                <?php the_field('service_small_heading'); ?>
            </span>
            <h2 class="animation-custom">
                <?php the_field('services_heading'); ?>
            </h2>
            <div class="servive2-inner animation-custom">

                <?php if (have_rows('service_card_repeater')):
                    while (have_rows('service_card_repeater')):
                        the_row(); ?>
                        <div class="serv-card">
                            <div class="in-serv">
                                <div class="serv-img">
                                    <img src="<?php the_sub_field('service_card_icon'); ?>" alt="" class="img-fluid">
                                </div>
                                <h4>
                                    <?php the_sub_field('service_card_heading'); ?>
                                </h4>
                                <p>
                                    <?php the_sub_field('service_card_para'); ?>
                                </p>
                                <div class="readd-btn">
                                    <?php
                                    $link = get_sub_field('service_card_btn');
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
                                                    alt="" class="img-fluid animate"></div>
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>

            </div>
        </div>
    </section>
    <section class="inderies">
        <div class="container">
            <div class="inner-inderies">
                 <div class="right-inderies">
                    <div class="small-heading">
                        <?php the_field('industries_right_static_small_heading'); ?>
                    </div>
                    <h2>
                        <?php the_field('industries_right_static_heading'); ?>
                    </h2>
                    <p>
                        <?php the_field('industries_right_static_para'); ?>
                    </p>

                    <?php
                    $link = get_field('industries_right_static_btn');
                    if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="primary-button" href="<?php echo esc_url($link_url); ?>"
                            target="<?php echo esc_attr($link_target); ?>">
                            <span>
                                <?php echo esc_html($link_title); ?>
                            </span>
                            <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/arrow-left 22323.svg" alt=""
                                class="img-fluid">
                        </a>
                    <?php endif; ?>
                </div>
                <div class="left-inderies">
                    <?php if (have_rows('industries_left_custom_repeater')):
                        while (have_rows('industries_left_custom_repeater')):
                            the_row(); ?>
                            <div class="inderies-card">
                                <div class="inderies-verticle"
                                    style="background:<?php the_sub_field('industries_left_custom_bg_picker'); ?>;">
                                    <h4>
                                        <?php the_sub_field('industries_left_custom_heading'); ?>
                                    </h4>
                                </div>
                                <div class="inderies-horizontle"
                                    style="background:<?php the_sub_field('industries_left_custom_bg_picker'); ?>;">
                                    <h2>
                                        <?php the_sub_field('industries_left_custom_heading'); ?>
                                    </h2>
                                    <div class="inderies-horizontle-image">
                                        <img src="<?php the_sub_field('industries_left_custom_icon'); ?>" alt=""
                                            class="img-fluid">
                                    </div>
                                    <p>
                                        <?php the_sub_field('industries_left_custom_para'); ?>
                                    </p>
                                    <div class="crd-readd-btn">

                                        <?php
                                        $link = get_sub_field('industries_left_custom_btn');
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
                                                        alt="" class="img-fluid animate"></div>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>


                </div>
               
            </div>
        </div>
    </section>
    <section class="client-tstmnl" id="review-section">
        <!--<div class="container">-->
            <div class="testimoniasl-google-reviews-aj">
        <span class="small-heading">
                <?php the_field('client_testimonal_small_heading'); ?>
            </span>
            <h2>
                <?php the_field('client_testimonal_heading'); ?>
            </h2>
            </div>
            <div class="google_reviews">
            <?php echo do_shortcode('[trustindex no-registration=google]');?>
            </div>
            
            <div class="btn_holder">
                <a href="https://g.co/kgs/ugs14kv" target="_blank">View All Reviews</a>
            </div>
            <!--</div>-->
       
    </section>


<?php get_footer(); ?>