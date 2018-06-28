<?php
/**
 * Template Name: Magazine Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mystery Themes
 * @subpackage PBC24 COM
 * @since 1.0.0
 */
get_header();
?>

<div class="featured-slider-section clearfix">

    <?php
    if (is_active_sidebar('editorial_home_slider_area')) {
        if (!dynamic_sidebar('editorial_home_slider_area')):
        endif;
    }
    ?>

</div><!-- .featured-slider-section -->
<div class="home-content-wrapper clearfix">


    <div class="home-primary-wrapper">
        <?php
        if (is_active_sidebar('editorial_home_content_area')) {
            if (!dynamic_sidebar('editorial_home_content_area')):
            endif;
        }
        ?>

    </div><!-- .home-primary-wrapper -->
    <div class="home-secondary-wrapper">
        <?php
        if (is_active_sidebar('editorial_home_sidebar')) {
            if (!dynamic_sidebar('editorial_home_sidebar')):
            endif;
        }
        ?>
    </div><!-- .home-secondary-wrapper -->

</div>

<!-- .video_gallery_wrap-wrapper -->

<div class="featured-slider-section clearfix">

    <?php
    if (is_active_sidebar('pbc24com_home_video_gallery_area')) {
        if (!dynamic_sidebar('pbc24com_home_video_gallery_area')):
        endif;
    }
    ?>

</div><!-- .video_gallery_wrap -->
<!-- .latest_photo_gallery_wrap-wrapper -->

<div class="featured-slider-section clearfix">

    <?php
    if (is_active_sidebar('pbc24com_home_latest_area')) {
        if (!dynamic_sidebar('pbc24com_home_latest_area')):
        endif;
    }
    ?>

</div><!-- .latest_photo_gallery_wrap -->

<!-- .latest_photo_gallery_wrap-wrapper -->

<div class="featured-slider-section clearfix">

    <?php
    if (is_active_sidebar('pbc24com_home_addvertisment_area')) {
        if (!dynamic_sidebar('pbc24com_home_addvertisment_area')):
        endif;
    }
    ?>

</div><!-- .latest_photo_gallery_wrap -->

<!-- .gallery_wrap_news-wrapper -->

<div class="featured-slider-section clearfix">

    <?php
    if (is_active_sidebar('pbc24com_home_gallery_news_area')) {
        if (!dynamic_sidebar('pbc24com_home_gallery_news_area')):
        endif;
    }
    ?>

</div><!-- .<!--left_slider_sidebar_news_events_start-->

<div class="home-content-wrapper clearfix">


    <div class="home-primary-wrapper">
        <?php
        if (is_active_sidebar('pbc24com_home_left_slider_area')) {
            if (!dynamic_sidebar('pbc24com_home_left_slider_area')):
            endif;
        }
        ?>

    </div><!-- .home-primary-wrapper -->
    <div class="home-secondary-wrapper">
        <?php
        if (is_active_sidebar('pbc24com_news_events_right_sidebar')) {
            if (!dynamic_sidebar('pbc24com_news_events_right_sidebar')):
            endif;
        }
        ?>
    </div><!-- .home-secondary-wrapper -->

</div>

<div class="featured-slider-section clearfix">

    <?php
    if (is_active_sidebar('pbc24com_home_addvertisment_2_area')) {
        if (!dynamic_sidebar('pbc24com_home_addvertisment_2_area')):
        endif;
    }
    ?>

</div>

<div class="home-content-wrapper clearfix">


    <div class="home-primary-wrapper">
        <?php
        if (is_active_sidebar('pbc24com_home_image_video_area')) {
            if (!dynamic_sidebar('pbc24com_home_image_video_area')):
            endif;
        }
        ?>

    </div><!-- .home-primary-wrapper -->
    <div class="home-secondary-wrapper">
        <?php
        if (is_active_sidebar('pbc24com_home_image_right_sidebar')) {
            if (!dynamic_sidebar('pbc24com_home_image_right_sidebar')):
            endif;
        }
        ?>
    </div><!-- .home-secondary-wrapper -->

</div>
<div class="featured-slider-section clearfix">

    <?php
    if (is_active_sidebar('pbc24com_home_news_gallery_area')) {
        if (!dynamic_sidebar('pbc24com_home_news_gallery_area')):
        endif;
    }
    ?>

</div>



<?php
get_footer();
