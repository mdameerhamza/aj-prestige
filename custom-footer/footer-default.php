    <section class="page-contact page-contact-footer">
        <div class="container">
            <div class="contact2-send-message-right">
                <h2><?php the_field('contact_form_heading','option'); ?></h2>
                
                <?php echo do_shortcode( '[contact-form-7 id="06ffd70" title="contact us form"]' ); ?>
            </div>
        </div>
    </section>
<footer id="footer">

    <div class="footer-middle-in">
        <div class="footer-logo">
            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php the_field('footer_logo', 'option'); ?>"
                    alt="logo" class="img-fluid"></a>
        </div>
        <div class="footer-social-bottom-listtt">
            <ul>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Our Company </a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
            </ul>
        </div>
        <div class="social-iconsss">
            <ul>
                <?php if (have_rows('footer_social_icon_repeater', 'option')):
                    while (have_rows('footer_social_icon_repeater', 'option')):
                        the_row(); ?>
                        <li><a href="<?php the_sub_field('footer_social_icon_link', 'option'); ?>" target="_blank"><img src="<?php the_sub_field('footer_social_icon', 'option'); ?>" alt="social-icon"
                                    class="img-fluid"></a></li>
                    <?php endwhile; endif; ?>

            </ul>
        </div>



    </div>
    <div class="footer-bottomm">
        <p>
            <?php the_field('copyright_text', 'option'); ?>
        </p>
        <div class="f-bottom-links">
            <?php
            $link = get_field('privacy_policy_link', 'option');
            if ($link):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                    <?php echo esc_html($link_title); ?>
                </a>
            <?php endif; ?>

            <?php
            $link = get_field('teerms_condition_link', 'option');
            if ($link):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                    <?php echo esc_html($link_title); ?>
                </a>
            <?php endif; ?>

        </div>
    </div>
</footer>