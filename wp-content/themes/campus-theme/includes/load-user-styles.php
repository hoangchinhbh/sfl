<!--[if IE 8]>
<style type="text/css">
	.module-img img{width: 100%;}
	
	hiddenStyle: { opacity: 0.25 }
	.isotope-item {
	  z-index: 2;
	}	
	.isotope-hidden.isotope-item {
	  pointer-events: none;
	  z-index: 1;
	}
	hiddenStyle: $.browser.msie ? 
	  { opacity: 0.5, left: -2000 } : // IE
	  { opacity: 0, scale: 0.001 }
</style>
<![endif]-->


<style type="text/css">

<?php 

/* Custom CSS Modifications from the Admin Panel */

global $theme_options; 

global $vc_tab_bg_color;
global $vc_tab_font_color;

global $vc_tab_bg_hover_color;
global $vc_tab_font_hover_color;

global $vc_tab_bg_active_color;
global $vc_tab_font_active_color;

global $vc_tab_panel_bg_color;
global $vc_tab_panel_border_color;

$vc_tab_bg_color 					= "";
$vc_tab_font_color 					= "";

$vc_tab_bg_hover_color 				= "";
$vc_tab_font_hover_color 			= "";

$vc_tab_bg_active_color 			= "";
$vc_tab_font_active_color 			= "";

$vc_tab_panel_bg_color 				= "";
$vc_tab_panel_border_color 			= "";

?>

html,
body, 
#section-tophat,
#section-header,
#section-page-caption,
#section-content,
#section-footer,
#section-sub-footer{
	background-repeat: repeat;
 	background-position: top center;
 	background-attachment: scroll;
}


<?php 

/* ============================================================================= */
/* SKIN OPTIONS SECTION! LOAD THE BG STRIPES =================================== */
/* ============================================================================= */

$flagdropdown_bg = ot_get_option("flagdropdown_background_image");
	  $flagdropdown_color = ot_get_option("flagdropdown_background_color");
	  $tophat_bg = ot_get_option("tophat_background_image");
	  $tophat_color = ot_get_option("tophat_background_color");
	  $header_bg = ot_get_option("header_background_image");
	  $header_color = ot_get_option("header_background_color");
	  $navigation_bg = ot_get_option("navigation_background_image");
	  $navigation_color = ot_get_option("navigation_background_color");
	  $slider_bg = ot_get_option("slider_background_image");
	  $slider_color = ot_get_option("slider_background_color");
	  $default_bg = ot_get_option("default_bg");
	  $default_bgcolor = ot_get_option("default_bgcolor");
	  $content_bg = ot_get_option("content_bg");
	  $content_bgcolor = ot_get_option("content_bgcolor");
	  $footer_bg = ot_get_option("footer_background_image");
	  $footer_color = ot_get_option("footer_background_color");
	  $subfooter_bg = ot_get_option("subfooter_background_image");
	  $subfooter_color = ot_get_option("subfooter_background_color");
	  
	  $page_bg = get_custom_field("page_background_image");
	  $page_caption = get_custom_field("page_caption");


	if (ot_get_option("vc_tab_bg_color")) : $vc_tab_bg_color = ot_get_option("vc_tab_bg_color"); endif;
	if (ot_get_option("vc_tab_bg_hover_color")) : $vc_tab_bg_hover_color = ot_get_option("vc_tab_bg_hover_color"); endif;
	if (ot_get_option("vc_tab_bg_active_color")) : $vc_tab_bg_active_color = ot_get_option("vc_tab_bg_active_color"); endif;
	if (ot_get_option("vc_tab_panel_bg_color")) : $vc_tab_panel_bg_color = ot_get_option("vc_tab_panel_bg_color"); endif;
	if (ot_get_option("vc_tab_panel_border_color")) : $vc_tab_panel_border_color = ot_get_option("vc_tab_panel_border_color"); endif;

	if (ot_get_option("vc_tab_font_color")) : $vc_tab_font_color = ot_get_option("vc_tab_font_color"); endif;
	if (ot_get_option("vc_tab_font_hover_color")) : $vc_tab_font_hover_color = ot_get_option("vc_tab_font_hover_color"); endif;
	if (ot_get_option("vc_tab_font_active_color")) : $vc_tab_font_active_color = ot_get_option("vc_tab_font_active_color"); endif;


