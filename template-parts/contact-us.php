<?php /*Template Name: Contact-Us-Chicago */ get_header(); ?>
    <main id="main">
        <section class="mainn-banner" style="background-image: url(<?php the_field('banner_bg_image')?>);">
            <div class="container">
                <h1><?php echo the_field('banner_title')?></h1>
            </div>
        </section>
        <section class="contact2-send-message">
            <div class="container">
                <h2 class="animation-custom"><?php echo the_field('contact_form_title')?></h2>
                <div class="contact2-inner-send-message">

                   <div class="contact2-send-message-right">
                <h2><?php the_field('contact_form_heading','option'); ?></h2>
                
                <?php echo do_shortcode( '[contact-form-7 id="06ffd70" title="contact us form"]' ); ?>
            </div>
                </div>
            </div>
        </section>

    </main>

    <?php get_footer(); ?>