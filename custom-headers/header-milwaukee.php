
    <div class="overlay-element"></div>
    <header id="header">
        <div class="top-header">
            <div class="header-contact-links">
                <div class="header-grp">
                    <a href="<?php the_field('header_call_link', 'option'); ?>"> <img
                            src="<?php the_field('header_call_icon', 'option'); ?>" alt="" class="img-fluid">
                        <?php the_field('header_call_text', 'option'); ?>
                    </a>
                </div>
                <div class="header-grp">
                    <a href="<?php the_field('header_mail_link', 'option'); ?>"> <img
                            src="<?php the_field('header_mail_icon', 'option'); ?>" alt="" class="img-fluid">
                        <?php the_field('header_mail_text', 'option'); ?>
                    </a>
                </div>
            </div>

        </div>
        <div class="inner-header">
            <div class="logo">
                <div class="default-logo custom_url">
                    <a href="/Aj-prestige">
                        <img src="<?php
                            $white_logo = get_field('header_logo', 'option');
                            echo $white_logo;
                        ?>" alt="AJ PRESTIGE">
                    </a>
                    <?php if ( function_exists( 'the_custom_logo' ) ) {
                            //the_custom_logo();
                        } ?>
                </div>
                <div class="after-logo custom_url">


                <a href="/Aj-prestige">
                    <img src="<?php
                        $hover_logo = get_field('header_change_logo', 'option');
                        echo $hover_logo;
                    ?>" alt="AJ PRESTIGE">
                </a>
                </div>

            </div>
            <div class="navbar menusflex menuflex">
                <span></span>
             <?php
wp_nav_menu(
    array(
        'theme_location' => 'header-menu',
        'container'      => false,
        'menu_class'     => 'nav-menu',
        'menu_id'        => 'menu-header-menu'
    )
);
?>


   <div class="social-iconsss mobile-menu-sss-icon">
            <ul>
                <?php if (have_rows('footer_social_icon_repeater', 'option')):
                    while (have_rows('footer_social_icon_repeater', 'option')):
                        the_row(); ?>
                        <li><a href="<?php the_sub_field('footer_social_icon_link', 'option'); ?>"><img src="<?php the_sub_field('footer_social_icon', 'option'); ?>" alt="social-icon"
                                    class="img-fluid"></a></li>
                    <?php endwhile; endif; ?>

            </ul>
        </div>
            </div>
            <div class="all-btn">

                <?php
                $link = get_field('header_btn', 'option');
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                        <?php echo esc_html($link_title); ?>
                    </a>
                <?php endif; ?>
            </div>

            <div class="three col">
                <div class="hamburger" id="hamburger-6">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
    </header>