?>

<?php if (isset($flagdropdown_color[0])) { ?>
 		#section-flagdropdown {
 			background-image: url('');
 			background-color: <?php echo ot_get_option("flagdropdown_background_color"); ?>;
			}
<?php } ?>
<?php if (isset($flagdropdown_bg[0])) { ?>
 		#section-flagdropdown {
 			background-image: url('<?php echo ot_get_option("flagdropdown_background_image"); ?>');
			}
<?php } ?>

<?php if (isset($tophat_color[0])) { ?>
 		#section-tophat {
 			background-image: url('');
 			background-color: <?php echo ot_get_option("tophat_background_color"); ?>;
			}
<?php } ?>
<?php if (isset($tophat_bg[0])) { ?>
 		#section-tophat {
 			background-image: url('<?php echo ot_get_option("tophat_background_image"); ?>');
			}
<?php } ?>

<?php if (isset($header_color[0])) { ?>
 		#section-header {
 			background-image: none;	 			
 			background-color: <?php echo ot_get_option("header_background_color"); ?>;
			}
<?php } ?>
<?php if (isset($header_bg[0])) { ?>
 		#section-header {
 			background-image: url('<?php echo ot_get_option("header_background_image"); ?>');
 			background-position: top center;
			} 
<?php } ?>

<?php if (isset($navigation_color[0])) { ?>
 		#section-navigation, .sf-menu ul li, .sf-menu ul li li {
 			background-image: none;
 			background-color: <?php echo ot_get_option("navigation_background_color"); ?>;
			}
<?php } ?>
<?php if (isset($navigation_bg[0])) { ?>
 		#section-navigation, .sf-menu ul li, .sf-menu ul li li {
 			background-image: url('<?php echo ot_get_option("navigation_background_image"); ?>');
 			background-position: top center;
			} 
<?php } ?>

<?php if (isset($slider_color[0])) { ?>
 		#section-slider, #section-page-caption {
 			background-image: none;	 			
 			background-color: <?php echo ot_get_option("slider_background_color"); ?>;
			}
<?php } ?>
<?php if (isset($slider_bg[0])) { ?>
 		#section-page-caption .container {
 			background-image: url('<?php echo ot_get_option("slider_background_image"); ?>');
 			background-position: center center;
			} 
<?php } ?>

<?php if (isset($page_caption[0])) {

	if (isset($page_bg[0])) { ?>
 		#section-slider .container, #section-page-caption {
 			background-image: url('<?php echo get_custom_field("page_background_image"); ?>');
 			background-position: center center;
		} 
	<?php }
	/* Depricated 3.1.9
	Header Spacing
	if(get_custom_field('page_background_image_height')) : ?>
		#section-page-caption{ min-height: <?php echo get_custom_field('page_background_image_height'); ?> !important; }
	<?php endif; */

} else {

	if (isset($page_bg[0])) { ?>
 		#section-slider .container, #section-page-caption {
 			background-image: url('<?php echo get_custom_field("page_background_image"); ?>');
 			background-position: center center;
 			min-height: unset !important;
 			background-size: 100% auto;
		} 
	<?php }

} ?>
	
<?php if (isset($default_bgcolor[0])) { ?>
 		body {
 			background-image: url('');
 			background-color: <?php echo ot_get_option("default_bgcolor"); ?>;
			}
<?php } ?>	
<?php if (isset($default_bg[0])) { ?>
 		body {
 			background-image: url('<?php echo ot_get_option("default_bg"); ?>');
			}
<?php } ?>	

<?php if (isset($content_bgcolor[0])) { ?>	
		#section-content .container {
 			background-image: url('');
 			background-color: <?php echo ot_get_option("content_bgcolor"); ?>;
 			border: 15px solid <?php echo ot_get_option("content_bgcolor"); ?>;
			}
