<?php
/**
 * PBC24com: Posters Lists
 *
 * Widget show latest or random posters in list view
 *
 * @package Editorial
 * @subpackage  pbc24com
 * @since 1.0.0
 */
add_action('widgets_init', 'pbc24com_register_posters_list_widget');

function pbc24com_register_posters_list_widget() {
    register_widget('Pbc24com_Posters_List');
}

class Pbc24com_Posters_List extends WP_widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'pbc24com_posters_list',
            'description' => __('Display latest or random posters in list view.', 'pbc24com')
        );
        parent::__construct('pbc24com_posters_list', __('PBC24com: Posters Lists', 'pbc24com'), $widget_ops);
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {

        $pbc24com_post_list_option = array(
            'latest' => __('Latest Posts', 'pbc24com'),
            'random' => __('Random Posts', 'pbc24com')
        );

        $fields = array(
            'pbc24com_block_title' => array(
                'pbc24com_widgets_name' => 'pbc24com_block_title',
                'pbc24com_widgets_title' => __('Widget Title', 'pbc24com'),
                'pbc24com_widgets_field_type' => 'text'
            ),
            'pbc24com_block_posters_count' => array(
                'pbc24com_widgets_name' => 'pbc24com_block_posters_count',
                'pbc24com_widgets_title' => __('No. of Posts', 'pbc24com'),
                'pbc24com_widgets_default' => 4,
                'pbc24com_widgets_field_type' => 'number'
            ),
            'pbc24com_block_posters_type' => array(
                'pbc24com_widgets_name' => 'pbc24com_block_posters_type',
                'pbc24com_widgets_title' => __('Posts Type', 'pbc24com'),
                'pbc24com_widgets_default' => 'latest',
                'pbc24com_widgets_field_options' => $pbc24com_post_list_option,
                'pbc24com_widgets_field_type' => 'radio'
            ),
        );
        return $fields;
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        extract($args);
        if (empty($instance)) {
            return;
        }

        $pbc24com_block_title = empty($instance['pbc24com_block_title']) ? '' : $instance['pbc24com_block_title'];
        $pbc24com_block_posters_count = intval(empty($instance['pbc24com_block_posters_count']) ? 4 : $instance['pbc24com_block_posters_count']);
        $pbc24com_block_posters_type = empty($instance['pbc24com_block_posters_type']) ? '' : $instance['pbc24com_block_posters_type'];
        echo $before_widget;
        ?>
        <div class="widget-block-wrapper">
            <div class="block-header article_head">
                <h3 class="block-title"><?php echo esc_html($pbc24com_block_title); ?></h3>
            </div><!-- .block-header -->
            <div class="posters-list-wrapper">
                <?php
                $posters_list_args = array(
                    'post_type' => 'poster',
                    'posts_per_page' => 0
                );
                if ($pbc24com_block_posters_type == 'random') {
                    $posters_list_args['orderby'] = 'rand';
                }
                $posters_list_query = new WP_Query($posters_list_args);
                if ($posters_list_query->have_posts()) {
                    while ($posters_list_query->have_posts()) {
                        $posters_list_query->the_post();
                        ?>
                        <div class="single-post-wrapper clearfix">
                            <div class="post-thumb-wrapper">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <figure><?php the_post_thumbnail('poster-thumbnail'); ?></figure>
                                </a>
                            </div>
                        </div><!-- .single-post-wrapper -->
                        <?php
                    }
                }
                ?>
            </div><!-- .posters-list-wrapper -->
        </div><!-- .widget-block-wrapper -->
        <?php
        echo $after_widget;
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param   array   $new_instance   Values just sent to be saved.
     * @param   array   $old_instance   Previously saved values from database.
     *
     * @uses    pbc24com_widgets_updated_field_value()     defined in pbc24com-widget-fields.php
     *
     * @return  array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ($widget_fields as $widget_field) {

            extract($widget_field);
            $pbc24com_widgets_field_value = '';
            $new_field_value = $new_instance[$pbc24com_widgets_name];
            if ($pbc24com_widgets_field_type == 'number') {
                $pbc24com_widgets_field_value = editorial_sanitize_number($new_field_value);
            } elseif ($pbc24com_widgets_field_type == 'url') {
                $pbc24com_widgets_field_value = esc_url($new_field_value);
            } else {
                $pbc24com_widgets_field_value = editorial_sanitize_text($new_field_value);
            }
            echo $pbc24com_widgets_field_value;
            // Use helper function to get updated field values
            $instance[$pbc24com_widgets_name] = $pbc24com_widgets_field_value; //pbc24com_widgets_updated_field_value($widget_field, $new_instance[$pbc24com_widgets_name]);
        }
        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param   array $instance Previously saved values from database.
     *
     * @uses    editorial_widgets_show_widget_field()       defined in widget-fields.php
     */
    public function form($instance) {
        $widget_fields = $this->widget_fields();

        $pbc24com_block_title = empty($instance['pbc24com_block_title']) ? '' : $instance['pbc24com_block_title'];
        $pbc24com_block_posters_count = intval(empty($instance['pbc24com_block_posters_count']) ? 4 : $instance['pbc24com_block_posters_count']);
        $pbc24com_block_posters_type = empty($instance['pbc24com_block_posters_type']) ? '' : $instance['pbc24com_block_posters_type'];
        $widget_field = $widget_fields['pbc24com_block_title'];
        extract($widget_field);
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id($pbc24com_widgets_name)); ?>"><?php echo esc_html($pbc24com_widgets_title); ?>:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id($pbc24com_widgets_name)); ?>" name="<?php echo esc_attr($this->get_field_name($pbc24com_widgets_name)); ?>" type="text" value="<?php echo esc_html($pbc24com_block_title); ?>" />

        </p>
        <?php
        $widget_field = $widget_fields['pbc24com_block_posters_count'];
        extract($widget_field);
        ?>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id($pbc24com_widgets_name)); ?>"><?php echo esc_html($pbc24com_widgets_title); ?>:</label><br />
            <input name="<?php echo esc_attr($this->get_field_id($pbc24com_widgets_name)); ?>" type="number" step="1" min="1" id="<?php echo esc_attr($this->get_field_name($pbc24com_widgets_name)); ?>" value="<?php echo esc_html($pbc24com_block_posters_count); ?>" />
        </p>

        <?php
        $widget_field = $widget_fields['pbc24com_block_posters_type'];
        extract($widget_field);
        ?>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id($pbc24com_widgets_name)); ?>"><?php echo esc_html($pbc24com_widgets_title); ?>:</label>
        <div class="radio-wrapper">
            <?php
            foreach ($pbc24com_widgets_field_options as $athm_option_name => $athm_option_title) {
                ?>
                <input id="<?php echo esc_attr($this->get_field_id($athm_option_name)); ?>" name="<?php echo esc_attr($this->get_field_name($pbc24com_widgets_name)); ?>" type="radio" value="<?php echo esc_html($athm_option_name); ?>" <?php checked($athm_option_name, $pbc24com_block_posters_type); ?> />
                <label for="<?php echo esc_attr($this->get_field_id($athm_option_name)); ?>"><?php echo esc_html($athm_option_title); ?>:</label>
            <?php } ?>
        </div>
        </p>

        <?php
    }

}
