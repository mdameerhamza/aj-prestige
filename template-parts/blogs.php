<?php /*Template Name: blogs */ get_header(); ?>

        <section class="mainn-banner" style="background-image: url(<?php echo esc_url( get_field( 'banner_bg_image' ) ); ?>);">
            <div class="container">
                <?php if ( $banner_title = get_field( 'banner_title' ) ) : ?>
	<h1><?php echo $banner_title ?></h1>
<?php endif; ?>
                
            </div>
        </section>
        <section class="blogs-page">
            <div class="container">
                <div class="blog-main-cntnt">
                    <?php if ( $articles_title = get_field( 'articles_title' ) ) : ?>
	  <h2><?php echo $articles_title ?>
                    </h2>
<?php endif; ?>
                  <?php if ( $articles_pargraph = get_field( 'articles_pargraph' ) ) : ?>
	   <p><?php echo $articles_pargraph; ?>
                    </p>
<?php endif; ?>
                 
                </div>
                <div class="inner-blog-sec">
                                               <?php
$args = array(
    'post_type' => 'post',
    'taxonomy' => 'post-category',
    'posts_per_page' => -1,
    'order' => 'DESC'
);

$the_query = new WP_Query($args);

if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();

      
?>
                    <div class="blog-card animation-custom">
                        <div class="blog-top">
                            <div class="blog-image">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="blog-bottom">
                            <span class="date"><?php echo  get_the_date('M d, Y'); ?></span>
                            <h4 class="blog-title"><?php the_title(); ?></h4>
                            <div class="blog-content-area">
                                        <p><?php
// Assuming you're using this within WordPress
$content = get_the_content();

// Create a new DOMDocument
$dom = new DOMDocument();
$dom->loadHTML($content);

// Find all <p> tags
$paragraphs = $dom->getElementsByTagName('p');

// Extract content from the first two <p> tags
$first_two_lines = '';
for ($i = 0; $i < min(2, $paragraphs->length); $i++) {
    $first_two_lines .= $paragraphs->item($i)->nodeValue . "\n";
}

// Output or use $first_two_lines as needed
echo $first_two_lines;
?></p>

                            </div>
      
                            
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
    <?php get_footer(); ?>