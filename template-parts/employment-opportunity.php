<?php /*Template Name: employment-opportunity */ get_header(); ?>

        <section class="detail-banner" style="background-image: url(<?php echo esc_url( get_field( 'banner_bg_image' ) ); ?>);">
            <div class="container">
                <?php if ( $banner_title = get_field( 'banner_title' ) ) : ?>
	 <h1><?php echo $banner_title ?></h1>
<?php endif; ?>
               
            </div>
        </section>
        <section class="apply-sec">
            <div class="container">
                <h2>apply NOW</h2>
                <div class="inner-apply-sec">
                    <?php echo do_shortcode('[contact-form-7 id="54f2ade" title="Employment Opportunity"]'); ?>
                </div>
            </div>
        </section>
    <?php get_footer(); ?>