<?php } ?>	
<?php if (isset($content_bg[0])) { ?>
		#section-content .container {
 			background-image: url('<?php echo ot_get_option("content_bg"); ?>');
			}
<?php } ?>	

<?php if (isset($footer_color[0])) { ?>
 		#section-footer {
 			background-image: url('');
 			background-color: <?php echo ot_get_option("footer_background_color"); ?>;
			}
<?php } ?>
<?php if (isset($footer_bg[0])) { ?>
 		#section-footer {
 			background-image: url('<?php echo ot_get_option("footer_background_image"); ?>');
			}
<?php } ?>

<?php if (isset($subfooter_color[0])) { ?>
 		#section-sub-footer {
 			background-image: url('');
 			background-color: <?php echo ot_get_option("subfooter_background_color"); ?>;
			}
<?php } ?>
<?php if (isset($subfooter_bg[0])) { ?>
 		#section-sub-footer {
 			background-image: url('<?php echo ot_get_option("subfooter_background_image"); ?>');
			}
<?php } ?>



<?php 

/* ============================================================================== */
/* LINK COLORS SECTION! LOAD HIGHLIGHT COLORS =================================== */
/* ============================================================================== */

/* LINK COLOR STYLES ========== */

if (ot_get_option("link_color")) : $link_color = ot_get_option("link_color"); else: $link_color = '#ECB200'; endif; 

if (get_custom_field("page_color")) : $link_color = get_custom_field("page_color"); ?>

/*  - body #section-page-caption{background-color: <?php echo $link_color; ?> !important;} -  */
<?php endif;

if (isset($link_color[0])) : ?>	
	
	/* Colored Text */
	a, a span, 
	#section-tophat a, 
	#section-footer a,
	#section-flagdropdown a,
	.highlight-row h2 a,
	.customisable, .customisable:link, .customisable:visited, .customisable:hover, .customisable:focus, .customisable:active, .customisable-highlight:hover, .customisable-highlight:focus, a:hover .customisable-highlight, a:focus .customisable-highlight
	{	
		color: <?php echo $link_color; ?>; 
	}
	
	/* White Text / Colored BG */
	.sf-menu li.current-menu-item,
	.wpb_wrapper .wpb_content_element .wpb_wrapper .wpb_tabs_nav li.ui-tabs-active, 
	.wpb_wrapper .wpb_content_element .wpb_wrapper .wpb_tabs_nav li:hover,
	.wpb_wrapper .vc_tta-tabs li.vc_tta-tab.vc_active > a, 
	.wpb_wrapper .vc_tta-tabs li.vc_tta-tab:hover > a,
	.wpb_carousel .prev, .wpb_carousel .next,
	.read_more_button, 
	.widget_categories li, 
	.widget_archive li,
	#section-footer .widget_archive li a,
	#section-footer .widget_categories li a,
	#section-footer a[rel~="category"],
	a[rel~="category"],
	.tagcloud a,
	.sf-menu > li:hover,
	ul.sub-menu a:hover,
	.button:hover,
	.vc_bar,
	.rev_slider .tp-button
	/*.flex-control-paging li a.flex-active, .flex-control-paging li a:hover*/ {	
		background-color: <?php echo $link_color; ?> !important; 
		color: white !important;	
	}
	
	/* Colored BG Elements that need forced white color */
	.sf-menu > li:hover > a:hover,
	.sf-menu > li:hover span,
	.sf-menu > li:hover strong,
	.sf-menu li li:hover> a,
	.sf-menu.light ul li:hover > a,
	.widget_categories li a,
	.widget_categories li,
	.widget_archives li a, 
	.wpb_wrapper .vc_tta-tabs li.vc_tta-tab.vc_active > a span,
	.wpb_wrapper .wpb_content_element .wpb_wrapper .wpb_tabs_nav li:hover span,
	.vc_tta-title-text{	
		color: white !important;
	}
	
	/* Border Elements */
	#section-footer {
		border-top: 2px solid <?php echo $link_color; ?>;	
	}
	/*.sf-menu li li:hover{	
		border-left: 1px solid <?php echo $link_color; ?>; 
		border-right: 1px solid <?php echo $link_color; ?>; 
	}*/

	/*  - Navigation Highlights -  */
	#section-navigation, 
	.vc_tta-tabs-position-top .vc_tta-tabs-container {
		border-bottom: 5px solid <?php echo $link_color; ?>;
	}
	.vc_tta-tabs-position-left .vc_tta-tabs-container {
		border-right: 5px solid <?php echo $link_color; ?>;
	}
	.woocommerce-page .page-title,
	hr.page-title-hr, 
	.wpb_tabs_nav, 
	.wpb_wrapper .wpb_tabs hr, 
	.wpb_wrapper .wpb_tour hr, 
	#section-flagdropdown hr,
	.slidingDiv,
	#section-footer hr, 
	.vc_tta-panels hr {
		border-bottom-color: <?php echo $link_color; ?> !important;
	}
	.sf-arrows .sf-with-ul:after {
		border-top-color: <?php echo $link_color; ?>;
	}

	/*  - WooCommerce -  */
	.button.add_to_cart_button.product_type_simple:hover {
		color: <?php echo $link_color; ?> !important;
	}
	.woocommerce .woocommerce-message:before, .woocommerce-page .woocommerce-message:before, 
	.woocommerce span.onsale, .woocommerce-page span.onsale {
		background-color: <?php echo $link_color; ?> !important;
	}
	.woocommerce .woocommerce-message, .woocommerce-page .woocommerce-message {
		border-top-color: <?php echo $link_color; ?> !important;
	}
	.woocommerce-page .page-title {
		border-bottom-color: <?php echo $link_color; ?> !important;
	}
	
