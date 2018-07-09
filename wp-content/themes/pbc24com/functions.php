<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function pbc24com_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('poster-thumbnail', 274, 285, false);
}

add_action('after_setup_theme', 'pbc24com_theme_setup');

function pbc24com_enqueue_styles() {
    wp_enqueue_style('parent_style', get_template_directory_uri() . '/style.css', null, time());
    wp_enqueue_style('main_style', get_stylesheet_directory_uri() . '/style.css', null, time());
    wp_enqueue_style('design_style', get_stylesheet_directory_uri() . '/css/css.css', null, time());
}

add_action('wp_enqueue_scripts', 'pbc24com_enqueue_styles');

function pbc24com_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('HomePage Video Area', 'pbc24com'),
        'id' => 'pbc24com_home_video_gallery_area',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('HomePage Latest Area', 'pbc24com'),
        'id' => 'pbc24com_home_latest_area',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('HomePage Addvertisment 1', 'pbc24com'),
        'id' => 'pbc24com_home_addvertisment_area',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('HomePage News Gallery Area', 'pbc24com'),
        'id' => 'pbc24com_home_gallery_news_area',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('HomePage Left Slider Area', 'pbc24com'),
        'id' => 'pbc24com_home_left_slider_area',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('HomePage Events Right Sidebar', 'pbc24com'),
        'id' => 'pbc24com_news_events_right_sidebar',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('HomePage Addvertisment 2 Area', 'pbc24com'),
        'id' => 'pbc24com_home_addvertisment_2_area',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('HomePage Image Video Area', 'pbc24com'),
        'id' => 'pbc24com_home_image_video_area',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('HomePage Image Right Sidebar', 'pbc24com'),
        'id' => 'pbc24com_home_image_right_sidebar',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('HomePage News Gallery Area', 'pbc24com'),
        'id' => 'pbc24com_home_news_gallery_area',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Page Bottom One', 'pbc24com'),
        'id' => 'pbc24com_bottom_one',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Page Bottom Two', 'pbc24com'),
        'id' => 'pbc24com_bottom_two',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Page Bottom Three', 'pbc24com'),
        'id' => 'pbc24com_bottom_three',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Page Bottom Four', 'pbc24com'),
        'id' => 'pbc24com_bottom_four',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init', 'pbc24com_widgets_init');

function pbc24com_wp_nav_menu_items($args) {
    
}

add_action('wp_nav_menu_items', 'pbc24com_wp_nav_menu_items');

/*------------------------------------------------------------------------------------------------*/
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function twentyeleven_custom_excerpt_more( $output ) {
   
  if ( has_excerpt() && ! is_attachment() ) {
    $output .= '().';
  }
  return $output;
}
add_filter( 'get_the_excerpt', 'twentyeleven_custom_excerpt_more' );        
/* ------------------------------------------------------------------------------------------------ */
/**
 * News Ticker
 */
add_action('pbc24com_news_ticker', 'pbc24com_news_ticker_hook');
if (!function_exists('pbc24com_news_ticker_hook')):

    function pbc24com_news_ticker_hook() {
        $editorial_ticker_option = get_theme_mod('editorial_ticker_option', 'enable');
        if ($editorial_ticker_option != 'disable') {
            $editorial_ticker_caption = get_theme_mod('editorial_ticker_caption', __('Latest', 'editorial'));
            ?>
            <div class="editorial-ticker-wrapper clearfix">
                <span class="ticker-caption"><?php echo esc_html($editorial_ticker_caption); ?></span>
                <div class="ticker-content-wrapper">
                    <?php
                    $ticker_args = editorial_query_args($cat_id = null, 5);
                    $ticker_query = new WP_Query($ticker_args);
                    if ($ticker_query->have_posts()) {
                        echo '<ul id="mt-newsTicker" class="cS-hidden">';
                        while ($ticker_query->have_posts()) {
                            $ticker_query->the_post();
                            ?>			
                            <li><div class="news-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></li>
                                    <?php
                                }
                                echo '</ul>';
                            }
                            ?>
                    <!-- .ticker-content-wrapper -->
                </div><!-- .mt-container -->
            </div><!-- .editorial-ticker-wrapper-->
            <?php
        }
    }

endif;

/**
 * Custom template tags for this theme.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';

require get_stylesheet_directory() . '/inc/widgets/pbc24com-posts-list.php';
require get_stylesheet_directory() . '/inc/widgets/pbc24com-posters-list.php';

require get_stylesheet_directory() . '/inc/widgets/pbc24com-families-list.php';
