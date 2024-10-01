<?php /*Template Name: aj-diffrence */ get_header(); ?>

        <section class="mainn-banner" style="background-image: url(<?php echo esc_url( get_field( 'main_banner_back' ) ); ?>);">
            <div class="container">
				<?php if ( $main_banner_heading = get_field( 'main_banner_heading' ) ) : ?>
                <h1><?php echo $main_banner_heading ?></h1>
				<?php endif; ?>
            </div>
        </section>
        <section class="philosofy-diff">
            <div class="container">
                <div class="innnr-philosfy-diff">
                    <div class="philosofy-diff-contnt">
                        <div class="philosofy-diff-left">
                            <div class="philosofy-diff-text">
								<?php if ( $philosofy_diff_heading = get_field( 'philosofy_diff_heading' ) ) : ?>
                                <h2><?php echo $philosofy_diff_heading ?></h2>
								<?php endif; ?>
								<?php if ( $philosofy_diff_desc = get_field( 'philosofy_diff_desc' ) ) : ?>
                                <p><?php echo $philosofy_diff_desc; ?></p>
								<?php endif; ?>
                            </div>
    
    
                        </div>
    
                        <div class="philosofy-diff-right">
                            <div class="philosofy-diff-image">
                                <img src="<?php echo esc_url( get_field( 'philosofy_diff_image' ) ); ?>" alt="" class="img-fluid">
                            </div>
                            
    
                        </div>
                        
    
                    </div>
					<?php if ( $philosofy_diff_image_text = get_field( 'philosofy_diff_image_text' ) ) : ?>
                    <h4><?php echo $philosofy_diff_image_text ?></h4>
					<?php endif; ?>
                </div>
                
            </div>
        </section>

        <section class="Professional-Chauffeurs">
            <div class="container">
                <div class="inner-Professional-Chauffeurs">
                    <div class="Professional-Chauffeurs-left animation-custom">
						<?php if ( $professional_chauffeurs_heading = get_field( 'professional_chauffeurs_heading' ) ) : ?>
                        <h2><?php echo $professional_chauffeurs_heading ?></h2>
						<?php endif; ?>
                        <div class="Professional-Chauffeurs-cntnt">
							<?php if ( $professional_chauffeurs_desc = get_field( 'professional_chauffeurs_desc' ) ) : ?>
                            <p><?php echo $professional_chauffeurs_desc; ?></p>
							<?php endif; ?>
							<?php if ( $professional_chauffeurs_sub_heading = get_field( 'professional_chauffeurs_sub_heading' ) ) : ?>
                            <h3><?php echo $professional_chauffeurs_sub_heading ?></h3>
							<?php endif; ?>
							<?php if ( $professional_chauffeurs_sub_desc = get_field( 'professional_chauffeurs_sub_desc' ) ) : ?>
                            <p><?php echo $professional_chauffeurs_sub_desc; ?></p>
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="Professional-Chauffeurs-right">
                        <div class="Professional-image1 animation-custom">
                            <img src="<?php echo esc_url( get_field( 'professional_chauffeurs_img_1' ) ); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="Professional-image2 animation-custom">
                            <img src="<?php echo esc_url( get_field( 'professional_chauffeurs_img_2' ) ); ?>" alt="" class="img-fluid">
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <section class="commitment">
            <div class="container">
				<?php if ( $commitment_span = get_field( 'commitment_span' ) ) : ?>
                <span class="small-heading animation-custom"><?php echo $commitment_span ?></span>
				<?php endif; ?>
				<?php if ( $commitment_heading = get_field( 'commitment_heading' ) ) : ?>
                <h2 class="animation-custom"><?php echo $commitment_heading ?></h2>
				<?php endif; ?>
                <div class="inner-commitment-sec animation-custom">
					<?php if ( have_rows( 'commitment_repeater' ) ) : ?>
	<?php while ( have_rows( 'commitment_repeater' ) ) :
		the_row(); ?>
                    <div class="commtment-sec">
                        <div class="commitment-card">
                            <span></span>
							<?php if ( $commitment_card_heading = get_sub_field( 'commitment_card_heading' ) ) : ?>
                            <h4><?php echo $commitment_card_heading ?></h4>
							<?php endif; ?>
							<?php if ( $commitment_card_desc_ = get_sub_field( 'commitment_card_desc_' ) ) : ?>
                            <p><?php echo $commitment_card_desc_; ?></p>
							<?php endif; ?>
                        </div>
                    </div>
						<?php endwhile; ?>
                            <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="elevate-jrny">
            <div class="container">
                <div class="schedule-top animation-custom">
					<?php if ( $elevate_jrny_heading = get_field( 'elevate_jrny_heading' ) ) : ?>
                    <h2><?php echo esc_html( $elevate_jrny_heading ); ?></h2>
					<?php endif; ?>
                </div>
                <div class="schedule-bottom">
                    <div class="elevate-jrny-image animation-custom">
                        <img src="<?php echo esc_url( get_field( 'elevate_jrny_img' ) ); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="schedule-cntnt animation-custom">
						<?php if ( $elevate_jrny_desc = get_field( 'elevate_jrny_desc' ) ) : ?>
                        <h3><?php echo $elevate_jrny_desc; ?></h3>
						<?php endif; ?>
                        <div class="read-btn">
							<?php
$link = get_field( 'elevate_jrny_btn' );
if ( $link ) :
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <div class="ancr-image"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/ancr-arrow.svg" alt=""
                                        class="img-fluid"></div></a>
<?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php get_footer(); ?>
