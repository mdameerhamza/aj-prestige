<?php /*Template Name: north-america-reservation */ get_header(); ?>
   <section class="banner">
  <div class="main-banner">
    <div class="banner-swiper">
      <div class="swiper background-image-slider">
        <div class="swiper-wrapper">
          <?php if( have_rows('banner_slider_repeater') ):  while ( have_rows('banner_slider_repeater') ) : the_row(); ?>
            <div class="swiper-slide" style="background-image: url(<?php the_sub_field('north_banner_slider_bg'); ?>);">
            </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="static-content">

          <div class="slider-name1">
            <h1><?php the_field('north_banner_repeater_heading'); ?></h1>
            <span><?php the_field('north_banner_text'); ?></span>
          </div>
          <div class="slider-frame">
            <?php if ( $home_banner_iframe = get_field( 'north_banner_iframe' ) ) : ?>
              <?php echo $home_banner_iframe; ?>
            <?php endif; ?>
          </div>
      </div>
    </div>
  </div>
</section>


        <section class="chicago-about2">
            <div class="container">
                <div class="about2-in-sec animation-custom">
                    <?php if ( $about_heading = get_field( 'north_about_heading' ) ) : ?>
                    	<h2><?php echo $about_heading ?></h2>
                    <?php endif; ?>
                    <?php if ( $about_para = get_field( 'north_about_para' ) ) : ?>
                                        <p>	<?php echo $about_para; ?> </p>
                    <?php endif; ?>
                    
<?php
$link = get_field( 'north_about_btn' );
if ( $link ) :
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<a class="primary-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span><img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/arrow-left 22323.svg"
                            alt="" class="img-fluid"></a>
<?php endif; ?>
                </div>
                <div class="about2-image-chicago animation-custom">
                    <img src="<?php echo esc_url( get_field( 'north_about_image' ) ); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </section>
      
    <!-- <section class="page-contact">-->
    <!--    <div class="container">-->
    <!--        <div class="contact2-send-message-right">-->
    <!--            <h2><?php the_field('contact_form_heading'); ?></h2>-->
                
    <!--            <?php echo do_shortcode( '[contact-form-7 id="06ffd70" title="contact us form"]' ); ?>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
        

<?php get_footer(); ?>