<?php endif; ?>

<?php /* SECONDARY COLORS, CUSTOM MODULES, ETC. ============ */

$secondary_color = ot_get_option("secondary_color"); if (isset($secondary_color[0])) : ?>

	.sidebar .widget:first-child .widget-title{
		border-bottom-color: <?php echo $secondary_color; ?> !important;
	}

	.highlight-row, 
	.module-row, 
	.wpb_wrapper .wpb_accordion_wrapper .wpb_accordion_header, 
	.wpb_wrapper .wpb_wrapper.wpb_tour_tabs_wrapper .wpb_tab, 
	.wpb_wrapper .wpb_content_element .wpb_wrapper .wpb_tabs_nav li,
	.wpb_wrapper .wpb_content_element .wpb_tabs_nav li,
	.wpb_wrapper .wpb_accordion_wrapper .wpb_accordion_header, 
	.wpb_wrapper .wpb_tour_tabs_wrapper .wpb_tab, 
	li.vc_tta-tab a,
	.vc_tta-panel-body {
		background-color: <?php echo $secondary_color; ?> !important;
	}

<?php endif; ?>



<?php /* HOVER COLOR STYLES ========== */

$link_hover_color = ot_get_option("link_hover_color"); if (isset($link_hover_color[0])) : ?>	
	
	a:hover{color: <?php echo ot_get_option('link_hover_color'); ?>;}
	
	/* BACKGROUND ELEMENTS - using hover color */
	.widget_categories li:hover, 
	.widget_archive li:hover,
	.read_more_button:hover,
	/* .action_button_wrapper .action_button a:hover, */
	a[rel~="category"]:hover,
	.tagcloud a:hover,
	.rev_slider .tp-button:hover{	
		background-color: <?php echo ot_get_option('link_hover_color'); ?> !important;
		color: white; 
	}
	
<?php endif ?>

<?php /* VISITED LINK COLOR ============ */

$link_visited_color = ot_get_option("link_visited_color"); if (isset($link_visited_color[0])) : ?>
	
	a:visited {
		color: <?php echo ot_get_option('link_visited_color'); ?>;	
	}
	
	.widget_categories li:visited, 
	.widget_archive li:visited,
	.read_more_button:visited,
	.action_button a:visited,
	a[rel~="category"]:visited,
	.tagcloud a:visited,
	.rev_slider .tp-button:visited,
	ul.sub-menu a:visited{	
		color: white; 
	}

