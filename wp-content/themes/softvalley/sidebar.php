<?php
if (!is_active_sidebar('sidebar-page')) {
    return;
}

dynamic_sidebar('sidebar-page');
?>