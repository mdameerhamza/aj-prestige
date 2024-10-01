<?php /*Template Name: hotels */ get_header(); ?>

    <section class="mainn-banner" style="background-image: url(<?php the_field('banner_bg'); ?>);">
        <div class="container">
            <h1>
                <?php the_field('banner_heading'); ?>
            </h1>
        </div>
    </section>
    <section class="hotel-limo-service">
        <div class="container">
            <div class="inner-book-lemo-sec">
                <div class="road-show-content">
                    <div class="road-show-heading">
                        <h2>
                            <?php the_field('hotels_shuttle_heading'); ?>
                        </h2>
                    </div>

                    <div class="book-lemo-para animation-custom">
                        <p>
                            <?php the_field('hotels_shuttle_para'); ?>
                        </p>
                        <div class="read-btn">

                            <?php
                            $link = get_field('hotels_shuttle_btn');
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
                <div class="pickup-hotel">
                    <div class="pickup-airport-contnt">
                        <h4>
                            <?php the_field('hotels_shuttle_sub_heading'); ?>
                        </h4>
                        <p>
                            <?php the_field('hotels_shuttle_sub_para'); ?>
                        </p>
                    </div>
                    <div class="hotel-image animation-custom">
                        <img src="<?php the_field('hotels_shuttle_image'); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-roadshow">
        <div class="container">
            <div class="inner-roadshow">
                <div class="roadshow-image animation-custom">
                    <img src="<?php the_field('hourly_limo_image'); ?>" alt="" class="img-fluid">
                </div>
                <div class="roadshow-contnt animation-custom">
                    <h2>
                        <?php the_field('hourly_limo_heading'); ?>
                    </h2>
                    <p>
                        <?php the_field('hourly_limo_para1'); ?>
                    </p>
                    <p>
                        <?php the_field('hourly_limo_para2'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="hotel-why-aj-2">
        <div class="container">
            <div class="pa-why-aj-tp-2">
                <div class="hotel-why-aj-heading-2 animation-custom">
                <?php if ( $jfk_title = get_field( 'jfk_title' ) ) : ?>
                    <h2><?php echo $jfk_title ?></h2>
                <?php endif; ?>
                <?php if ( $jfk_paragraph = get_field( 'jfk_paragraph' ) ) : ?>
                    <p><?php echo $jfk_paragraph; ?></p>
                <?php endif; ?>
                    
                </div>
                <div class="hotel-why-aj-image-2 animation-custom">

                    <img src="<?php echo esc_url( get_field( 'jfk_image' ) ); ?>" alt="" class="img-fluid">


                </div>
            </div>

        </div>
    </section>
    <section class="hotel-nearme">
        <div class="container">
            <div class="inner-Professional-Chauffeurs">
                <div class="Professional-Chauffeurs-left animation-custom">
                <?php if ( $chauffeur_title = get_field( 'chauffeur_title' ) ) : ?>
                    <h2><?php echo $chauffeur_title ?></h2>
<?php endif; ?>
                    
                    <div class="Professional-Chauffeurs-cntnt">
                    <?php if ( $chauffeur_content = get_field( 'chauffeur_content' ) ) : ?>
	<p><?php echo $chauffeur_content; ?></p>
<?php endif; ?>
                    
                    </div>
                </div>
                <div class="Professional-Chauffeurs-right">
                    <div class="Professional-image1 animation-custom">
                        <img src="<?php echo esc_url( get_field( 'chauffeur_image_one' ) ); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="Professional-image2 animation-custom">
                        <img src="<?php echo esc_url( get_field( 'chauffeur_image_two' ) ); ?>" alt="" class="img-fluid">
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section class="thanx">
        <div class="container animation-custom">
        <?php if ( $high_quality_title = get_field( 'high_quality_title' ) ) : ?>
            <h2><?php echo $high_quality_title ?></h2>
<?php endif; ?>
<?php if ( $high_quality_content = get_field( 'high_quality_content' ) ) : ?>
    <p><?php echo $high_quality_content; ?>
            </p>
<?php endif; ?>
          
        </div>
    </section>
    <section class="vedioss">
        <div class="container">
            <div class="life_time_video_side animation-custom">
                <div class="life_time_video_bg">
                    <div class="video-player">
                    <?php $high_quality_video = get_field( 'high_quality_video' ); if ( $high_quality_video ) : ?>
                            <video id="myVideo" poster="<?php echo esc_url( get_field( 'high_quality_video_poster' ) ); ?>">
                                <source src="<?php echo esc_url( $high_quality_video['url'] ); ?>" type="video/mp4">
                          </video>
                        <?php endif; ?>
                       
                        <div class="life_time_video_hover">
                            <button onclick="playVid()" class="first"> <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/play.svg" alt=""></button>
                            <button onclick="pauseVid()" class="second"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/pause.svg" alt=""></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
   

<?php get_footer(); ?>