<?php endif; ?>


<?php 

/* ---------------------------------------------------------*/
/* TYPOGRAPHY - COLOR LOADER */ 
/* ---------------------------------------------------------*/

$tophatdropdown_headline_color = ot_get_option("tophatdropdown_headline_color");
	  $tophatdropdown_body_color = ot_get_option("tophatdropdown_body_color");
	  $tophat_headline_color = ot_get_option("tophat_headline_color");
	  $tophat_body_color = ot_get_option("tophat_body_color");
	  $header_headline_color = ot_get_option("header_headline_color");
	  $header_body_color = ot_get_option("header_body_color");
	  $caption_headline_color = ot_get_option("caption_headline_color");
	  $caption_body_color = ot_get_option("caption_body_color");
	  $default_headline_color = ot_get_option("default_headline_color");
	  $default_body_color = ot_get_option("default_body_color");
	  $footer_headline_color = ot_get_option("footer_headline_color");
	  $footer_body_color = ot_get_option("footer_body_color");
	  $subfooter_headline_color = ot_get_option("subfooter_headline_color");
	  $subfooter_body_color = ot_get_option("subfooter_body_color");
?>

<?php if (isset($tophatdropdown_body_color[0])) { ?>
 		#section-flagdropdown *, #section-flagdropdown .textwidget, #section-flagdropdown .widget li {
 			color: <?php echo ot_get_option("tophatdropdown_body_color"); ?>;
			}
<?php } ?>
<?php if (isset($tophatdropdown_headline_color[0])) { ?>
 		#section-flagdropdown h1, #section-flagdropdown h2, #section-flagdropdown h3, #section-flagdropdown h4, #section-flagdropdown h5,
 		#section-flagdropdown h1 a, #section-flagdropdown h2 a, #section-flagdropdown h3 a, #section-flagdropdown h4 a, #section-flagdropdown h5 a {
 			color: <?php echo ot_get_option("tophatdropdown_headline_color"); ?> !important;
			}
<?php } ?>

<?php if (isset($tophat_body_color[0])) { ?>
 		#section-tophat .tagline {
 			color: <?php echo ot_get_option("tophat_body_color"); ?>;
			}
<?php } ?>
<?php if (isset($tophat_headline_color[0])) { ?>
 		#section-tophat .tagline h1, #section-tophat .tagline h2, #section-tophat .tagline h3, #section-tophat .tagline h4, #section-tophat .tagline h5 {
 			color: <?php echo ot_get_option("tophat_headline_color"); ?>;
			}
<?php } ?>

<?php if (isset($header_body_color[0])) { ?>
 		#section-header {
 			color: <?php echo ot_get_option("header_body_color"); ?>;
			}
<?php } ?>
<?php if (isset($header_headline_color[0])) { ?>
 		#section-header h1, #section-header h2, #section-header h3, #section-header h4, #section-header h5 {
 			color: <?php echo ot_get_option("header_headline_color"); ?>;
			}
<?php } ?>

<?php if (isset($caption_body_color[0])) { ?>
 		#section-page-caption {
 			color: <?php echo ot_get_option("caption_body_color"); ?>;
			}
<?php } ?>
<?php if (isset($caption_headline_color[0])) { ?>
 		#section-page-caption h1, #section-page-caption h2, #section-page-caption h3, #section-page-caption h4, #section-page-caption h5 {
 			color: <?php echo ot_get_option("caption_headline_color"); ?>;
			}
<?php } ?>

<?php if (isset($default_body_color[0])) { ?>
 		body, p, span, div {
 			color: <?php echo ot_get_option("default_body_color"); ?>;
			}
<?php } ?>
<?php if (isset($default_headline_color[0])) { ?>
 		h1, h2, h3, h4, h5,
 		h1 a, h2 a, h3 a, h4 a, h5 a,
 		h1.page-title a, h1.entry-title a,
 		.module-meta h3 a {
 			color: <?php echo ot_get_option("default_headline_color"); ?> !important;
			}
<?php } ?>

