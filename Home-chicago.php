<?php /*Template Name: Home-chicago */ get_header(); ?>
        <section class="banner">
            <div class="main-banner">
                <div class="banner-swiper">
                    <div class="swiper-slide">
                        <div class="slider-bg" style="background-image: url(<?php echo esc_url( get_field( 'home_banner_bg' ) ); ?>);">
                            <div class="slider-name1">
                                <?php if ( $home_banner_heading = get_field( 'home_banner_heading' ) ) : ?>
                                	<h1><?php echo $home_banner_heading ?></h1>
                                <?php endif; ?>
                                <?php if ( $home_banner_text = get_field( 'home_banner_text' ) ) : ?>
                                	<span><?php echo $home_banner_text ?></span>
                                <?php endif; ?>
                                
                            </div>
                            <div class="slider-frame">
                                <?php if ( $home_banner_iframe = get_field( 'home_banner_iframe' ) ) : ?>
	<?php echo $home_banner_iframe; ?>
<?php endif; ?>
                               
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="chicago-about2">
            <div class="container">
                <div class="about2-in-sec animation-custom">
                    <?php if ( $about_heading = get_field( 'about_heading' ) ) : ?>
                    	<h2><?php echo $about_heading ?></h2>
                    <?php endif; ?>
                    <?php if ( $about_para = get_field( 'about_para' ) ) : ?>
                                        <p>	<?php echo $about_para; ?> </p>
                    <?php endif; ?>
                    
<?php
$link = get_field( 'about_btn' );
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
                    <img src="<?php echo esc_url( get_field( 'about_image' ) ); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </section>
        <section class="service2-chicago">
            <div class="container">
            <?php if ( $service_small_heading = get_field( 'service_small_heading' ) ) : ?>
            	<span class="small-heading animation-custom"><?php echo $service_small_heading ?></span>
            <?php endif; ?>
            <?php if ( $services_heading = get_field( 'services_heading' ) ) : ?>
                <h2 class="animation-custom"><?php echo $services_heading ?></h2>
            <?php endif; ?>
                
                <div class="servive2-inner aj-home-chicago-services animation-custom">
                <?php if ( have_rows( 'service_card_repeater' ) ) : ?>
	<?php while ( have_rows( 'service_card_repeater' ) ) :
		the_row(); ?>
		 <div class="serv-card">
                        <div class="in-serv">
                            <div class="serv-img">
                                <img src="<?php echo esc_url( get_sub_field( 'service_card_icon' ) ); ?>" alt="" class="img-fluid">
                            </div>
                            <?php if ( $service_card_heading = get_sub_field( 'service_card_heading' ) ) : ?>
                            	 <h4><?php echo $service_card_heading ?></h4>
                            <?php endif; ?>
                           <?php if ( $service_card_para = get_sub_field( 'service_card_para' ) ) : ?>
                             <p>	<?php echo $service_card_para; ?></p>
                            <?php endif; ?>
                           
                            <div class="readd-btn">
                            <?php
                        $link = get_sub_field( 'service_card_btn' );
                        if ( $link ) :
                        	$link_url = $link['url'];
                        	$link_title = $link['title'];
                        	$link_target = $link['target'] ? $link['target'] : '_self';
                        	?>
                        	<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <div class="ancr-image"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/ancr-arrow.svg" alt=""
                                                                    class="img-fluid animate"></div></a>
                        <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
	<?php endwhile; ?>
<?php endif; ?>
                   
                
                </div>
            </div>
        </section>
        <section class="blogs">
            <div class="container">
                <div class="blog-main-cntnt animation-custom">
                <?php if ( $blogs_heading = get_field( 'blogs_heading' ) ) : ?>
	<h2><?php echo $blogs_heading ?>
                    </h2>
<?php endif; ?>
                    <?php if ( $blogs_sub_paragraph = get_field( 'blogs_sub_paragraph' ) ) : ?>
	<p><?php echo $blogs_sub_paragraph; ?></p>
<?php endif; ?>
                    
                </div>
                <div class="inner-blog-sec animation-custom">
                           <?php
$args = array(
    'post_type' => 'post',
    'taxonomy' => 'post-category',
    'posts_per_page' => 2,
    'order' => 'DESC'
);

$the_query = new WP_Query($args);

if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();

      
?>
                    <div class="blog-card">
                        <div class="blog-top">
                            <div class="blog-image">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="blog-bottom">
                            <span class="date"><?php echo  get_the_date('M d, Y'); ?></span>
                            <h4 class="blog-title"><?php the_title(); ?></h4>
                            <p class="blog-para" style="display:none;"><?php
$content = get_the_content(); // Assuming you're using this within WordPress

// Split the content into an array of lines
$lines = explode("\n", $content);

// Take the first two lines
$first_two_lines = array_slice($lines, 0, 2);

// Join the first two lines back into a string
$first_two_lines_output = implode("\n", $first_two_lines);

// Output or use $first_two_lines_output as needed
echo $first_two_lines_output;
?></p>
                            
                                <a href="<?php the_permalink(); ?>" class="blog-btn">Read More <img src="<?php bloginfo('template_directory'); ?>/assets/images/blog-rit-arrow.svg" alt="" class="img-fluid"></a>
                            
                        </div>
                    </div>
                        <?php
    endwhile;
else:
    // Handle the case where no products are found
    echo 'Blog not found.';
endif;
wp_reset_postdata();
?>
                
                </div>
            </div>
        </section>
    <!--here-->
    <section class="client-tstmnl">
        <!--<div class="container">-->
            <div class="testimoniasl-google-reviews-aj">
        <span class="small-heading">
                <?php the_field('client_testimonal_small_heading'); ?>
            </span>
            <h2>
                <?php the_field('client_testimonal_heading'); ?>
            </h2>
            </div>
            <div class="google_reviews">
            <?php //echo do_shortcode('[trustindex no-registration=google]');?>
            <?php echo do_shortcode('[wprevpro_usetemplate tid="1"]') ?>
            </div>
            
            <div class="btn_holder">
                <a href="https://g.co/kgs/ugs14kv" target="_blank">View All Reviews</a>
            </div>
            <!--</div>-->
       
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