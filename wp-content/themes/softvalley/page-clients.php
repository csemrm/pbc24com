<?php
get_header();
?>



<div id="main_inner">
    <div class="content">
        <div class="grid_9" style="margin-top: 10px;">
            <div class="welcome"> <?php single_post_title() ?> </div>

            <?php
            $teamMembers = new WP_Query(array(
                'post_type' => 'client',
                'posts_per_page' => -1
            ));
            ?>
            <ul>
                <?php
                while ($teamMembers->have_posts()) {
                    $teamMembers->the_post();
                    ?>
                    <li>
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        ?>
                        <?php the_title('<h2>', '</h2>'); ?>

                    <?php the_excerpt(); ?>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="right_side">
<?php get_sidebar('right'); ?>

    </div>
</div>


<?php
get_footer();
