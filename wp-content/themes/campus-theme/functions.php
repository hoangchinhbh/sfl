<?php

/**
* Initiate Theme Options
*
* @uses wp_deregister_script()
* @uses wp_register_script()
* @uses wp_enqueue_script()
* @uses register_nav_menus()
* @uses add_theme_support()
* @uses is_admin()
*
* @access public
* @since 1.0.0
*
* @return void

*/


// this handles redirect on activating the theme (can be amended for plugin of course)
// if (is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
//		header( 'Location: '.admin_url().'themes.php?page=ot-theme-options');
//	}


/* ---------------------------------------------------------*/
/* CONSTANTS & GENERIC THEME FUNCTIONS */ 
/* ---------------------------------------------------------*/

/* THEME URL CONSTANT */
if(!defined('WP_THEME_URL')) {
	define( 'WP_THEME_URL', get_template_directory_uri());
}

/* Declare our Post-Grid global variabls for VT_RESIZE */
$imgwidth = "750";
$imgheight = "2000";
$imagecrop = "true";

/* Image Resize */
include_once( 'functions/vt_resize.php' );

add_theme_support( 'automatic-feed-links' );

/* Add "Post Thumbnails" Support */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 750, 450, true );
add_image_size( 'single-post-thumbnail', 700, 9999 );

/* Add shortcode support in widgets */
add_filter('widget_text', 'do_shortcode');

/* Add comment-reply support */
function theme_queue_js(){
  if (!is_admin()){
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
      wp_enqueue_script( 'comment-reply' );
  }
}
add_action('wp_print_scripts', 'theme_queue_js');

/* GET CUSTOM FIELD - Allows us to grab custom meta fields super easy */
function get_custom_field($key,$echo=false) {
global $post;
if(!isset($post->ID)) return null;
$custom_field = get_post_meta($post->ID,$key,true);
if($echo==false) return $custom_field;
echo $custom_field;
}

/* CATEGORY SLUG FUNCTION - Allows us to grab the category slug from an ID */
function get_cat_slug($cat_id) {
	$cat_id = (int) $cat_id;
	$category = &get_category($cat_id);
	return $category->slug;
}

/* ---------------------------------------------------------*/
/* THEME SUPPORT DECLARATIONS */
/* ---------------------------------------------------------*/

    /* WOOCOMMERCE */
    //if( class_exists( 'woocommerce' ) ):
    /*if ( ! function_exists( 'is_woocommerce_activated' ) ) {
		function is_woocommerce_activated() {
			if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
			}
			}*/
	/*add_action( 'after_setup_theme', 'woocommerce_support' );
		function woocommerce_support() {
		add_theme_support( 'woocommerce' );
		}*/
    add_theme_support( 'woocommerce' );

    /*  - WOOCOMMERCE: Primary Wrappers -  */
    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

    add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
    add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
 
    function my_theme_wrapper_start() {
      echo '<main id="main" class="site-main" role="main">';
    }

    function my_theme_wrapper_end() {
      echo '</main>';
    }

    /*  - WOOCOMMERCE: Theme Stylings -  */
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

	add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 5 );

	function product_page_title_hr(){
		echo "<hr class='page-title-hr'>";
		}
		add_action('woocommerce_before_single_product_summary','product_page_title_hr' );

	function shop_page_title_hr(){
		echo "<hr class='page-title-hr'>";
		}
		add_action('woocommerce_archive_description','shop_page_title_hr', 5 );
