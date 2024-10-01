<?php /*Template Name: Locations */ get_header(); ?>

        <section class="mainn-banner" style="background-image: url(<?php echo esc_url( get_field( 'banner_back_img' ) ); ?>);">
            <div class="container">
				<?php if ( $banner_heading = get_field( 'banner_heading' ) ) : ?>
                <h1><?php echo $banner_heading ?></h1>
				<?php endif; ?>
            </div>
        </section>
        <section class="location-map">
            <div class="container">
                <div class="location-name">
					<?php if ( $location_heading = get_field( 'location_heading' ) ) : ?>
                    <h2 class=""><?php echo $location_heading ?></h2>
					<?php endif; ?>
					<?php if ( $location_desc = get_field( 'location_desc' ) ) : ?>
                    <p class=""><?php echo $location_desc; ?></p>
					<?php endif; ?>
                        <div class="location-image">
                            <img src="<?php echo esc_url( get_field( 'location_img' ) ); ?>" alt="" class="img-fluid animation-custom">
                        </div>
                </div>
            </div>
        </section>
        <section class="map-list">
            <div class="container">
                <h2 class=""><?php echo the_field('map_list_heading')?></h2>
                <div class="map-in-list animation-custom">
                    <ul>
						<?php if ( have_rows( 'map_list_repeater' ) ) : ?>
	<?php while ( have_rows( 'map_list_repeater' ) ) :
		the_row(); ?>
                        <li>
                            <?php if ( get_sub_field( 'showw_img' ) ) : ?>
 <span class="map-icon-logo"><img src="<?php echo esc_url( get_field( 'map_list_logo' ) ); ?>" alt=""></span>
<?php else: ?>
 
<?php endif; ?>
 
   
                            
						<?php
$link = get_sub_field( 'map_list_link' );
if ( $link ) :
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?></li>
							<?php endwhile; ?>
                               <?php endif; ?>
                        
                    </ul>
                </div>
                <p class="map-list-last-pargraph"><?php echo the_field('map_list_paragraph')?></p>
            </div>
        </section>

    <?php get_footer(); ?>