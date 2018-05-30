<?php
get_header();
?>



<div id="main_inner">
    <div class="content">
        <div class="grid_9" style="margin-top: 10px;">
            <?php
            while (have_posts()) {
                the_post();
                ?>

                <?php
                the_title('<div class="welcome">', '</div>');

                the_content();
            }
            ?>

        </div>
    </div>
    <div class="right_side">
<?php get_sidebar('right'); ?>

    </div>
</div>


<?php
get_footer();