//endif;

		
/* ---------------------------------------------------------*/
/* MYTHOLOGY-CORE - OPTION TREE LOADER SNIPPET
/* Loads OT files, OT Google Fonts, and custom skins.
/* ---------------------------------------------------------*/

	add_filter( 'ot_theme_mode', '__return_true' ); 
    add_filter( 'ot_show_pages', '__return_true' );
    add_filter( 'ot_show_options_ui', '__return_false' );
    add_filter( 'ot_show_settings_import', '__return_true' );
    add_filter( 'ot_show_settings_export', '__return_true' );
    add_filter( 'ot_show_new_layout', '__return_false' );
    add_filter( 'ot_show_docs', '__return_false' );

	// LOAD IT UP
	require_once( trailingslashit( get_template_directory() ) . '/mythology-core/option-tree/ot-loader.php' ); // Load OptionTree.

	// LOAD THEME OPTIONS & META BOXES FOR POSTS/PAGES
	include_once( 'functions/admin/skeleton-theme-options.php' );
	include_once( 'functions/admin/skeleton-meta-boxes.php' );

	// LOAD CUSTOM ADMIN SKINS & SCRIPTS 
		/* NOTE that you can specify your own custom stylesheet here. 
		  	We're using the "candy-admin" or "candy-admin-simple", 
		  	but you can use old skin versions or your own custom mods.
		  */
	add_action('admin_enqueue_scripts', 'mythology_admin_script');
	function mythology_admin_script(){
	  // if(ot_get_option('options_skin') != "off" ) : // Set this to "on" and add a Theme-Option to make this something the user can control.
	    wp_enqueue_style ( 'mythology-candy-stylesheet', get_template_directory_uri(). '/mythology-core/option-tree-candy-skin/candy-admin-simple.css', array('ot-admin-css') );
	    wp_enqueue_style ( 'mythology-admin-stylesheet', get_template_directory_uri(). '/mythology-core/option-tree-candy-skin/candy-plugin-notification.css');
	    wp_enqueue_script('mythology-admin-js', get_template_directory_uri(). '/mythology-core/option-tree-candy-skin/candy-admin.js' );
		//wp_enqueue_style ( 'admin-stylesheet', WP_THEME_URL . '/functions/admin/skeleton-admin.css', array('colors', 'ot-admin-css'));
	    //wp_enqueue_script('my-admin', get_template_directory_uri().'/functions/admin/skeleton-admin.js', array('jquery'));
	  // endif;
	}

	/* =============================================================================
		Include the Option-Tree Google Fonts Plugin
		========================================================================== */

	global $ot_options;
	$ot_options = get_option( 'option_tree' );

  	// default fonts used in this theme, even though there are no google fonts
  	$default_theme_fonts = array(
		'arial' => 'Arial, Helvetica, sans-serif',
		'helvetica' => 'Helvetica, Arial, sans-serif',
		'georgia' => 'Georgia, "Times New Roman", Times, serif',
		'tahoma' => 'Tahoma, Geneva, sans-serif',
		'times' => '"Times New Roman", Times, serif',
		'trebuchet' => '"Trebuchet MS", Arial, Helvetica, sans-serif',
		'verdana' => 'Verdana, Geneva, sans-serif'
  	);

  	defined('OT_FONT_DEFAULTS') or define('OT_FONT_DEFAULTS', serialize($default_theme_fonts));
  	defined('OT_FONT_API_KEY') or define('OT_FONT_API_KEY', 'AIzaSyAeA4ipDEoRqvJKQctOhYufUmXJFkQjviY'); // enter your own Google Font API key here
  	defined('OT_FONT_CACHE_INTERVAL') or define('OT_FONT_CACHE_INTERVAL', 0); // Checking once a week for new Fonts. The time interval for the remote XML cache in the database (21600 seconds = 6 hours)

	// get the OT-Google-Font plugin file
	include_once( get_template_directory().'/mythology-core/option-tree-google-fonts/ot-google-fonts.php' );

		/* NOTE that we have made some changes to the ot-google-fonts.php file. 
			For starters, we've editted the $path variable so that it works in mythology-core.
			Next, we've removed the nag-box that shows up for errors and success messages.
			Last - we've also filtered out the font-color picker from OptionTree (see filter below) to prevent fix issues.
		*/

	// get the google font array - build in ot-google-fonts.php
	$google_font_array = ot_get_google_font(OT_FONT_API_KEY, OT_FONT_CACHE_INTERVAL);

	// Now apply the fonts to the font dropdowns in theme options with the build in OptionTree hook
	function ot_filter_recognized_font_families( $array, $field_id ) {

		global $google_font_array;

		// loop through the cached google font array if available and append to default fonts
		$font_array = array();
		if($google_font_array){
				foreach($google_font_array as $index => $value){
						$font_array[$index] = $value['family'];
				}
		}

		// put both arrays together
		$array = array_merge(unserialize(OT_FONT_DEFAULTS), $font_array);

		return $array;

	}
	add_filter( 'ot_recognized_font_families', 'ot_filter_recognized_font_families', 1, 2 );		

	// REMOVE FONT-COLOR FROM TYPOGRAPHY FIELDS (for OT GOOGLE FONTS).
	function filter_typography_headings( $array, $field_id ) {
		// COMMENT OUT LINES FOR FIELDS THAT YOU WANT TO REMOVE FROM VIEW
		$array = array(
		// 'font-color', 
		'font-family',
		'font-size',
		'font-style',
		'font-variant',
		'font-weight',
		'letter-spacing',
		'line-height',
		'text-decoration',
		'text-transform'
		);  
		return $array;
	}
	add_filter( 'ot_recognized_typography_fields', 'filter_typography_headings', 10, 2 );

