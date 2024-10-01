<?php /*Template Name: technology */ get_header(); ?>

        <section class="mainn-banner" style="background-image: url(<?php echo esc_url( get_field( 'main_banner_back_img' ) ); ?>);">
            <div class="container">
				<?php if ( $main_banner_heading = get_field( 'main_banner_heading' ) ) : ?>
                <h1><?php echo $main_banner_heading ?></h1>
				<?php endif; ?>
            </div>
        </section>
        <section class="hotel-limo-service">
            <div class="container">
                <div class="inner-book-lemo-sec">
                    <div class="road-show-content">
                        <div class="road-show-heading">
							<?php if ( $hotel_limo_service_heading = get_field( 'hotel_limo_service_heading' ) ) : ?>
                            <h2><?php echo $hotel_limo_service_heading ?></h2>
							<?php endif; ?>
                        </div>

                        <div class="book-lemo-para">
							<?php if ( $hotel_limo_service_desc = get_field( 'hotel_limo_service_desc' ) ) : ?>
                            <p><?php echo $hotel_limo_service_desc; ?></p>
                             <?php endif; ?>

                        </div>
                    </div>
                    <div class="pickup-hotel">
                        <div class="pickup-airport-contnt">
							<?php if ( $hotel_limo_service_sub_heading = get_field( 'hotel_limo_service_sub_heading' ) ) : ?>
                            <h4><?php echo $hotel_limo_service_sub_heading ?></h4>
							<?php endif; ?>
							<?php if ( $hotel_limo_service_sub_desc = get_field( 'hotel_limo_service_sub_desc' ) ) : ?>
                            <p><?php echo $hotel_limo_service_sub_desc; ?></p>
							<?php endif; ?>
                            <div class="read-btn">
								<?php
$link = get_field( 'hotel_limo_service_btn' );
if ( $link ) :
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
								<div class="ancr-image"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/ancr-arrow.svg" alt=""
                                            class="img-fluid"></div></a>
<?php endif; ?>
                               
                            </div>
                        </div>
                        <div class="hotel-image">
                            <img src="<?php echo esc_url( get_field( 'hotel_limo_service_img' ) ); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-roadshow">
            <div class="container">
                <div class="inner-roadshow">
                    <div class="roadshow-image animation-custom">
                        <img src="<?php echo esc_url( get_field( 'why_roadshow_img' ) ); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="roadshow-contnt animation-custom">
						<?php if ( $why_roadshow_heading = get_field( 'why_roadshow_heading' ) ) : ?>
                        <h2><?php echo $why_roadshow_heading ?></h2>
						<?php endif; ?>
						<?php if ( $why_roadshow__desc = get_field( 'why_roadshow__desc' ) ) : ?>
                        <p><?php echo $why_roadshow__desc; ?></p>
                       <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="smart-vehicle">
            <div class="container">
                <div class="inner-special-occasion">
                    <div class="sp-occasion-heading animation-custom">
						<?php if ( $smart_vehicle_heading = get_field( 'smart_vehicle_heading' ) ) : ?>
                        <h2><?php echo $smart_vehicle_heading ?></h2>
						<?php endif; ?>
						<?php if ( $smart_vehicle_desc = get_field( 'smart_vehicle_desc' ) ) : ?>
                        <p><?php echo $smart_vehicle_desc; ?></p>
						<?php endif; ?>
                    </div>

                    <div class="smart-vehicle-image animation-custom">
                        <img src="<?php echo esc_url( get_field( 'smart_vehicle_img' ) ); ?>" alt="" class="img-fluid">

                    </div>
                </div>


            </div>
        </section>


    <?php get_footer(); ?>