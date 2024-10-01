<?php /*Template Name: ground-transportation */ get_header(); ?>

    <section class="mainn-banner" style="background-image: url(<?php the_field('banner_bg'); ?>);">
        <div class="container">
            <h1>
                <?php the_field('banner_heading'); ?>
            </h1>
        </div>
    </section>
    <section class="ground-tranportation">
        <div class="container">
            <div class="inner-ground-transportation">
                <div class="ground-transportation-contnt">
                    <h2>
                        <?php the_field('ground-tranportation_heading'); ?>
                    </h2>
                    <h4>
                        <?php the_field('ground-tranportation_sub_heading'); ?>
                    </h4>
                    <p>
                        <?php the_field('ground-tranportation_para'); ?>
                    </p>
                </div>
                <div class="ground-transportation-image">
                    <img src="<?php the_field('ground-tranportation_image'); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="why-roadshow">
        <div class="container">
            <div class="inner-roadshow">
                <div class="roadshow-image animation-custom">
                    <img src="<?php the_field('airport_transfers_image'); ?>" alt="" class="img-fluid">
                </div>
                <div class="roadshow-contnt animation-custom">
                    <h2>
                        <?php the_field('airport_transfers_heading'); ?>
                    </h2>
                    <p>
                        <?php the_field('airport_transfers_para'); ?>
                    </p>
                    <h3>
                        <?php the_field('airport_transfers_sub_heading'); ?>
                    </h3>
                    <p>
                        <?php the_field('airport_transfers_para2'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="special-occasion">
        <div class="container">
            <div class="inner-special-occasion">
                <div class="sp-occasion-heading animation-custom">
                    <h2>
                        <?php the_field('special_occasions_heading'); ?>
                    </h2>
                    <p>
                        <?php the_field('special_occasions_para'); ?>
                    </p>
                </div>

                <div class="special-occasion-image animation-custom">
                    <img src="<?php the_field('special_occasions_image'); ?>" alt="" class="img-fluid">

                </div>
            </div>


        </div>
    </section>
    <section class="special-occasion-2">
        <div class="container">
            <div class="inner-special-occasion2">
                <div class="left-special-occasion2">
                    <div class="ag-format-container">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="ag-faq_list">
                            <div class="ag-faq_item">
                                <div class="js-ag-faq_title">
                                    <h4><?php the_field('ag-faq_item_heading1'); ?></h4>
                                </div>

                                <div class="js-ag-faq_text">
                                    <p><?php the_field('ag-faq_item_para1'); ?></p>
                                    <p><?php the_field('ag-faq_item_para11'); ?></p>
                                </div>
                            </div>

                            <div class="ag-faq_item">
                                <div class="js-ag-faq_title">
                                    <h4><?php the_field('ag-faq_item_heading2'); ?></h4>
                                </div>

                                <div class="js-ag-faq_text js-ag-hide">
                                    <p><?php the_field('ag-faq_item_para2'); ?></p>
                                    <p><?php the_field('ag-faq_item_para22'); ?></p>
                                </div>
                            </div>

                            <div class="ag-faq_item">
                                <div class="js-ag-faq_title">
                                    <h4><?php the_field('ag-faq_item_heading3'); ?></h4>
                                </div>

                                <div class="js-ag-faq_text js-ag-hide">
                                    <p><?php the_field('ag-faq_item_para3'); ?></p>
                                    <p><?php the_field('ag-faq_item_para33'); ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="rightt-special-occasion2">
                    <div class="Professional-image1 animation-custom">
                        <img src="<?php the_field('special-occasion-2_image1'); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="Professional-image2 animation-custom">
                        <img src="<?php the_field('special-occasion-2_image2'); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php get_footer(); ?>