// REMOVE DYNAMIC AND RELOAD IT TO ENSURE THAT IT ALWAYS FIRES UP.
//wp_dequeue_style( 'ot-dynamic-dynamic-css' );
//wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri() );
//wp_enqueue_style( 'ot-dynamic-dynamic-css' );
/*  - End Mythology ADD -  */







/* ---------------------------------------------------------*/
/* LOCALIZATION */
/* ---------------------------------------------------------*/
function mdnw_localization() {	
	/* LOCALIZATION STUFF - 
	Defines the text domain 'skeleton' - 
	Instructs where the language files are - 
	Then instructs the theme to load the language if it's in WP-CONFIG.php as WP_LANG */
	load_theme_textdomain('skeleton', get_template_directory() . '/languages');
	$locale = get_locale();
	$locale_file = get_template_directory()."/languages/$locale.php";
	if ( is_readable($locale_file) )
		require_once($locale_file);			
}    
add_action('init', 'mdnw_localization'); /* Run the above function at the init() hook */




/* ---------------------------------------------------------*/
/* SCRIPT LOADING */
/* ---------------------------------------------------------*/


function mdnw_register_scripts() {
	if(!is_admin()){
				
		
		function detect_ie($ie7_check = true, $ie8_check = true) {
		    $ie7 = ($ie7_check == true) ? strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0') : false;
		    $ie8 = ($ie8_check == true) ? strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') : false;
		    if ($ie7 !== false || $ie8 !== false) {
		        return true;
		    } else {
		        return false;
		    }
		}

    	wp_enqueue_script( 'jquery' );		 
    	    	
		// Sortable Masonry 
    	wp_register_script( 'Isotope', WP_THEME_URL . '/assets/javascripts/isotope/jquery.isotope.js', false, null, true);
    	wp_enqueue_script( 'Isotope' );	
    	
    	wp_register_script( 'Modernizer', WP_THEME_URL . '/assets/javascripts/isotope/modernizr.custom.69142.js', false, null, true);
    	wp_enqueue_script( 'Modernizer' );   			    	    	    	
    	
    	//Dropdown Menu
    	wp_register_script( 'HoverIntent', WP_THEME_URL . '/assets/javascripts/superfish/jquery.hoverIntent.js', false, null, true);
    	wp_enqueue_script( 'HoverIntent' );	
    	
    	wp_register_script( 'Superfish', WP_THEME_URL . '/assets/javascripts/superfish/superfish.js', false, null, true);
    	wp_enqueue_script( 'Superfish' );
	
		wp_register_script( 'SuperSubs', WP_THEME_URL . '/assets/javascripts/superfish/supersubs.js', false, null, true);
    	wp_enqueue_script( 'SuperSubs' );
    	
    	//Responsive Menu    	
    	wp_register_script( 'Modernizer2', WP_THEME_URL . '/assets/javascripts/mobilemenu/js/modernizr.custom.js', false, null, true);
    	wp_enqueue_script( 'Modernizer2' );
    	
    	wp_register_script( 'ResponsiveMenu', WP_THEME_URL . '/assets/javascripts/mobilemenu/js/jquery.dlmenu.js', false, null, true);
    	if( detect_ie() ) { } else {  wp_enqueue_script( 'ResponsiveMenu' ); }    	
    	    	
    	// Pre-Script Action
    	wp_register_script( 'SkeletonKeyPreScripts', WP_THEME_URL . '/assets/javascripts/skeleton-key-prescripts.js', false, null, false);
    	wp_enqueue_script( 'SkeletonKeyPreScripts' ); 
    	
		// The Activation Scripts
		wp_register_script( 'SkeletonKey', WP_THEME_URL . '/assets/javascripts/skeleton-key.js', false, null, true);
    	wp_enqueue_script( 'SkeletonKey' ); 
		
    }
}
add_action('init', 'mdnw_register_scripts'); /* Run the above function at the init() hook */




