<?php

namespace MyPlugin\Widgets;

class WidgetFooterAddress extends AbstractWidget
{
    function __construct() {
        // Instantiate the parent object
        parent::__construct( false, 'Awesome Footer Contacts' );
    }

    function widget( $args, $instance ) {
        include $this->locateTemplate('widgetFooter/WidgetFooterAddress.tpl.php');
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['address'] = wp_kses_post($new_instance['address']);
        $instance['address1'] = wp_kses_post($new_instance['address1']);
        return $instance;
    }

    function form( $instance ) {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        $address = !empty($instance['address']) ? $instance['address'] : '';
        $address1 = !empty($instance['address1']) ? $instance['address1'] : '';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>"/>
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address:', 'bookawesome'); ?></label>
        <?php
            $address_value = esc_attr($address);
            $editor_id = $this->get_field_id('address');
            $editor_name = $this->get_field_name('address');
            $settings = array(
                'textarea_name' => $editor_name,
                'textarea_rows' => 10,
            );
            wp_editor($address_value, $editor_id, $settings);
            ?>
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('address1'); ?>"><?php _e('Address 1:', 'bookawesome'); ?></label>
            <?php
            $address1_value = esc_attr($address1);
            $editor1_id = $this->get_field_id('address1');
            $editor1_name = $this->get_field_name('address1');
            $settings1 = array(
                'textarea_name' => $editor1_name,
                'textarea_rows' => 5,
            );
            wp_editor($address1_value, $editor1_id, $settings1);
            ?>
        </p>
        <?php
    }
}
