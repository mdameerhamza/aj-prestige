<?php get_header(); ?>

        <section class="detail-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <div class="container">
                <h1><?php the_title(); ?></h1>
            </div>
        </section>
        <section class="blog-detail">
            <div class="container">
                <!--<h2 class="animation-custom">Closest Airports to Chicago – Amenities and Limo Service</h2>-->
                <div class="blog-detail-profile-image-box">
                    <div class="profile-text-image">
                        <div class="blog-profile-pic">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/detail-loog.svg" alt="" class="img-fluid">
                        </div>
                        <div class="blog-profile-title">
                            <h4>By AJ CHICAGO</h4>
                        </div>
                    </div>
                    <span class="bloge-date"><?php echo  get_the_date('M d, Y'); ?></span>
                </div>

                <div class="bloge-content-area">
                    <?php the_content(); ?>
                </div>
            
            </div>
        </section>
        <section class="continue-reading">
            <div class="container">
                <h2>Continue Reading</h2>
                <div class="inner-detail-blogs">
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