<?php if (isset($footer_body_color[0])) { ?>
 		#section-footer div {
 			color: <?php echo ot_get_option("footer_body_color"); ?>;
			}
<?php } ?>
<?php if (isset($footer_headline_color[0])) { ?>
 		#section-footer h1, #section-footer h2, #section-footer h3, #section-footer h4, #section-footer h5,
 		#section-footer h1 a, #section-footer h2 a, #section-footer h3 a, #section-footer h4 a, #section-footer h5 a {
 			color: <?php echo ot_get_option("footer_headline_color"); ?> !important;
			}
<?php } ?>

<?php if (isset($subfooter_body_color[0])) { ?>
 		#section-sub-footer * {
 			color: <?php echo ot_get_option("subfooter_body_color"); ?>;
			}
<?php } ?>
<?php if (isset($subfooter_headline_color[0])) { ?>
		#section-sub-footer .copyright h1, #section-sub-footer .copyright h2, #section-sub-footer .copyright h3, #section-sub-footer .copyright h4, #section-sub-footer .copyright h5,
 		#section-sub-footer .colophon h1, #section-sub-footer .colophon h2, #section-sub-footer .colophon h3, #section-sub-footer .colophon h4, #section-sub-footer .colophon h5 {
 			color: <?php echo ot_get_option("subfooter_headline_color"); ?> !important;
			}
<?php } ?>




/* NEW VISUAL COMPOSER STYLING OPTIONS */
<?php 
if (ot_get_option("vc_tab_bg_color")) : ?>
	#section-content .vc_tta-tabs-list li.vc_tta-tab > a, 
	#section-content .wpb_tabs li.ui-state-default a {
		background-color: <?php echo esc_attr( $vc_tab_bg_color ); ?> !important;
		}
<?php endif; 
if (ot_get_option("vc_tab_bg_hover_color")) : ?>
	#section-content .vc_tta-tabs-list li.vc_tta-tab:hover > a, 
	#section-content .wpb_tabs li.ui-state-default:hover a {
		background-color: <?php echo esc_attr( $vc_tab_bg_hover_color ); ?> !important;
		}
<?php endif; 
if (ot_get_option("vc_tab_bg_active_color")) : ?>
	#section-content .vc_tta-tabs-list li.vc_tta-tab.vc_active > a, 
	#section-content .wpb_tabs li.ui-state-active a {
		background-color: <?php echo esc_attr( $vc_tab_bg_active_color ); ?> !important;
		}
<?php endif; 
if (ot_get_option("vc_tab_panel_bg_color")) : ?>
	.vc_tta-panel-body, 
	#section-content .wpb_tabs .wpb_tab.ui-tabs-panel {
		background-color: <?php echo esc_attr( $vc_tab_panel_bg_color ); ?> !important;
		}
<?php endif; 
if (ot_get_option("vc_tab_panel_border_color")) : ?>
	#section-content .wpb_tabs .wpb_tabs_nav {
		border-color: <?php echo esc_attr( $vc_tab_panel_border_color ); ?> !important;
		}
<?php endif; 

// Font Colors
if (ot_get_option("vc_tab_font_color")) : ?>
	#section-content .vc_tta-tabs-list li.vc_tta-tab > a, 
	#section-content .wpb_tabs li.ui-state-default a {
		color: <?php echo esc_attr( $vc_tab_font_color ); ?> !important;
		}
<?php endif; 
if (ot_get_option("vc_tab_font_hover_color")) : ?>
	#section-content .vc_tta-tabs-list li.vc_tta-tab:hover > a, 
	#section-content .wpb_tabs li.ui-state-default:hover a {
		color: <?php echo esc_attr( $vc_tab_font_hover_color ); ?> !important;
		}
<?php endif; 
if (ot_get_option("vc_tab_font_active_color")) : ?>
	#section-content .vc_tta-tabs-list li.vc_tta-tab.vc_active > a, 
	#section-content .wpb_tabs li.ui-state-active a {
		color: <?php echo esc_attr( $vc_tab_font_active_color ); ?> !important;
		}
