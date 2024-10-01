<?php /*Template Name: who-we-are */ get_header(); ?>
        <section class="mainn-banner" style="background-image: url(<?php echo esc_url( get_field( 'banner_background' ) ); ?>);">
            <div class="container">
				<?php if ( $banner_title = get_field( 'banner_title' ) ) : ?>
	                     <h1><?php echo $banner_title ?></h1>
                 <?php endif; ?>
               
            </div>
        </section>
        <section class="book-lemo">
                <div class="inner-book-lemo-sec">
                    <div class="book-lemo-content">
                        <div class="book-lemo-heading">
							<?php if ( $book_lemo_heading = get_field( 'book_lemo_heading' ) ) : ?>
	                                    <h2><?php echo $book_lemo_heading ?></h2>
<?php endif; ?>
                        
                        </div>
                        
                        <div class="book-lemo-para">
							<?php if ( $book_lemo_desc = get_field( 'book_lemo_desc' ) ) : ?>
                            <p><?php echo $book_lemo_desc; ?></p>
							<?php endif; ?>
                            <div class="read-btn">
								<?php
$link = get_field( 'book_lemo_btn' );
if ( $link ) :
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
								
                                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><div class="ancr-image"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/ancr-arrow.svg" alt=""
                                            class="img-fluid"></div></a>
	<a class="button" href="" ></a>
<?php endif; ?>
                            </div>

                        </div>
                    </div>
                    <div class="pickup-airport">
                        <div class="pickup-airport-contnt">
							<?php if ( $pickup_airport_heading = get_field( 'pickup_airport_heading' ) ) : ?>
                            <h4><?php echo $pickup_airport_heading ?></h4>
							<?php endif; ?>
							<?php if ( $pickup_airport_desc = get_field( 'pickup_airport_desc' ) ) : ?>
                            <p><?php echo $pickup_airport_desc; ?></p>
							<?php endif; ?>
                        </div>
                        <div class="airport-image animation-custom">
                            <img src="<?php echo esc_url( get_field( 'pickup_airport_img' ) ); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
        </section>
      
        <section class="corporate-treval-w">
            <div class="container">
                <div class="corporate-travel-contnt-w">
                   
                        <div class="corporate-left-w animation-custom">
							<?php if ( $cooperate_heading_1 = get_field( 'cooperate_heading_1' ) ) : ?>
	                               <h2><?php echo $cooperate_heading_1 ?></h2>  
                             <?php endif; ?>
                            <?php if ( $cooperate_heading_2 = get_field( 'cooperate_heading_2' ) ) : ?>
                            <h4><?php echo $cooperate_heading_2 ?></h4>
							<?php endif; ?>
							<?php if ( $cooperate_desc = get_field( 'cooperate_desc' ) ) : ?>
                        <p><?php echo $cooperate_desc; ?></p>
							<?php endif; ?>
                        </div>
                    
                        <div class="corporate-right-image-w animation-custom">
                        <div class="mnbv">
                            <img src="<?php echo esc_url( get_field( 'cooperate_img' ) ); ?>" alt="" class="img-fluid">
                        </div>
                            
                        </div>

                </div>
            </div>
        </section>
        <section class="offers-solution-w">
            <div class="container">
                <div class="inner-offer-solution">
                        <div class="offer-solution-heading animation-custom">
							<?php if ( $offer_solution_heading_1 = get_field( 'offer_solution_heading_1' ) ) : ?>
                            <h2><?php echo $offer_solution_heading_1 ?></h2>
							<?php endif; ?>
							<?php if ( $offer_solution_heading_2 = get_field( 'offer_solution_heading_2' ) ) : ?>
                            <h4><?php echo $offer_solution_heading_2 ?></h4>
							<?php endif; ?>
							<?php if ( $offer_solution_desc = get_field( 'offer_solution_desc' ) ) : ?>
                            <p><?php echo $offer_solution_desc; ?></p>
							<?php endif; ?>
                        </div>
                        <div class="offer-solution-right-image animation-custom">
                            <div class="mnbv">
                            <img src="<?php echo esc_url( get_field( 'offer_solution_img' ) ); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
        </section>

    <?php get_footer(); ?>