/* ---------------------------------------------------------*/
/* STYLESHEET LOADER */
/* ---------------------------------------------------------*/
function mdnw_register_styles() {
	if(!is_admin()){	
		wp_register_style ( 'Base', WP_THEME_URL . '/assets/stylesheets/base.css' );
    	wp_enqueue_style( 'Base' );
    	
    	wp_register_style ( 'skeleton', WP_THEME_URL . '/assets/stylesheets/skeleton.css' );
    	wp_enqueue_style( 'skeleton' );
    	
    	wp_register_style ( 'ResponsiveMenu', WP_THEME_URL . '/assets/javascripts/mobilemenu/css/component.css' );
    	wp_enqueue_style( 'ResponsiveMenu' );
    	
    	wp_register_style ( 'comments', WP_THEME_URL . '/assets/stylesheets/comments.css' );
    	wp_enqueue_style( 'comments' );    	
    	
    	wp_register_style ( 'FontAwesome', WP_THEME_URL . '/assets/stylesheets/fonts/font-awesome.css' );
    	wp_enqueue_style( 'FontAwesome' );
    	
    	wp_register_style ( 'Foundation Icons', WP_THEME_URL . '/assets/stylesheets/fonts/general_foundicons.css' );
    	wp_enqueue_style( 'Foundation Icons' );
    	
    	wp_register_style ( 'Foundation Social Icons', WP_THEME_URL . '/assets/stylesheets/fonts/social_foundicons.css' );
    	wp_enqueue_style( 'Foundation Social Icons' );
    	
    	wp_register_style ( 'superfish', WP_THEME_URL . '/assets/stylesheets/superfish.css' );
    	wp_enqueue_style( 'superfish' );
    	
    	wp_register_style ( 'base-theme-stylesheet', WP_THEME_URL . '/assets/stylesheets/styles.css' );
    	wp_enqueue_style( 'base-theme-stylesheet' );  	
		
		wp_register_style ( 'type-stylesheet', WP_THEME_URL . '/assets/stylesheets/typography.css' );
		wp_enqueue_style( 'type-stylesheet' );
		
		wp_register_style ( 'theme-stylesheet', WP_THEME_URL . '/assets/stylesheets/theme.css' );
		wp_enqueue_style( 'theme-stylesheet' );
		
		wp_register_style ( 'base-stylesheet', WP_THEME_URL . '/style.css' );
		wp_enqueue_style( 'base-stylesheet' );
		
		wp_register_style ( 'dynamic-stylesheet', WP_THEME_URL . '/dynamic.css' );
		wp_enqueue_style( 'dynamic-stylesheet' );	
		
    }
}
add_action('init', 'mdnw_register_styles'); /* Run the above function at the init() hook */




/* ---------------------------------------------------------*/
/* THEME OPTIONS LOADER - Loads the ThemeOptions values */ 
/* ---------------------------------------------------------*/
function mdnw_style_embed(){
   get_template_part( 'includes/load', 'user-styles' ); 
}
add_action('wp_head', 'mdnw_style_embed');


/* ---------------------------------------------------------*/
/* MENUS */ 
/* ---------------------------------------------------------*/
function mdnw_register_menus() {
	 /* Register Navigation */
    register_nav_menus( array(
		'default_menu' => __( 'Top Bar Menu', 'skeleton' ),
		'responsive_menu' => __( 'Top Bar Menu - Responsive Mode', 'skeleton' ),
	) );
}
add_action('init', 'mdnw_register_menus'); /* Run the above function at the init() hook */



