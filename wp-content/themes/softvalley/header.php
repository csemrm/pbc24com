<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <?php wp_head(); ?>
    </head>


    <body class="<?php body_class(); ?>">
        <div style="background-color: #1767b8; width: 100%; height: 2px;"></div>

        <div class="container_12 maincontainer">
            <div>
                <div class="grid_3">
                    <?php softvalley_the_custom_logo(); ?></div>
                <div class="grid_6">&nbsp;</div>

                <div class="grid_3" style="text-align: right; color: rgb(25, 96, 177); font-size: 15px; padding-top: 25px;"> <div>
                        <div>
                            <div>&nbsp;info@SoftValleySolutions.com</div>
                        </div>
                    </div></div> 

            </div>


            <div class="grid_12">
                <?php
                //
                $defaults = array(
                    'container' => 'div',
                    'container_class' => 'menurow',
                    'menu_class' => 'menu',
                    'menu_id' => 'trans-nav',
                    'theme_location' => 'mainMenu'
                );
                wp_nav_menu($defaults);
                ?>
            </div>
            <div class="grid_12">
                <?php get_sidebar('banner'); ?>
                
            </div> 