<?php /*Template Name: events */ get_header(); ?>

        <section class="mainn-banner" style="background-image: url(<?php echo esc_url( get_field( 'events_banner_bg' ) ); ?>);">
            <div class="container">
            <?php if ( $banner_main_title = get_field( 'banner_main_title' ) ) : ?>
                <h1><?php echo $banner_main_title ?></h1>
<?php endif; ?>
                
            </div>
        </section>
        <section class="hotel-limo-service">
            <div class="container">
                <div class="inner-book-lemo-sec">
                    <div class="road-show-content">
                        <div class="road-show-heading ">
                        <?php if ( $mian_transport_events_title = get_field( 'mian_transport_events_title' ) ) : ?>
                            <h2><?php echo $mian_transport_events_title  ?></h2>
<?php endif; ?> 
                        </div>

                        <div class="book-lemo-para">
                        <?php if ( $right_transport_events_content = get_field( 'right_transport_events_content' ) ) : ?>
                            <p><?php echo $right_transport_events_content; ?></p>
<?php endif; ?>
                            
                           

                        </div>
                    </div>
                    <div class="pickup-hotel">
                        <div class="pickup-airport-contnt">
                        <?php if ( $transport_events_sub_title = get_field( 'transport_events_sub_title' ) ) : ?>
                            <h4><?php echo $transport_events_sub_title ?></h4>
<?php endif; ?>
<?php if ( $transport_events_sub_content = get_field( 'transport_events_sub_content' ) ) : ?>
	<p><?php echo $transport_events_sub_content; ?></p>
<?php endif; ?>
                            
                                <div class="read-btn">
                                <?php
$link = get_field( 'transport_events_button' );
if ( $link ) :
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
     <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"> <?php echo esc_html( $link_title ); ?> <div class="ancr-image"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/ancr-arrow.svg" alt=""
                                                class="img-fluid"></div></a>
<?php endif; ?>
                                   
                                </div>
                        </div>
                        <div class="hotel-image ">
                            <img src="<?php echo esc_url( get_field( 'transport_events_content_image' ) ); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="events-big">
            <div class="container">
                <div class="events-big-image">
                    <img src="<?php echo esc_url( get_field( 'transport_events_big_image' ) ); ?>" alt="" class="img-fluid">
                </div>
                <div class="events-big-para animation-custom">
                <?php if ( have_rows( 'transport_events_bottom_content' ) ) : ?>
	<?php while ( have_rows( 'transport_events_bottom_content' ) ) :
		the_row(); ?>
		<?php if ( $transport_events_content_paragraph = get_sub_field( 'transport_events_content_paragraph' ) ) : ?>
	<p><?php echo $transport_events_content_paragraph; ?></p>
<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
                
                </div>
            </div>
        </section>
        <section class="concert-service">
            <div class="container">
                <div class="inner-concert-service">
                    <div class="concert-service-heading animation-custom">
                            <?php if ( $concert_service_heading = get_field( 'concert_service_heading' ) ) : ?>
	 <h2><?php echo $concert_service_heading ?></h2>
               <?php endif; ?>
                       

                    </div>
                    <div class="concert-service-image animation-custom">
                        <img src="<?php echo esc_url( get_field( 'concert__service_img' ) ); ?>" alt="" class="img-fluid">
                    </div>



                </div>


            </div>
        </section>
        <section class="special-occasion-2">
            <div class="container">
                <div class="inner-special-occasion2">
                    <div class="in-hotel-left">
                            <div class="inn-hotel-left animation-custom">
                            <div class="in-hotel-left-image">
                                <img src="<?php echo esc_url( get_field( 'left_hotel_img' ) ); ?>" alt="" class="img-fluid">
                            </div>
								<?php if ( have_rows( 'left_hotel_desc_repeater' ) ) : ?>
	<?php while ( have_rows( 'left_hotel_desc_repeater' ) ) :
		the_row(); ?>
		
	
                            <p><?php if ( $left_hotel_desc = get_sub_field( 'left_hotel_desc' ) ) : ?>
	<?php echo $left_hotel_desc; ?>
<?php endif; ?></p>
								<?php endwhile; ?>
<?php endif; ?>
                            `
                        </div>
                    </div>
           
           
                    <div class="in-hotel-right">
                              <div class="innn-hotel-right animation-custom">
                            <div class="in-hotel-right-image">
                                <img src="<?php echo esc_url( get_field( 'hotel_right_img' ) ); ?>" alt="" class="img-fluid">
                            </div>
								  <?php if ( $hotel_right_desc = get_field( 'hotel_right_desc' ) ) : ?>
	                                   <p><?php echo $hotel_right_desc; ?></p>
                                  <?php endif; ?>
                            
                        </div>
                        <div class="inn-hotel-right animation-custom">
                            <div class="inn-hotel-right-image">
                                <img src="<?php echo esc_url( get_field( 'hotel_right_img_2' ) ); ?>" alt="" class="img-fluid">
                            </div>
							<?php if ( $hotel_right_desc_2 = get_field( 'hotel_right_desc_2' ) ) : ?>
	                              <p><?php echo $hotel_right_desc_2; ?></p>
                            <?php endif; ?>
                            

                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
      
    <?php get_footer(); ?>