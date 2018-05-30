<?php
if (!is_active_sidebar('sidebar-banner')) {
    return;
}

dynamic_sidebar('sidebar-banner');
?>
<div class="slider"> <!--slider-->                  
    <div ><img alt="" height="364" src="<?php echo get_theme_file_uri('images/banner_1.jpg'); ?>" width="940"></div>

                    <!--div ><img alt="" height="364" src="<?php echo get_theme_file_uri('images/banner/3.jpg'); ?>" width="940"></div>

                    <div ><img alt="" height="364" src="<?php echo get_theme_file_uri('images/banner/4.jpg'); ?>" width="940"></div>

                    <div ><img alt="" height="364" src="<?php echo get_theme_file_uri('images/banner/5.jpg'); ?>" width="940"></div>

                    <div ><img alt="" height="364" src="<?php echo get_theme_file_uri('images/banner/7.jpg'); ?>" width="940"></div-->   
</div>