<?php endif; 
?>


<?php // Custom Slider Theme Styles
if (get_custom_field("slider_theme_styles") == "on") : 

	global $slider_theme_styles_top_margin;
	global $slider_theme_styles_padding;
	global $slider_theme_styles_border;
	global $slider_theme_styles_shadow;

	$slider_theme_styles_top_margin = get_custom_field("slider_theme_styles_top_margin");
	$slider_theme_styles_padding = get_custom_field("slider_theme_styles_padding");
	$slider_theme_styles_border = get_custom_field("slider_theme_styles_border");
	$slider_theme_styles_shadow = get_custom_field("slider_theme_styles_shadow");
	?>
	#section-slider .rev_slider_wrapper {
		border: <?php echo esc_attr( $slider_theme_styles_border ); ?> !important;
		box-shadow: <?php echo esc_attr( $slider_theme_styles_shadow ); ?> !important;
		padding: <?php echo esc_attr( $slider_theme_styles_padding ); ?> !important;
		margin-top: <?php echo esc_attr( $slider_theme_styles_top_margin ); ?> !important;
	}
<?php endif; ?>


<?php /* Font Icon Removal - DO NOTHING */
if (ot_get_option('alt_fontreplace')) : else : ?> 
/* .meta-string .format-icon, .meta-string .bullet:nth-child(2) {
    display: none !important;
} */
<?php endif; ?>



/*
<?php // Header Alignment 
if(ot_get_option('header_sticky')) : ?>
	#section-header .container{ position: <?php echo ot_get_option('header_sticky'); ?>; }	
<?php endif; ?>
*/

<?php if(ot_get_option('header_layout') == "left" ) { ?>
	.site-title-wrapper {
	    float: left;
	    text-align: left;
	}
	#menu{clear:both; margin: 20px auto 0; float: none; text-align: center;}
	/* #menu{float:right;} */
<?php } else if(ot_get_option('header_layout') == "right" ) { ?>
	.site-title-wrapper {
	    float: right;
	    text-align: right;
	}
	#menu{clear:both; margin: 20px auto 0; float: none; text-align: center;}
	/* #menu{float:left;} */
<?php } else if(ot_get_option('header_layout') == "center" ) { ?>
	header{text-align: center;}
	.site-title-wrapper {
	    float: none;
	    text-align: center;
	    clear: both;
	    margin: 0 auto;
	}
	#menu{clear:both; margin: 20px auto 0; float: none; text-align: center;}
<?php } ?>

<?php if (get_option_tree('fp_banner')) : ?> 
	#section-tophat .tagline {
	  margin-right: 124px !important;
	}			
<?php endif; ?>	

<?php if (get_option_tree('top_hat') == 'No') : ?>
.site-title-wrapper {
  padding-top: 15px;
}
<?php endif; ?>


<?php /* Page Title - Show/Hide */
if(get_custom_field('show_title') == 'No') : ?>
	h1.page-title, .page-title-hr{display: none;}
<?php endif; ?>



<?php /* Caption Bottom Border 
if(get_custom_field('caption_border')) : 
$caption_border = get_custom_field('caption_border'); 

	if ($caption_border != "none") :
		if (isset($caption_border)) :
		$caption_border_url = WP_THEME_URL . "/assets/images/decorative_edges/top_tiles/".$caption_border.".png"; 
		?>
		#section-page-caption:after {
		    background: url("<?php echo $caption_border_url; ?>") repeat-x scroll center bottom !important;
		    content: " ";
		    height: 10px;
		    margin-top: 190px;
		    position: absolute;
		    width: 100%;}
<?php 
		endif; 
	endif; 
endif;
*/?>


<?php /* Set the css for Promotional Banner. */

if(ot_get_option('promotional_banner_functionality') == "off" ) { ?>

	.fp_banner img {cursor: auto !important;}

<?php } ?>



<?php /* Set the columns class for each tophat dropdown. */

