<?php
if (!is_active_sidebar('sidebar-right')) {
    return;
}
?>

<div class="product_title">Our Services</div>
<div class="product_box">
    <?php
    $defaults = array(
        'container' => 'div',
        'container_class' => 'menu-service-menu-container',
        'menu_class' => 'menu',
        'menu_id' => '',
        'theme_location' => 'serviceMenu'
    );
    wp_nav_menu($defaults);
    ?>
</div>


<?php
dynamic_sidebar('sidebar-right');
?> 
