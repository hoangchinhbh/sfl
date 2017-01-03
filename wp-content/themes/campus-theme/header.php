<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	
	<title><?php
		wp_title( '|', true, 'right' );	 
		bloginfo( 'name' );	
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";	
		?></title>	
	

	
	<!-- Mobile Specific Metas
  	================================================== -->	
	<?php if (ot_get_option('responsive_toggle') == 'No') { ?>	  		
		<meta name="viewport" content="width=1300, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />		
	<?php } else { ?>		 
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	
	<?php } ?>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=vietnamese" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php echo ot_get_option('favicon'); ?>" type="image/gif" />
	<!-- Child Theme Support -->	
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/style.css" />

	<?php if ( ! isset( $content_width ) ) 
	    $content_width = 960;
	?>
	
<?php wp_head(); ?></head>

<!-- Start the Markup ================================================== -->
<body <?php body_class(); ?> >

	<!-- Super Container Flag Dropdown -->
	<?php if (get_option_tree('fp_banner')) : 

		// Set the columns class for each module.
		if(ot_get_option('tophat_columns_count') != '') : 
		$header_columns = ot_get_option('tophat_columns_count');
		else : 
		$header_columns = "one-third column";
		endif;

		// Set the trigger for the Tophat Dropdown.
		if(ot_get_option('promotional_banner_functionality') != 'link' && ot_get_option('promotional_banner_functionality') != 'off') : 
		$trigger = "show_hide";
		endif;

		if(ot_get_option('promotional_banner_functionality') == 'link') : 
		$trigger_link = ot_get_option('promotional_custom_link');
		endif;

		if(ot_get_option('promotional_custom_link_target') == 'on') : 
		$trigger_target = "target='_blank'";
		endif;

		
	?> 
	<div class="super-container full-width" id="section-flagdropdown">

				<div class="slidingDiv" style="display: none;">
					<div class="container">
						<div class="<?php echo $header_columns; ?>">
							<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('dropdown-widget-1') ) ?>
							</div>
						<div class="<?php echo $header_columns; ?>">
							<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('dropdown-widget-2') ) ?>
							</div>
						<div class="<?php echo $header_columns; ?>">
							<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('dropdown-widget-3') ) ?>
							</div>
						<div class="<?php echo $header_columns; ?>">
							<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('dropdown-widget-4') ) ?>
							</div>
			       	</div>
			    </div>

		<div class="container">
			<div class="sixteen columns">

		    	<!-- Banner -->
		    	<div class="fp_banner">
		        	<div class="<?php echo esc_attr( $trigger ); ?> flag_toggle">

		        		<!-- If Custom Link Start -->
                        <?php if(ot_get_option('promotional_banner_functionality') == 'link') : ?>
                            <a href="<?php echo esc_url( $trigger_link ); ?>" <?php echo esc_attr( $trigger_target ); ?> >
                        <?php endif; ?>
		        		
						<img width="92px" height="auto" src="<?php echo ot_get_option('fp_banner'); ?>" />

						<!-- /If Custom Link End -->
                        <?php if(ot_get_option('promotional_banner_functionality') == 'link') : ?>
                            </a>
                        <?php endif; ?>

		            </div>
		        </div>        
		        <!-- /End Banner -->

			</div>
		</div>
	</div>

	<?php endif; ?>	
	<!-- /Flag Dropdown -->

	<?php get_template_part( 'includes/element', 'tophat' ); ?>

<!-- Header -->
<header>

	<!-- Super Container for Logo -->
	<div class="super-container full-width" id="section-header">
		<div class="container">
			<div class="sixteen columns">
				 
				<!-- Branding -->
				<div class="site-title-wrapper">
					<a href="<?php echo home_url(); ?>/" title="<?php echo bloginfo('blog_name'); ?>">
						<h1 class="site-title"><?php if(ot_get_option('logo')) : $logopath = ot_get_option('logo'); ?>
							<img id="logotype" src="<?php echo $logopath; ?>" alt="<?php echo bloginfo('blog_name'); ?>" />
	        				<?php else : ?>
		        			<?php echo bloginfo('blog_name'); ?>		
		        			<?php endif; ?></h1>
		         		<?php if(ot_get_option('logo')) : ; else : ?>
		        		<span class="site-title"> | <?php echo get_bloginfo('description'); ?></span>	
		        		<?php endif; ?>
					</a>
				</div>
				<!-- /End Branding -->

			</div>
		</div>
	</div>
	<!-- /End Super Container for Logo -->

	<!-- Super Container for Navigation -->
	<div class="super-container full-width" id="section-navigation">
		<div class="container">				
			<?php get_template_part( 'includes/element', 'navigation' ); ?>	
		</div>
	</div>
	<!-- /End Super Container for Navigation -->			


</header>
<!-- /End Header -->


<?php if(get_custom_field('slider_shortcode')) : ?>

	<div class="super-container full-width" id="section-slider">
		<?php get_template_part( 'includes/element', 'header-slider' ); ?>
	</div> 
	
<?php endif;?>

<!-- ============================================== -->
<!-- PAGE CONTENT COMES NEXT -->
<!-- ============================================== -->