if(ot_get_option('tophat_columns_count') == "one_column" ) { ?>

	#section-flagdropdown .widget {width: 1100px;}

<?php } else if(ot_get_option('tophat_columns_count') == "two_columns" ) { ?>

	#section-flagdropdown .widget {width: 515px;}

<?php } else if(ot_get_option('tophat_columns_count') == "three_columns" ) { ?>

	#section-flagdropdown .widget {width: 340px;}

<?php } else if(ot_get_option('tophat_columns_count') == "four_columns" ) { ?>

	#section-flagdropdown .widget {width: 245px;}

<?php } ?>

<?php /* Set the columns class for each footer. */

if(ot_get_option('footer_columns_count') == "one_column" ) { ?>

	#section-footer .widget {width: 1100px;}

<?php } else if(ot_get_option('footer_columns_count') == "two_columns" ) { ?>

	#section-footer .widget {width: 515px;}

<?php } else if(ot_get_option('footer_columns_count') == "three_columns" ) { ?>

	#section-footer .widget {width: 340px;}

<?php } else if(ot_get_option('footer_columns_count') == "four_columns" ) { ?>

	#section-footer .widget {width: 245px;}

<?php } ?>



<?php /* Blog Content v. Sidebar(s) Alignment */ 

if(get_custom_field('content_alignment') == "left" ) { ?>
	/*  - CONTENT LEFT - C/P/S  -  */
	.page-template-template-blog-php .secondary-sidebar {float: right;}
	.page-template-template-blog-php .sidebar {float: right;}

<?php } else if(get_custom_field('content_alignment') == "right" ) { ?>
	/*  - CONTENT RIGHT - S/P/C -  */
	.page-template-template-blog-php .content {float: right;}
	.page-template-template-blog-php .secondary-sidebar {float: left;}

<?php } else if(get_custom_field('content_alignment') == "center" ) { ?>
	/*  - STANDARD - S/C/P -  */
	.page-template-template-blog-php .secondary-sidebar {float: left;}

<?php } else if(get_custom_field('content_alignment') == "flip" ) { ?>
	/*  - FLIP - P/C/S -  */
	.page-template-template-blog-php .secondary-sidebar, .page-template-template-blog-php .content {float: right;}

<?php } ?>

<?php /* Page/Post Content v. Sidebar(s) Alignment */ 

if(get_custom_field('page_content_alignment') == "page_left" ) { ?>
	/*  - CONTENT LEFT - C/P/S  -  */
	.page-template-default .secondary-sidebar {float: right;}
	.page-template-default .sidebar {float: right;}

<?php } else if(get_custom_field('page_content_alignment') == "page_right" ) { ?>
	/*  - CONTENT RIGHT - S/P/C -  */
	.page-template-default .content {float: right;}
	.page-template-default .secondary-sidebar {float: left;}

<?php } else if(get_custom_field('page_content_alignment') == "page_center" ) { ?>
	/*  - STANDARD - S/C/P -  */
	.page-template-default .secondary-sidebar {float: left;}
	.page-template-default .primary-sidebar {float: right;}

<?php } else if(get_custom_field('page_content_alignment') == "page_flip" ) { ?>
	/*  - FLIP - P/C/S -  */
	.page-template-default .secondary-sidebar, .page-template-default .content {float: right;}

<?php } ?>



<?php /* FontStack Loader */ 
if (ot_get_option('default_fontstack')) : ?>
	body{<?php echo ot_get_option('default_fontstack'); ?>}
<?php endif ?>



<?php /* Custom CSS (from user) */
echo ot_get_option('customcss');
echo get_custom_field('page_css'); ?> 

</style>



<?php
/* ---------------------------------------------------------*/
/* TYPEKIT - HEADER EMBED CODE */ 
/* ---------------------------------------------------------*/
if(ot_get_option('alt_fontreplace_toggle') == "on" ) { ?>

	<?php if (ot_get_option('alt_fontreplace')) : 
		echo ot_get_option("alt_fontreplace"); 
	endif;
	?>

<?php } ?>