/* ---------------------------------------------------------*/
/* SIDEBARS */ 
/* ---------------------------------------------------------*/
function mdnw_register_sidebars() {
	register_sidebar( array(
		'name' => __( 'Tophat Dropdown Column 1', 'skeleton' ),
		'id' => 'dropdown-widget-1',
		'description' => __( 'The first column in the tophat dropdown widget area. ', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '<hr class="partial-bottom" /></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Tophat Dropdown Column 2', 'skeleton' ),
		'id' => 'dropdown-widget-2',
		'description' => __( 'The second column in the tophat dropdown widget area. ', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '<hr class="partial-bottom" /></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Tophat Dropdown Column 3', 'skeleton' ),
		'id' => 'dropdown-widget-3',
		'description' => __( 'The third column in the tophat dropdown widget area. ', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '<hr class="partial-bottom" /></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Tophat Dropdown Column 4', 'skeleton' ),
		'id' => 'dropdown-widget-4',
		'description' => __( 'The fourth column in the tophat dropdown widget area. ', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '<hr class="partial-bottom" /></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Default Post/Page Sidebar', 'skeleton' ),
		'id' => 'default-widget-area',
		'description' => __( 'Default widget area for posts/pages. ', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '<hr class="partial-bottom" /></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	

	register_sidebar( array(
		'name' => __( 'Secondary Post/Page Sidebar 2', 'skeleton' ),
		'id' => 'secondary-widget-area',
		'description' => __( 'Secondary widget area for posts/pages. ', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '<hr class="partial-bottom" /></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	/* 
	register_sidebar( array(
		'name' => __( 'Pre-Footer Column 1', 'skeleton' ),
		'id' => 'pre-footer-widget-1',
		'description' => __( 'The first column in the pre-footer widget area.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="footer-widget-title">',
		'after_title' => '</h4>',
	) );	
	register_sidebar( array(
		'name' => __( 'Pre-Footer Column 2', 'skeleton' ),
		'id' => 'pre-footer-widget-2',
		'description' => __( 'The second column in the pre-footer widget area.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="footer-widget-title">',
		'after_title' => '</h4>',
	) );	
	register_sidebar( array(
		'name' => __( 'Pre-Footer Column 3', 'skeleton' ),
		'id' => 'pre-footer-widget-3',
		'description' => __( 'The third column in the pre-footer widget area.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="footer-widget-title">',
		'after_title' => '</h4>',
			) );			
	*/
	
	register_sidebar( array(
		'name' => __( 'Footer Column 1', 'skeleton' ),
		'id' => 'footer-widget-1',
		'description' => __( 'The first column in the footer widget area.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	) );	
	register_sidebar( array(
		'name' => __( 'Footer Column 2', 'skeleton' ),
		'id' => 'footer-widget-2',
		'description' => __( 'The second column in the footer widget area.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	) );	
	register_sidebar( array(
		'name' => __( 'Footer Column 3', 'skeleton' ),
		'id' => 'footer-widget-3',
		'description' => __( 'The third column in the footer widget area.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Column 4', 'skeleton' ),
		'id' => 'footer-widget-4',
		'description' => __( 'The fourth column in the footer widget area.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Column 5', 'skeleton' ),
		'id' => 'footer-widget-5',
		'description' => __( 'The third column in the footer widget area.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Column 6', 'skeleton' ),
		'id' => 'footer-widget-6',
		'description' => __( 'The fourth column in the footer widget area.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Bonus Sidebar: Google News Widget', 'skeleton' ),
		'id' => 'bonus-widget-1',
		'description' => __( 'Add "Google News Just Better" Widget Here.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="footer-widget-title">',
		'after_title' => '</h4>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bonus Sidebar: Popular Post Widget', 'skeleton' ),
		'id' => 'bonus-widget-2',
		'description' => __( 'Add "Jetpack Popular Post Widget/Plugin" Here.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="footer-widget-title">',
		'after_title' => '</h4>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bonus Sidebar: Twitter Feed Widget', 'skeleton' ),
		'id' => 'bonus-widget-3',
		'description' => __( 'Add Text Widget Here > Create Widget in Settings Section of Your Twitter Account > And Paste Generated Embed Here.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="footer-widget-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => __( 'Bonus Sidebar: Ajaxy Live Search', 'skeleton' ),
		'id' => 'bonus-widget-4',
		'description' => __( 'Add "Ajaxy Live Search Widget" Here.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="footer-widget-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => __( 'Bonus Sidebar: Facebook Feed', 'skeleton' ),
		'id' => 'bonus-widget-5',
		'description' => __( 'Add your Facebook Feed here. For more information on using Facebook social plugins, check out their Docs here: https://developers.facebook.com/docs/plugins/page-plugin.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="footer-widget-title">',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array(
		'name' => __( '404 Page Sidebar', 'skeleton' ),
		'id' => '404-widget-area',
		'description' => __( 'Add some widgets to help lost users find their content.', 'skeleton' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	

}
add_action('widgets_init', 'mdnw_register_sidebars'); 




/* ---------------------------------------------------------*/
/* COMMENTS */ 
/* ---------------------------------------------------------*/
if ( ! function_exists( 'twentyeleven_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyeleven_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'skeleton' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'skeleton' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s on %2$s <span class="says">said:</span>', 'skeleton' ),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s at %2$s', 'skeleton' ), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'skeleton' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'skeleton' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'skeleton' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for twentyeleven_comment()




/* ---------------------------------------------------------*/
/* NAVIGATION WALKER - DESKTOP (allows for description) */ 
/* ---------------------------------------------------------*/
class description_walker extends Walker_Nav_Menu
{
	  //function start_el(&$output, $item, $depth, $args){
	  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li title="'. $item->title . '"' . $value . $class_names .'>';
           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $prepend = '<strong>';
           $append = '</strong>';
           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

           if($depth != 0)
           {
           		$description = $append = $prepend = "";
           } 

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}




/* ---------------------------------------------------------*/
/* MOBILE WALKER - MOBILE */ 
/* ---------------------------------------------------------*/
class mobile_walker extends Walker_Nav_Menu
{
      //function start_el(&$output, $item, $depth, $args){
      function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';
           
           $classes = empty( $item->classes ) ? array() : (array) $item->classes;
           	
           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li title="'. $item->title . '"' . $value . $class_names .'>';
			
           $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
           
           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
                   
           $prepend = '<div class="top sans">';
           $append = '</div>';
           
           $description  = ! empty( $item->title ) ? '<div class="bottom">'.esc_attr( $item->attr_title ).'</div>' : '';	   
               
           if($depth != 0)
           {
                     $description = $append = $prepend = "";
           }           

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

		function start_lvl(&$output, $depth = 0, $args = array() ) {
		    $indent = str_repeat("\t", $depth);    
			
		    $output .= "\n$indent<ul class=\"dl-submenu level-".$depth."\"><li class=\"dl-back\"><a href=\"#\">Back</a></li>";		    
			$output .= "\n";
		}
}



/* ---------------------------------------------------------*/
/* BREADCRUMBS; */ 
/* ---------------------------------------------------------*/

function get_breadcrumb() {
 
	global $post;
 
	$trail = '
 
';
	$page_title = get_the_title($post->ID);
 
	if($post->post_parent) {
		$parent_id = $post->post_parent;
 
		while ($parent_id) {
			$page = get_page($parent_id);
			$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a> » ';
			$parent_id = $page->post_parent;
		}
 
		$breadcrumbs = array_reverse($breadcrumbs);
		foreach($breadcrumbs as $crumb) $trail .= $crumb;
	}
 
	$trail .= $page_title;
	$trail .= '
 
';
 
	return $trail;	
 
}


/* ---------------------------------------------------------*/
/* CUSTOM EXCERPT - A custom excerpt length with: excerpt(20); */ 
/* ---------------------------------------------------------*/
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

    function content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
      } else {
        $content = implode(" ",$content);
      } 
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content); 
      $content = str_replace(']]>', ']]&gt;', $content);
      return $content;
    }




/* ---------------------------------------------------------*/
/* PRE-LOAD ANY PLUGINS FOR THEME ACTIVATION */ 
/* ---------------------------------------------------------*/
require_once( get_template_directory() . '/functions/tgm-plugin-activation/class-tgm-plugin-activation.php' );
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {
    $plugins = array(  

    	/* === REQUIRED AND PREMIUM PLUGINS === */   
        array(
            'name'                  => 'Revolution Slider', // The plugin name
            'slug'                  => 'revslider', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/functions/tgm-plugin-activation/plugins/revslider.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'Visual Composer (Layout Builder)', // The plugin name
            'slug'                  => 'js_composer', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/functions/tgm-plugin-activation/plugins/js_composer.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),        
        array(
            'name'                  => 'JackBox (Lightbox Plugin)', // The plugin name
            'slug'                  => 'wp-jackbox', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/functions/tgm-plugin-activation/plugins/wp-jackbox.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        
        /* === RECOMMENDED PLUGINS === */   
        array(
            'name'                  => 'Advanced Excerpt', // The plugin name
            'slug'                  => 'advanced-excerpt', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/advanced-excerpt.latest-stable.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'Ajaxy Live Search Form', // The plugin name
            'slug'                  => 'ajaxy-search-form', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/ajaxy-search-form.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'Custom Sidebars', // The plugin name
            'slug'                  => 'custom-sidebars', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/custom-sidebars.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'Contact Form 7', // The plugin name
            'slug'                  => 'contact-form-7', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/contact-form-7.latest-stable.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'Dynamic To Top', // The plugin name
            'slug'                  => 'dynamic-to-top', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/functions/tgm-plugin-activation/plugins/dynamic-to-top.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        /* array(
            'name'                  => 'Easy Theme And Plugin Upgrades', // The plugin name
            'slug'                  => 'easy-theme-and-plugin-upgrades', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/easy-theme-and-plugin-upgrades.latest-stable.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ), */
        array(
            'name'                  => 'Google News Widget', // The plugin name
            'slug'                  => 'google-news-widget', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/google-news-widget.latest-stable.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'Image Widget', // The plugin name
            'slug'                  => 'image-widget', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/image-widget.latest-stable.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
		array(
            'name'                  => 'Popular Post Tab Widget For Jetpack', // The plugin name
            'slug'                  => 'popular-posts-tab-widget-for-jetpack', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/popular-posts-tab-widget-for-jetpack.latest-stable.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
		array(
            'name'                  => 'Recent Post Widget Extended', // The plugin name
            'slug'                  => 'recent-posts-widget-extended', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/recent-posts-widget-extended.latest-stable.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
		array(
            'name'                  => 'Shortcodes Ultimate', // The plugin name
            'slug'                  => 'shortcodes-ultimate', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/shortcodes-ultimate.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'SVG Vector Font Icons', // The plugin name
            'slug'                  => 'svg-vector-icon-plugin', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/svg-vector-icon-plugin.latest-stable.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'WP Paginate', // The plugin name
            'slug'                  => 'wp-paginate', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/wp-paginate.latest-stable.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'Zilla Shortcodes', // The plugin name
            'slug'                  => 'zilla-shortcodes', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/functions/tgm-plugin-activation/plugins/zilla-shortcodes.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),

        array(
            'name'                  => 'WooCommerce', // The plugin name
            'slug'                  => 'woocommerce', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/woocommerce.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'The Events Calander', // The plugin name
            'slug'                  => 'the-events-calendar', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/the-events-calendar.latest-stable.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        
        array(
            'name'                  => 'WordPress Importer', // The plugin name
            'slug'                  => 'wordpress-importer', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/wordpress-importer.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'Widget Importer & Exporter', // The plugin name
            'slug'                  => 'widget-importer-exporter', // The plugin slug (typically the folder name)
            'source'                => 'https://downloads.wordpress.org/plugin/widget-importer-exporter.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),

        /* ======= */
        /*array(
            'name'                  => 'OptionTree', // The plugin name
            'slug'                  => 'option-tree', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/functions/tgm-plugin-activation/plugins/option-tree.zip', // The plugin source
            'required'              => true, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
		array(
            'name'                  => 'JetPack', // The plugin name
            'slug'                  => 'jetpack', // The plugin slug (typically the folder name)
            'source'                => 'http://downloads.wordpress.org/plugin/jetpack.latest-stable.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),*/
    );
    $theme_text_domain = 'skeleton';
    $config = array(
        'domain'            => $theme_text_domain,           // Text domain - likely want to be the same as your theme.
        'default_path'      => '',                           // Default absolute path to pre-packaged plugins
        'parent_menu_slug'  => 'themes.php',         // Default parent menu slug
        'parent_url_slug'   => 'themes.php',         // Default parent URL slug
        'menu'              => 'install-required-plugins',   // Menu slug
        'has_notices'       => true,                         // Show admin notices or not
        'is_automatic'      => false,            // Automatically activate plugins after installation or not
        'message'           => '',               // Message to output right before the plugins table
        'strings'           => array(
            'page_title'                                => __( 'Install Required Plugins', $theme_text_domain ),
            'menu_title'                                => __( 'Install Plugins', $theme_text_domain ),
            'installing'                                => __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
            'oops'                                      => __( 'Something went wrong with the plugin API.', $theme_text_domain ),
            'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme REQUIRES the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'            => _n_noop( 'This theme recommend the following plugin: %1$s.', 'This theme RECOMMENDS the following plugins: %1$s. </br></br>Note: The recommended plugins are used in the demo and offered as helpful tools. Take what you want, and leave the rest! See your Full Start Guide for more documentation on this.' ), // %1$s = plugin name(s)
            'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
            'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
            'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
            'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
            'return'                                    => __( 'Return to Required Plugins Installer', $theme_text_domain ),
            'plugin_activated'                          => __( 'Plugin activated successfully.', $theme_text_domain ),
            'complete'                                  => __( 'All plugins installed and activated successfully. %s', $theme_text_domain ) // %1$s = dashboard link
        )
    );
	tgmpa( $plugins, $config ); 
}


?>