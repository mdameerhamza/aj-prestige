<?php /*Template Name: car-services-template */ get_header(); ?>
        <section class="mainn-banner car-page-tamplate-banner" style="background-image: url(<?php echo esc_url( get_field( 'banner_image' ) ); ?>);">
            <div class="container">
				<?php if ( $banner_title = get_field( 'banner_heading' ) ) : ?>
	                     <h1><?php echo $banner_title ?></h1>
                 <?php endif; ?>
               
            </div>
        </section>
      <section class="car-page-tamplate-wrapp">
      <div class="container">
                      <div class="car-page-tamplate-inner-wrap">
                     
                     
                    
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>
                     
                     </div>
                     </div>
      </section>

    <?php get_footer(); ?>