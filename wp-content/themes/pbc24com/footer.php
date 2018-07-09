<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mystery Themes
 * @subpackage Editorial
 * @since 1.0.0
 */
?>
</div><!--.mt-container-->
</div><!-- #content -->
<div id="pbc24com-footer" class="footer-widgets-wrapper clearfix  column4">
    <div class="mt-container">
        <div class="footer-widgets-area clearfix">
            <div class="mt-footer-widget-wrapper clearfix">
                <div class="mt-first-footer-widget mt-footer-widget">
                    <?php
                    if (!dynamic_sidebar('pbc24com_bottom_one')):
                    endif;
                    ?>
                </div>
                <div class="mt-second-footer-widget mt-footer-widget">
                    <?php
                    if (!dynamic_sidebar('pbc24com_bottom_two')):
                    endif;
                    ?>
                </div>
                <div class="mt-third-footer-widget mt-footer-widget">
                    <?php
                    if (!dynamic_sidebar('pbc24com_bottom_three')):
                    endif;
                    ?>
                </div>
                <div class="mt-fourth-footer-widget mt-footer-widget">
                    <?php
                    if (!dynamic_sidebar('pbc24com_bottom_four')):
                    endif;
                    ?>
                </div>
            </div><!-- .mt-footer-widget-wrapper -->
        </div><!-- .footer-widgets-area -->
    </div><!-- .nt-container -->
</div><!-- #top-footer -->
<footer id="colophon" class="site-footer " role="contentinfo">

    <?php get_sidebar('footer'); ?>
    <div id="bottom-footer" class="sub-footer-wrapper clearfix">
        <div class="mt-container">
            <div class="site-info">
                <span class="copy-info"><?php echo esc_html(get_theme_mod('editorial_copyright_text', __('2017 editorial', 'editorial'))); ?></span>

            </div><!-- .site-info -->
            <nav id="footer-navigation" class="sub-footer-navigation" role="navigation">
                <?php wp_nav_menu(array('theme_location' => 'footer', 'container_class' => 'footer-menu', 'fallback_cb' => false, 'items_wrap' => '<ul>%3$s</ul>')); ?>
            </nav>
        </div>
    </div><!-- .sub-footer-wrapper -->
</footer><!-- #colophon -->
<div id="mt-scrollup" class="animated arrow-hide"><i class="fa fa-chevron-up"></i></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
