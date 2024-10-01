<?php /*Template Name: chicago-service */ get_header(); ?>

    <section class="mainn-banner" style="background-image: url(<?php the_field('banner_image'); ?>);">
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
    <section class="LIMOUSINE-service chicago-service">
        
            <?php if ( have_rows( 'service' ) ) : ?>
	<?php while ( have_rows( 'service' ) ) :
		the_row(); ?>
		  <div class="inner-roadshow-upper">
		<div class="container">
		     <div class="inner-roadshow">
                <div class="LIMOUSINE-service-image animation-custom">
                    <img src="<?php echo esc_url( get_sub_field( 'service_image' ) ); ?>" alt="" class="img-fluid">
                </div>
                <div class="roadshow-contnt animation-custom">
                    <?php if ( $service_sub_heading = get_sub_field( 'service_sub_heading' ) ) : ?>
	 <span class="small-heading">
                        <?php echo $service_sub_heading ?>
                    </span>
<?php endif; ?>
                   <?php if ( $service_main_heading = get_sub_field( 'service_main_heading' ) ) : ?>
	   <h2>
                      <?php echo $service_main_heading ?>
                    </h2>
<?php endif; ?>
                 <?php if ( have_rows( 'service_content' ) ) : ?>
	<?php while ( have_rows( 'service_content' ) ) :
		the_row(); ?>
		<?php if ( $service_content_paragraph = get_sub_field( 'service_content_paragraph' ) ) : ?>
	 <p>
                       <?php echo $service_content_paragraph; ?>
                    </p>
<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

                   
                </div>
            </div>
             </div>
             </div>
	<?php endwhile; ?>
<?php endif; ?>
       
       
    </section>
       <?php if ( $bleisure_travel_title = get_field( 'bleisure_travel_title' ) ) : ?>
    <section class="bleisure-travel">
        <div class="container">
            <div class="bleisure-travel-flex">
                    <div class="bleisure-travel-heading">
             
	<h2><?php echo $bleisure_travel_title ?></h2>

<?php if ( $bleisure_travel_content = get_field( 'bleisure_travel_content' ) ) : ?>
	<p><?php echo $bleisure_travel_content; ?></p>
<?php endif; ?>
            </div>
            <div class="bleisure-travel-content">
                <?php if ( have_rows( 'bleisure_travel_paragraph' ) ) : ?>
	<?php while ( have_rows( 'bleisure_travel_paragraph' ) ) :
		the_row(); ?>
		<?php if ( $bleisure_travel_content_paragraph = get_sub_field( 'bleisure_travel_content_paragraph' ) ) : ?>
<p>	<?php echo $bleisure_travel_content_paragraph; ?></p>
<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
            </div>
            </div>
        
        </div>
    </section>
    <?php endif; ?>
            <?php if ( $why_book_a_limo_heading = get_field( 'why_book_a_limo_heading' ) ) : ?>
    <section class="airport-why-aj-2">
        <div class="container">
            <div class="pa-why-aj-2">
                <div class="airport-why-aj-2-top-heading">
            
<h2>	<?php echo $why_book_a_limo_heading ?></h2>

<?php if ( $why_book_a_limo_sub_heading = get_field( 'why_book_a_limo_sub_heading' ) ) : ?>
<p>	<?php echo $why_book_a_limo_sub_heading; ?></p>
<?php endif; ?>
                </div>
                <div class="pa-why-aj-tp-2">
                    <div class="pa-why-aj-heading-2 animation-custom">
                     <?php if ( have_rows( 'why_book_a_limo_para' ) ) : ?>
	<?php while ( have_rows( 'why_book_a_limo_para' ) ) :
		the_row(); ?>
<?php if ( $why_book_a_limo_content_para = get_sub_field( 'why_book_a_limo_content_para' ) ) : ?>
<p>	<?php echo $why_book_a_limo_content_para; ?></p>
<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
                  
                    </div>
                    <div class="pa-why-aj-image-2">
                        <div class="pa-why-in-image-2 animation-custom">
                            <img src="<?php echo esc_url( get_field( 'why_book_a_limo_image' ) ); ?>" alt="" class="img-fluid">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php endif; ?>
     <?php if ( $airport_shuttle_service_heading = get_field( 'airport_shuttle_service_heading' ) ) : ?>
    <section class="shuttle-service">
        <div class="container">
            <div class="inner-Professional-Chauffeurs">
                <div class="Professional-Chauffeurs-left animation-custom">
                    <h2>
                     	<?php echo $airport_shuttle_service_heading ?>
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
        </div>
    </section>
    <?php endif; ?>
        <section class="pd-expensive good-personal-main">
            <?php if ( have_rows( 'good_personal' ) ) : ?>
            <div class="good-personal">
                      <div class="container">
                     <div class="pa-why-aj-btm">
                    
	<?php while ( have_rows( 'good_personal' ) ) :
		the_row(); ?>
		       <div class="pa-why-aj-cntnt animation-custom">
		           <?php if ( $good_personal_title = get_sub_field( 'good_personal_title' ) ) : ?>
	   <h3>
                                    <?php echo $good_personal_title  ?>
                                </h3>
<?php endif; ?>
                             <?php if ( $good_personal_content = get_sub_field( 'good_personal_content' ) ) : ?>
	  <p>
                                    <?php echo $good_personal_content; ?>
                                </p>
<?php endif; ?>
                              
                            </div>
	<?php endwhile; ?>

       
                </div>
        </div>
            </div>
  <?php endif; ?>
            <?php if ( $booking_private_title = get_field( 'booking_private_title' ) ) : ?>
            <div class="booking-private-title-area">
                        <div class="container">
                <div class="pa-fleet">
                    <div class="pa-fleet-contnt animation-custom">
                   
                	 <h2>
                            <?php echo $booking_private_title ?>
                        </h2>
                <?php if ( have_rows( 'booking_private_content' ) ) : ?>
                	<?php while ( have_rows( 'booking_private_content' ) ) :
                		the_row(); ?>
                		<?php if ( $booking_private_content = get_sub_field( 'booking_private_content' ) ) : ?>
                <p>	<?php echo $booking_private_content; ?></p>
                <?php endif; ?>
                	<?php endwhile; ?>
                <?php endif; ?>

                    </div>
                    <div class="pa-fleet-image animation-custom">
                        <img src="<?php echo esc_url( get_field( 'booking_private_image' ) ); ?>" alt="" class="img-fluid">
                    </div>

                </div>
                 </div>
            </div>
    
<?php endif; ?>
    </section>
    
<?php get_footer(); ?>
