<?php
add_action('widgets_init', 'register_widget_information');

function register_widget_information() {
    register_widget('Gtid_Information_Widget');
}

class Gtid_Information_Widget extends WP_Widget {

    function __construct() {

        parent::__construct(
            'information',
            __( 'VN Ecofloor - Information contact', 'shtheme' ),
            array( 
                'description'  => __( 'Display information contact', 'shtheme' ),
            )
        );
        
    }

    function widget($args, $instance) {
        extract($args);
        echo $before_widget;

        if ($instance['title']) echo $before_title . apply_filters('widget_title', $instance['title']) . $after_title;
        ?>
        <ul>
            <?php
            $hide_label = ! empty( $instance['hide_label'] ) ? 'd-none' : '';
            $hide_icon  = ! empty( $instance['hide_icon'] ) ? 'd-none' : '';

            if( $instance['head_office'] ) {
                echo '<li><i class="'. $hide_icon .'fa fa-building" aria-hidden="true"></i><span class="'. $hide_label .'">'. __( 'Head Office', 'shtheme' ) .':</span> '. $instance['head_office'] .'</li>';
            }
            if( $instance['factory_no1'] ) {
                echo '<li><i class="'. $hide_icon .'fa fa-industry" aria-hidden="true"></i><span class="'. $hide_label .'">'. __( 'Factory No. 1', 'shtheme' ) .':</span> '. $instance['factory_no1'] .'</li>';
            }
            if( $instance['factory_no2'] ) {
                echo '<li><i class="'. $hide_icon .'fa fa-industry" aria-hidden="true"></i><span class="'. $hide_label .'">'. __( 'Factory No. 2', 'shtheme' ) .':</span> '. $instance['factory_no2'] .'</li>';
            }
            if( $instance['representative_office'] ) {
                echo '<li><i class="'. $hide_icon .'fa fa-building" aria-hidden="true"></i><span class="'. $hide_label .'">'. __( 'Representative Office', 'shtheme' ) .':</span> '. $instance['representative_office'] .'</li>';
            }
            if( $instance['website'] ) {
                echo '<li><i class="'. $hide_icon .'fas fa-globe" aria-hidden="true"></i><span class="'. $hide_label .'">'. __( 'Website', 'shtheme' ) .':</span> '. $instance['website'] .'</li>';
            }
            if( $instance['email'] ) {
                echo '<li><i class="'. $hide_icon .'far fa-envelope" aria-hidden="true"></i><span class="'. $hide_label .'">'. __( 'Email', 'shtheme' ) .':</span> '. $instance['email'] .'</li>';
            }
            if( $instance['hotline'] ) {
                echo '<li><i class="'. $hide_icon .'fa fa-phone" aria-hidden="true"></i><span class="'. $hide_label .'">'. __( 'Hotline/WhatsApp/WeChat', 'shtheme' ) .':</span> '. $instance['hotline'] .'</li>';
            }
            ?>
        </ul>
 
        <?php
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        return $new_instance;
    }

    function form($instance) {
        $instance = wp_parse_args( 
        	(array)$instance, array(
        		'title' 	 => '',
        		'head_office'    => '',
        		'factory_no1' 	     => '',
                'factory_no2'    => '',
                'representative_office'        => '',
                'email'      => '',
                'website'    => '',
                'hide_label' => '',
                'hide_icon'  => '',
    		) 
    	);
        ?>
        <p>
            <label for="<?php  echo $this->get_field_id('title'); ?>"><?php _e('Title', 'shtheme'); ?>:</label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php  echo $this->get_field_name('title'); ?>" value="<?php  echo esc_attr( $instance['title'] ); ?>" />
        </p>
        <p>
            <label for="<?php  echo $this->get_field_id('head_office'); ?>"><?php _e('Head Office', 'shtheme'); ?>:</label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('head_office'); ?>" name="<?php  echo $this->get_field_name('head_office'); ?>" value="<?php  echo esc_attr( $instance['head_office'] ); ?>" />
        </p>
        <p>
            <label for="<?php  echo $this->get_field_id('factory_no1'); ?>"><?php _e('Factory No. 1', 'shtheme'); ?>:</label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('factory_no1'); ?>" name="<?php  echo $this->get_field_name('factory_no1'); ?>" value="<?php  echo esc_attr( $instance['factory_no1'] ); ?>" />
        </p>
        <p>
            <label for="<?php  echo $this->get_field_id('factory_no2'); ?>"><?php _e('Factory No. 2', 'shtheme'); ?>:</label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('factory_no2'); ?>" name="<?php  echo $this->get_field_name('factory_no2'); ?>" value="<?php  echo esc_attr( $instance['factory_no2'] ); ?>" />
        </p>
        <p>
            <label for="<?php  echo $this->get_field_id('representative_office'); ?>"><?php _e('Representative Office', 'shtheme'); ?>:</label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('representative_office'); ?>" name="<?php  echo $this->get_field_name('representative_office'); ?>" value="<?php  echo esc_attr( $instance['representative_office'] ); ?>" />
        </p>
        <p>
            <label for="<?php  echo $this->get_field_id('website'); ?>"><?php _e('Website', 'shtheme'); ?>:</label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('website'); ?>" name="<?php  echo $this->get_field_name('website'); ?>" value="<?php  echo esc_attr( $instance['website'] ); ?>" />
        </p>
        <p>
            <label for="<?php  echo $this->get_field_id('email'); ?>"><?php _e('Email', 'shtheme'); ?>:</label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php  echo $this->get_field_name('email'); ?>" value="<?php  echo esc_attr( $instance['email'] ); ?>" />
        </p>
        <p>
            <label for="<?php  echo $this->get_field_id('hotline'); ?>"><?php _e('Hotline/WhatsApp/WeChat', 'shtheme'); ?>:</label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('hotline'); ?>" name="<?php  echo $this->get_field_name('hotline'); ?>" value="<?php  echo esc_attr( $instance['hotline'] ); ?>" />
        </p>
        <p>
            <input id="<?php echo esc_attr( $this->get_field_id( 'hide_label' ) ); ?>" type="checkbox" name="<?php echo esc_attr( $this->get_field_name( 'hide_label' ) ); ?>" value="1" <?php checked( $instance['hide_label'] ); ?>/>
            <label for="<?php echo esc_attr( $this->get_field_id( 'hide_label' ) ); ?>"><?php _e( 'Hide label', 'shtheme' ); ?></label>
        </p>
        <p>
            <input id="<?php echo esc_attr( $this->get_field_id( 'hide_icon' ) ); ?>" type="checkbox" name="<?php echo esc_attr( $this->get_field_name( 'hide_icon' ) ); ?>" value="1" <?php checked( $instance['hide_icon'] ); ?>/>
            <label for="<?php echo esc_attr( $this->get_field_id( 'hide_icon' ) ); ?>"><?php _e( 'Hide icon', 'shtheme' ); ?></label>
        </p>
    <?php
    }
}
