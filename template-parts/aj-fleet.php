<?php /*Template Name: aj-fleet */ get_header(); ?>

        <section class="mainn-banner" style="background-image: url(<?php echo esc_url( get_field( 'banner_bg_image' ) ); ?>);">
            <div class="container">
                <?php if ( $banner_title = get_field( 'banner_title' ) ) : ?>
                	<h1><?php echo $banner_title ?></h1>
                <?php endif; ?>
                
            </div>
        </section>
        <section class="fleeet">
            <div class="container">
                <div class="inner-founder-sec">
                    <div class="fleet-image">
                        <img src="<?php echo esc_url( get_field( 'spectacular_image' ) ); ?>" alt="founder" class="img-fluid">
                    </div>
                    <div class="fleeet-contnt">
                        <?php if ( $spectacular_sub_title = get_field( 'spectacular_sub_title' ) ) : ?>
	<span class="small-heading"><?php echo $spectacular_sub_title ?></span>
<?php endif; ?>
                        <?php if ( $spectacular_title = get_field( 'spectacular_title' ) ) : ?>
	<h2><?php echo $spectacular_title ?></h2>
<?php endif; ?>
                        <?php if ( $spectacular_content = get_field( 'spectacular_content' ) ) : ?>
	  <p><?php echo $spectacular_content; ?>
                        </p>
<?php endif; ?>

                      
                        <div class="read-btn">
                  <?php
$link = get_field( 'spectacular_button' );
if ( $link ) :
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><div class="ancr-image"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/ancr-arrow.svg" alt=""
                                        class="img-fluid"></div></a>
<?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="book-limo2">
            <div class="container">
                <div class="inner-book-limo3">
                    <?php if ( $select_your_ride_sub_title = get_field( 'select_your_ride_sub_title' ) ) : ?>
	       <span class="small-heading">
                        <?php echo $select_your_ride_sub_title ?>
                    </span>
<?php endif; ?>
             
                    <div class="ride-inner-content">
                             <div class="select-ride-heading">
                                 <?php if ( $select_your_ride_title = get_field( 'select_your_ride_title' ) ) : ?>
	<h2><?php echo $select_your_ride_title ?></h2>
<?php endif; ?>
                            
                             </div>
                    <div class="select-ride">
                        <?php if ( have_rows( 'select_your_ride_paragraph' ) ) : ?>
	<?php while ( have_rows( 'select_your_ride_paragraph' ) ) :
		the_row(); ?>
		<?php if ( $select_your_ride_contect = get_sub_field( 'select_your_ride_contect' ) ) : ?>
<p>	<?php echo $select_your_ride_contect; ?></p>
<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
                    </div>
               
                          

                    </div>
                </div>

            </div>
        </section>
        <section class="ride-cars">
            <div class="car-ride-slider owl-carousel owl-theme">
                <?php if ( have_rows( 'cars' ) ) : ?>
	<?php while ( have_rows( 'cars' ) ) :
		the_row(); ?>
		          <div class="car-item">
		              <?php if ( $car_name = get_sub_field( 'car_name' ) ) : ?>
	<h2><?php echo  $car_name  ?></h2>
<?php endif; ?>
                    
                    <div class="car-item-top">
                        <div class="car-item-image">
                            <img src="<?php echo esc_url( get_sub_field( 'car_image' ) ); ?>" alt="" class="img-fluid">
                        </div>

                    </div>
                    <div class="car-item-bottom">
                        <div class="container">
                            <div class="book-now-cardd">
                                <div class="book-now-card-text">
                                    <?php if ( $car_type = get_sub_field( 'car_type' ) ) : ?>
                                	<h3><?php echo $car_type ?></h3>
                                <?php endif; ?>
                                    <?php if ( $car_name = get_sub_field( 'car_name' ) ) : ?>
                                    	<p><?php echo $car_name ?></p>
                                    <?php endif; ?>
                                    
                                    <div class="read-btn">
                                        <?php
$link = get_sub_field( 'car_boking_button' );
if ( $link ) :
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <div class="ancr-image"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/ancr-arrow.svg"
                                                    alt="" class="img-fluid"></div></a>
<?php endif; ?>
                                    </div>
                                </div>
                                <div class="book-now-card-avail">
                                    <div class="now-card-avail">
                                       
                                        <?php if ( $passanger_limit = get_sub_field( 'passanger_limit' ) ) : ?>
                                         <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/seats1.svg" alt="" class="img-fluid">
                                    	<span><?php echo $passanger_limit; ?></span>
                                    <?php endif; ?>
                                        
                                    </div>
                                    <div class="now-card-avail">
                                        <?php if ( $booking_passangers = get_sub_field( 'booking_passangers' ) ) : ?>
                            	    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/doc1.svg" alt="" class="img-fluid">
                                        <span><?php echo $booking_passangers; ?></span>
                    <?php endif; ?>
                                    
                                    </div>
                                </div>

                            </div>
                            <div class="inner-book-limo2">
                                <span class="small-heading">
                                    Book A Ride
                                </span>
                                  <div class="ride-inner-content">
                                       <div class="select-ride-heading">
                                                              <?php if ( $car_type = get_sub_field( 'car_type' ) ) : ?>
                                    	<h2><?php echo $car_type ?></h2>
                                    <?php endif; ?>
                                        
                                         </div>
                                                    <div class="select-ride">
                                   <?php if ( have_rows( 'about_car' ) ) : ?>
	<?php while ( have_rows( 'about_car' ) ) :
		the_row(); ?>
		<?php if ( $about_car_content = get_sub_field( 'about_car_content' ) ) : ?>
	<p><?php echo $about_car_content; ?></p>
<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

                                </div>
                                  </div>
                     
                            </div>

                        </div>

                    </div>
                </div>
	<?php endwhile; ?>
<?php endif; ?>
            </div>

        </section>



    <?php get_footer(); ?>