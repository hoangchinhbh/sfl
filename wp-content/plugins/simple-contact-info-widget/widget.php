<?php

/*
Plugin Name: Contact Info Widget
Plugin URI: https://riotweb.nl
Description: A  simple Wordpress widget that shows contact info.
Author: Riotweb.nl
Version: 2.4
Author URI: https://riotweb.nl/plugins
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( !defined('ABSPATH') )
  die('-1');

include('settings.php');
//enqueues our external font awesome stylesheet
function enqueue_widget_stylesheet(){
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_widget_stylesheet');


//Contact info Widget
 
class contact_widget extends WP_Widget {
 
   /** constructor */
   function __construct() {
    parent::__construct(
      'contact_widget', 
      __('Contact Info', 'text_domain'),
      array( 'description' => __( 'Display your contact info!', 'text_domain' ), )
    );
  }
 
    /** @see WP_Widget::widget */
    function widget($args, $instance) { 
        extract( $args );
        $title    = apply_filters('widget_title', $instance['title']);
        $company  = $instance['company'];
        $about  = $instance['about'];
        $address  = $instance['address'];
        $city  = $instance['city'];
        $zip  = $instance['zip'];
        $email  = $instance['email'];
        $phone1   = $instance['phone1'];
	$phone2   = $instance['phone2'];
        $mobile   = $instance['mobile'];
        $fax   = $instance['fax'];
        $website   = $instance['website'];
        $color = $instance['color'];
        
        echo $before_widget; 
          if ( $title )
            echo $before_title . $title . $after_title; ?>
<h2> Thông Tin Liên Hệ </h2>
<hr>  
  <ul class="fa-ul">

<?php

if (!empty($company))
      echo '<li><i class="fa-li fa fa-building" aria-hidden="true" style="color: '. $color .'"></i>'. $company .'</li>';
if (!empty($about))
      echo '<li><i class="fa-li fa fa-info" aria-hidden="true" style="color: '. $color .'"></i>'. $about .'</li>';
if (!empty($address))
      echo '<li><i class="fa-li fa fa-map-marker" aria-hidden="true" style="color: '. $color .'"></i>'. $address .'<br>'. $city .' '. $zip .'</li>';
if (!empty($email))
      echo '<li><i class="fa-li fa fa-at" aria-hidden="true" style="color: '. $color .'"></i><a href=mailto:'. $email .' style="text-decoration:none;" >'. $email .'</a></li>';    
if (!empty($phone1))
      echo '<li><i class="fa-li fa fa-phone" aria-hidden="true" style="color: '. $color .'"></i>'. $phone1 .'</li>';
if (!empty($phone2))
      echo '<li><i class="fa-li fa fa-phone" aria-hidden="true" style="color: '. $color .'"></i>'. $phone1 .'</li>';
if (!empty($mobile))
      echo '<li><i class="fa-li fa fa-mobile" aria-hidden="true" style="color: '. $color .'"></i>'. $mobile .'</li>';
if (!empty($fax))
      echo '<li><i class="fa-li fa fa-fax" aria-hidden="true" style="color: '. $color .'"></i>'. $fax .'</li>';
if (!empty($website))
      echo '<li><i class="fa-li fa fa-globe" aria-hidden="true" style="color: '. $color .'"></i><a href=http://'. $website .' style="text-decoration:none;">'. $website .'</a></li>';
?>

  </ul>
  
              <?php echo $after_widget; ?>
        <?php
    }
 
    /** @see WP_Widget::update  */
    function update($new_instance, $old_instance) {   
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['company'] = strip_tags($new_instance['company']);
    $instance['about'] = strip_tags($new_instance['about']);
    $instance['address'] = strip_tags($new_instance['address']);
    $instance['city'] = strip_tags($new_instance['city']);
    $instance['zip'] = strip_tags($new_instance['zip']);
    $instance['email'] = strip_tags($new_instance['email']);
    $instance['phone1'] = strip_tags($new_instance['phone1']);
    $instance['phone2'] = strip_tags($new_instance['phone2']);
    $instance['mobile'] = strip_tags($new_instance['mobile']);
    $instance['fax'] = strip_tags($new_instance['fax']);
    $instance['website'] = strip_tags($new_instance['website']);
    $instance['color'] = strip_tags($new_instance['color']);
        return $instance;
    }
 
    /** @see WP_Widget::form */
    function form($instance) {  
 
        $title    = esc_attr($instance['title']);
        $company  = esc_attr($instance['company']);
        $about  = esc_attr($instance['about']);
        $address  = esc_attr($instance['address']);
        $city  = esc_attr($instance['city']);
        $zip  = esc_attr($instance['zip']);
        $email  = esc_attr($instance['email']);
        $phone1 = esc_attr($instance['phone1']);
	$phone2 = esc_attr($instance['phone2']);
        $mobile = esc_attr($instance['mobile']);
        $fax = esc_attr($instance['fax']);
        $website = esc_attr($instance['website']);
        $color = esc_attr($instance['color']);  


        ?>

        <script type="text/javascript">
      //<![CDATA[
        jQuery(document).ready(function()
        {
          // colorpicker field
          jQuery('.cw-color-picker').each(function(){
            var $this = jQuery(this),
              id = $this.attr('rel');
 
            $this.farbtastic('#' + id);
          });
 
        });
      //]]>   
      </script>   
         <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('company'); ?>"><?php _e('Company:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('company'); ?>" name="<?php echo $this->get_field_name('company'); ?>" type="text" value="<?php echo $company; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('about'); ?>"><?php _e('About:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('about'); ?>" name="<?php echo $this->get_field_name('about'); ?>" type="text" value="<?php echo $about; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo $address; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('city'); ?>"><?php _e('City:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="text" value="<?php echo $city; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('zip'); ?>"><?php _e('Zip Code:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('zip'); ?>" name="<?php echo $this->get_field_name('zip'); ?>" type="text" value="<?php echo $zip; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="email" value="<?php echo $email; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('phone1'); ?>"><?php _e('Phone:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('phone1'); ?>" name="<?php echo $this->get_field_name('phone1'); ?>" type="tel" value="<?php echo $phone1; ?>" />
        </p>
	<p>
          <label for="<?php echo $this->get_field_id('phone2'); ?>"><?php _e('Phone:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('phone2'); ?>" name="<?php echo $this->get_field_name('phone2'); ?>" type="tel" value="<?php echo $phone2; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('mobile'); ?>"><?php _e('Mobile:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('mobile'); ?>" name="<?php echo $this->get_field_name('mobile'); ?>" type="tel" value="<?php echo $mobile; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('fax'); ?>"><?php _e('Fax:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('fax'); ?>" name="<?php echo $this->get_field_name('fax'); ?>" type="tel" value="<?php echo $fax; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('website'); ?>"><?php _e('Website:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('website'); ?>" name="<?php echo $this->get_field_name('website'); ?>" type="url" value="<?php echo $website; ?>" />
          <em>www.example.com</em>
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('color'); ?>"><?php _e('Icon color:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('color'); ?>" name="<?php echo $this->get_field_name('color'); ?>" type="text" value="<?php if($color) { echo $color; } else { echo '#fff'; } ?>" />
        <div class="cw-color-picker" rel="<?php echo $this->get_field_id('color'); ?>"></div>
        </p>
        <?php 
    }
 
 
} // end class
add_action('widgets_init', create_function('', 'return register_widget("contact_widget");'));

function sample_load_color_picker_script() {
  wp_enqueue_script('farbtastic');
}
function sample_load_color_picker_style() {
  wp_enqueue_style('farbtastic'); 
}
add_action('admin_print_scripts-widgets.php', 'sample_load_color_picker_script');
add_action('admin_print_styles-widgets.php', 'sample_load_color_picker_style');

