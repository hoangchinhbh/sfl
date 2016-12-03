<?php
/**
 * Initialize the options before anything else.
 */
add_action( 'admin_init', 'custom_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array(      
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'basics',
        'title'       => 'Theme Basics'
      ),
      array(
        'id'          => 'skin-builder',
        'title'       => 'Skin Builder'
      ),    
      array(
        'id'          => 'typography',
        'title'       => 'Typography'
      ),  
      array(
        'id'          => 'tophat',
        'title'       => 'Header Options'
      ),
      array(
        'id'          => 'post',
        'title'       => 'Post Options'
      ),
      
      array(
        'id'          => 'social',
        'title'       => 'Social Options'
      ),
      array(
        'id'          => 'footer',
        'title'       => 'Footer Options'
      ),
      array(
        'id'          => 'custom-css',
        'title'       => 'Custom CSS'
      ),
      array(
        'id'          => 'quick-start',
        'title'       => 'Quick Start Guide'
      ),
      array(
        'id'          => 'overview',
        'title'       => 'Using This Theme'
      ),      
      array(
        'id'          => 'documentation',
        'title'       => 'Support & Plugins'
      )
    ),
    'settings'        => array( 
      
      
      
      
/* ---------------------------------------------------------*/
/* THEME BASICS */ 
/* section: basics */ 
/* ---------------------------------------------------------*/
      array(
        'id'          => 'general_notes',
        'label'       => 'Welcome to the Theme Options Page!',
        'desc'        => 'From this panel, you\'ll be able to select the custom options that will make this theme your own. <br /><strong style="color: #0c77e1">Quick Tip!</strong> Click the information icon next to each item to read about each option.<br/ > <strong style="color: #0c77e1">New User Tip!</strong> This theme won\'t look like the demo until you fill out the theme options and add some content (in fact, it may look broken until you do so). If you want to copy some of the demo\'s content to get you started, we\'ve got ya covered. <strong style="color: #57ac2d">Click the "Quick-Start Guide" to the left</strong>.',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'basics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'logo',
        'label'       => 'Upload Your Logo',
        'desc'        => 'Upload your logo image (JPG, GIF, PNG). If you upload an image that is too large for the space allotted to it by the theme, it will scale down. <br /><br />
Hint: Select the "File URL" option after the image has uploaded, then hit the Add to OptionTree button.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'basics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'favicon',
        'label'       => 'Upload Your Browser Icon',
        'desc'        => 'Upload the 16x16px image (GIF) that you\'d like to show up in the browser address bar.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'basics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'responsive_toggle',
        'label'       => 'Responsive Mode?',
        'desc'        => 'Select Off to turn off responsive mode. Default is On.',
        'std'         => 'On',
        'type'        => 'select',
        'section'     => 'basics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'Yes',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'No',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      



/* ---------------------------------------------------------*/
/* TYPOGRAPHY */ 
/* section: typography */ 
/* ---------------------------------------------------------*/
array(
        'id'          => 'typography_notes',
        'label'       => 'Typography Notes',
        'desc'        => 'This is where you will setup some basic typography options for the theme. There is a lot to consider in regards to typography on the web. 
        We know that this can be overwhelming, so we\'ve provided these options to help - and broken this panel into several sections for ease of use. The basic idea
        is that this is laid out from basic to complex. So the first section is only going to focus on grouped elements in regards to font families. Then grouped elements
        in regards to additional properties (ie. font-weight, line-height, and letter spacing). After that, we are including a section of completely open options for each element across your site. 

<ul><h5>Overview:</h5>
<li>Simplified Options - Font Family by Grouped Elements</li>
<li>Advanced Options - Font Properties by Grouped Elements</li>
<li>Beta Full Custom Options - Specific Elements</li>
</ul>
        So, before you dive into any of the font-replacement stuff, we recommend starting with a default font-stack option and color (in Skin Builder) based on the tone you want your website design to have. 
        <br /><br />
        Then read the next set of instructions if you want to use Font-Replacement with Google Fonts or Typekit. 
        For more information on the Google Font selections that are offered, check out their <a href="https://www.google.com/fonts">official library</a>. 
        ',
        'type'        => 'textblock-titled',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
  
  ////////////////////////
      
      array(
        'id'          => 'section_font_families',
        'label'       => 'Global Font Families',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'desc'        => 'This section is entirely OPTIONAL! Customizing this section will change these options globally and override all theme defaults for font families. The options provided in this section cover font family replacement across the site. We\'ve included this separate to make thing easier for the vast majority of our users. Changing font families will allow you to maintain the font sizes across the site while customizing this.',
        'std'         => '',
        'class'       => 'heading'
      ),
      array(
        'id'          => 'default_fontstack',
        'label'       => 'Basic CSS Typeface',
          'desc'        => 'Select the default font stack that you\'d like used on the site. You should still pick one even if you intend to use one of the Font Replacement options below.',
        'std'         => 'font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;',
        'type'        => 'select',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;',
            'label'       => 'Arial',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif',
            'label'       => 'Avant Garde',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;',
            'label'       => 'Calibri',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: Futura, "Trebuchet MS", Arial, sans-serif;',
            'label'       => 'Futura',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: Optima, Segoe, "Segoe UI", Candara, Calibri, Arial, sans-serif;',
            'label'       => 'Optima',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;',
            'label'       => 'Segoe UI',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: Tahoma, Verdana, Segoe, sans-serif;',
            'label'       => 'Tahoma',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;',
            'label'       => 'Trebuchet',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: Verdana, Geneva, sans-serif;',
            'label'       => 'Verdana',
            'src'         => ''
          ),          
          array(
            'value'       => 'font-family: "Big Caslon", "Book Antiqua", "Palatino Linotype", Georgia, serif;',
            'label'       => 'Big Caslon',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: "Bodoni MT", Didot, "Didot LT STD", "Hoefler Text", Garamond, "Times New Roman", serif;',
            'label'       => 'Bodoni MT',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: Cambria, Georgia, serif;',
            'label'       => 'Cambria',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: "font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;',
            'label'       => 'Garamond',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: Georgia, Times, "Times New Roman", serif;',
            'label'       => 'Georgia',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: "Goudy Old Style", Garamond, "Big Caslon", "Times New Roman", serif;',
            'label'       => 'Goudy Old Style',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: Rockwell, "Courier Bold", Courier, Georgia, Times, "Times New Roman", serif;',
            'label'       => 'Rockwell',
            'src'         => ''
          ),
          array(
            'value'       => 'font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;',
            'label'       => 'Times New Roman',
            'src'         => ''
          )         
        ),
      ),
      
      array( // Headline Font
        'id'          => 'menu_font',
        'label'       => 'Menu Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      array( // Headline Font
        'id'          => 'sub_menu_font',
        'label'       => 'Sub Menu Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),

      array( // Headline Font
        'id'          => 'headline_font',
        'label'       => 'Headline Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      
      array( // Body Font
        'id'          => 'body_font',
        'label'       => 'Body Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default body font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),

      array(
    'id' => 'alt_fontreplace_toggle',
    'label' => 'Use Font Replacement Code >>',     
    'desc' => 'Select "On/Yes" to use this option to the right.',
    'std'         => 'off',
    'type'        => 'on_off',
    'section'     => 'typography',
    ),
    array(
        'id'          => 'alt_fontreplace',
        'label'       => 'Additional Fonts: Enter a Font Replacement Embed Code',
          'desc'        => '<strong>Optional!</strong> You may enter another service\'s embed code below. The most popular service is Typekit, so in case you wish to use that, here are the instructions:
        
        <h4><a target="_blank" href="http://typekit.com">TypeKit.com</a></h4>
        Typekit.com opens up a wide range of possibilities for font replacement, but it does require some extra steps! In short, you must to select your custom fonts from <a href="http://typekit.com">Typekit.com</a> (which requires a free account if you don\'t already have one), then add our theme\'s "selectors" to the "Kit Editor". You can copy/paste the following snippets of text into your "Kit Editor" at Typekit.com to expedite the process: <br /><br />
        
        <strong>Basic Text Elements:</strong> <span style="font-style: italic;">body, p, span, .button</span><br />
        
        <strong>Headline Elements:</strong> <span style="font-style: italic;">h1, h1 a, h2, h2 a, h3, h3 a, h4, h4 a, h5, h5 a, .tp-caption, .page-title, .entry-title</span>
        
        <br /><br />When you\'re done, just copy and paste the "Embed Code" that Typekit will give you into the field directly below this. Keep in mind you can pick ANY of the fonts that they offer over there... so feel free to get creative!
        ',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'typography',
        'rows'        => '2',
        'condition'   => 'alt_fontreplace_toggle:is(on)'
       ),

      ////////////////////////
      
      array(
        'id'          => 'section_font_properties',
        'label'       => 'Optional - Global Font Properties',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'desc'        => 'This section is entirely OPTIONAL! Customizing this section will change these options globally and override all theme defaults for font properties. The options provided in this section cover font property replacement across the site. We\'ve included this separate to make thing easier for the vast majority of our users. Changing font proerties will allow you to maintain the font families across the site while customizing this.',
        'std'         => '',
        'class'       => 'heading'
      ),

      array( // Headline Font
        'id'          => 'menu_font_properties',
        'label'       => 'Menu Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      array( // Headline Font
        'id'          => 'sub_menu_font_properties',
        'label'       => 'Sub Menu Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),

      array( // Headline Font
        'id'          => 'headline_font_properties',
        'label'       => 'Headline Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      
      array( // Body Font
        'id'          => 'body_font_properties',
        'label'       => 'Optional Body Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default body font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),

      ////////////////////////
      
      array(
        'id'          => 'section_font_properties_element',
        'label'       => 'Optional - Beta - Complete Controls By Element',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'desc'        => 'This section is entirely OPTIONAL! Customizing this section will change these options globally and override all theme defaults for font properties. The options provided in this section cover font property replacement across the site. We\'ve included this separate to make thing easier for the vast majority of our users. Changing font proerties will allow you to maintain the font families across the site while customizing this.',
        'std'         => '',
        'class'       => 'heading'
      ),
      array( // Headline Font
        'id'          => 'c_hone_font',
        'label'       => 'H1 Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      array( // Headline Font
        'id'          => 'c_htwo_font',
        'label'       => 'H2 Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      array( // Headline Font
        'id'          => 'c_hthree_font',
        'label'       => 'H3 Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      array( // Headline Font
        'id'          => 'c_hfour_font',
        'label'       => 'H4 Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      array( // Headline Font
        'id'          => 'c_hfive_font',
        'label'       => 'H5 Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      array( // Headline Font
        'id'          => 'c_hsix_font',
        'label'       => 'H6 Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      array( // Headline Font
        'id'          => 'c_breadcrumbs_font',
        'label'       => 'Breadcrumbs Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      array( // Headline Font
        'id'          => 'c_page_captions_font',
        'label'       => 'Page Captions',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      array( // Headline Font
        'id'          => 'c_action_buttons_font',
        'label'       => 'Action Buttons',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),
      array( // Headline Font
        'id'          => 'c_body_font',
        'label'       => 'Body Font',
        'desc'        => 'Theme Default: "Source Sans Pro". This will replace the default headline font with one from the Google Fonts library. There are a LOT of fonts here, so it can be helpful to <a href="http://google.com/webfonts">view the full Google Fonts website</a> to browse fonts in a quicker visual format before trying to use this dropdown menu.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'class'       => ''
      ),


       
       array( // Custom CSS Code INVISIBLE TO USERS
        'id'          => 'mdnw-dynamic-css',
        'label'       => 'Advanced Users Only: Dynamic CSS Code',
        'desc'        => 'Add dynamic CSS code with values from the theme options. <strong>Only edit if you know what to do!</strong>',
        'type'        => 'css',
        'section'     => 'typography',
        'rows'      => 12,
        'std'     => '
        .sf-menu li a, .sf-menu li a strong { {{menu_font}} !important }
        .sf-menu li a { {{sub_menu_font}} !important }
        body, p, span { {{body_font}} !important }
        h1, h1 *, h2, h2 *, h3, h3 *, h4, h4 *, h5, h5 *, h6, h6 * { {{headline_font}} !important}

        .sf-menu li a, .sf-menu li a strong { {{menu_font_properties}} !important }
        .sf-menu li .sub-menu a { {{sub_menu_font_properties}} !important }
        body, p, span, .sf-menu li a { {{body_font_properties}} !important }
        h1, h1 *, h2, h2 *, h3, h3 *, h4, h4 *, h5, h5 *, h6, h6 * { {{headline_font_properties}} !important}

        h1, h1 *{ {{c_hone_font}} !important}
        h2, h2 *{ {{c_htwo_font}} !important}
        h3, h3 *{ {{c_hthree_font}} !important}
        h4, h4 *{ {{c_hfour_font}} !important}
        h5, h5 *{ {{c_hfive_font}} !important}
        h6, h6 *{ {{c_hsix_font}} !important}
        .breadcrumbs, .breadcrumbs *{ {{c_breadcrumbs_font}} !important}
        .page-caption, .page-caption *{ {{c_page_captions_font}} !important}
        .action_button, .action_button *{ {{c_action_buttons_font}} !important}
        body, p, span{ {{c_body_font}} !important}
        '
      ),
      
      

/* ---------------------------------------------------------*/
/* SKIN BUILDER */ 
/* section: skin-builder */
/* ---------------------------------------------------------*/
      array(
        'id'          => 'color_notes',
        'label'       => 'Highlight Colors',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'desc'        => 'Begin the skin-builder process by selecting a couple basic colors that will be used as the link and accent colors across the theme. This will override any defaults setup by the base theme stylesheets.<br />',
        'std'         => '',
        'class'       => 'heading'
      ),
      
      array(
        'id'          => 'link_color',
        'label'       => 'Primary Color',
        'desc'        => 'Pick the color that you\'d like all links to appear as by default. This color will also be used as the basic link color, and across the theme as an accent (borders, some highlight text, etc.)',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'secondary_color',
        'label'       => 'Secondary Color',
        'desc'        => 'This applies to custom theme modules, custom theme classes, and other secondary colors.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'link_hover_color',
        'label'       => 'Hover Color',
        'desc'        => 'Select the color that you\'d like your links to appear as when hovered over by a mouse.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'link_visited_color',
        'label'       => 'Visited Color',
        'desc'        => 'Select the color that you\'d like links to appear as AFTER a user has visited them. Likely a slight variation of the default link color.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      
      
      ////////////////////////
      
      
      array(
        'id'          => 'skin_notes',
        'label'       => 'Background Stripe Colors',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'desc'        => 'Next, select the colors you\'d like to use for the theme\'s main background "stripes". Note that you can use an image or a flat color for each stripe section. <br />
        Background images are styled to be centered at the top and repeated along the X and Y axis, so images can either be a small pattern (like one from <a href="http://subtlepatterns.com">SubtlePatterns.com</a>) or a large graphic. Note that if you choose a large image, it will not scale down when viewed on a mobile device unless you also include manual media queries or a JQuery script to force this behavior. <br /><br />',
        'std'         => '',
        'class'       => 'heading'
      ),
      array(
        'id'          => 'no_skin_notes',
        'label'       => 'This is only to fix nth class',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'desc'        => 'This should not be visible',
        'std'         => '',
        'class'       => 'no-heading'
      ),
      array(
        'id'          => 'flagdropdown_background_image',
        'label'       => 'Flag Dropdown Image',
        'desc'        => 'The flag dropdown space is the section at the top of the theme (above the tophat) that is shown when the flag (or your uploaded image) is clicked.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'flagdropdown_background_color',
        'label'       => 'Flag Dropdown Color',
        'desc'        => 'The flag dropdown space is the section at the top of the theme (above the tophat) that is shown when the flag (or your uploaded image) is clicked.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
          ),

      array(
        'id'          => 'tophat_background_image',
        'label'       => 'Top Hat Image',
        'desc'        => 'The top hat space is usually the dark black bar at the top of the theme that holds a small piece of text and social icons.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tophat_background_color',
        'label'       => 'Top Hat Color',
        'desc'        => 'The top hat space is usually the dark black bar at the top of the theme that holds a small piece of text and social icons.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
          ),
      
      array(
        'id'          => 'header_background_image',
        'label'       => 'Header Image',
        'desc'        => 'Depending on the theme, the header space usually includes the logo, navigation, etc.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'header_background_color',
        'label'       => 'Header Color',
        'desc'        => 'Depending on the theme, the header space usually includes the logo, navigation, etc.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'id'          => 'navigation_background_image',
        'label'       => 'Navigation Image',
        'desc'        => 'Depending on the theme, the header space usually includes the logo, navigation, etc.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'navigation_background_color',
        'label'       => 'Navigation Color',
        'desc'        => 'Depending on the theme, the header space usually includes the logo, navigation, etc.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      
      array(
        'id'          => 'slider_background_image',
        'label'       => 'Sub Header Image (Caption + Slider Area)',
        'desc'        => 'Depending on the theme, this may be used for the slider area, a page caption, etc.<br /><br />',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'slider_background_color',
        'label'       => 'Sub Header Color (Caption + Slider Area)',
        'desc'        => 'Depending on the theme, this may be used for the slider area, a page caption, etc.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      
      array(
        'id'          => 'default_bg',
        'label'       => 'Body Image',
        'desc'        => 'The body area generally encompasses everything between the header and the footer. ',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'default_bgcolor',
        'label'       => 'Body Color',
        'desc'        => 'The body area generally encompasses everything between the header and the footer.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),           
      
      array(
        'id'          => 'content_bg',
        'label'       => 'Content-Box Image (Optional)',
        'desc'        => 'Optional : The content-box area is the element that holds your main page/post content. Adding a value here will create a contrast between this area and the body area. ',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'content_bgcolor',
        'label'       => 'Content-Box Color (Optional)',
        'desc'        => 'Optional : The content-box area is the element that holds your main page/post content. Adding a value here will create a contrast between this area and the body area. ',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),    
      
      array(
        'id'          => 'footer_background_image',
        'label'       => 'Footer Image',
        'desc'        => 'The footer area usually is the dark area below the main content that holds a series of widgets.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'footer_background_color',
        'label'       => 'Footer Color',
        'desc'        => 'The footer area usually is the dark area below the main content that holds a series of widgets.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'subfooter_background_image',
        'label'       => 'Sub-Footer Image',
        'desc'        => 'The sub-footer area is below the footer (usually a dark stripe below the main theme area).',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'subfooter_background_color',
        'label'       => 'Sub-Footer Color',
        'desc'        => 'The sub-footer area is below the footer (usually a dark stripe below the main theme area).',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      
      
      ///////////////////////
      
      
      array(
        'id'          => 'fontcolor_notes',
        'label'       => 'Font Colors',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'desc'        => 'Optional! If you wish to override the theme defaults, select the colors you\'d like to use for the theme\'s font colors. Each main "stripe" section has it\'s own set of "Headline" and "Body" font. Keep in mind that advanced users can still make custom CSS adjustments if you want even more control over individual elements.',
        'std'         => '',
        'class'       => 'heading'
      ),
      array(
        'id'          => 'no_fontcolor_notes',
        'label'       => 'This is only to fix nth class',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'desc'        => 'This should not be visible. Use no-heading class, and add a unique id',
        'std'         => '',
        'class'       => 'no-heading'
      ),
      
      array(
        'id'          => 'tophatdropdown_headline_color',
        'label'       => 'Top Hat Dropdown Headlines',
        'desc'        => 'This will cover any H1, H2, H3, H4, and H5 elements in this section.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tophatdropdown_body_color',
        'label'       => 'Top Hat Dropdown Text Color',
        'desc'        => 'This will cover any other text in this section (except for links and text that is styled by plugins).',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tophat_headline_color',
        'label'       => 'Top Hat Headlines',
        'desc'        => 'This will cover any H1, H2, H3, H4, and H5 elements in this section.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tophat_body_color',
        'label'       => 'Top Hat Text Color',
        'desc'        => 'This will cover any other text in this section (except for links and text that is styled by plugins).',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
          ),
      array(
        'id'          => 'header_headline_color',
        'label'       => 'Header Headlines',
        'desc'        => 'This will cover any H1, H2, H3, H4, and H5 elements in this section.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'header_body_color',
        'label'       => 'Header Text Color',
        'desc'        => 'This will cover any other text in this section (except for links and text that is styled by plugins).',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),      
      array(
        'id'          => 'caption_headline_color',
        'label'       => 'Sub-Header Headlines',
        'desc'        => 'This will cover any H1, H2, H3, H4, and H5 elements in this section.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'caption_body_color',
        'label'       => 'Sub-Header Text Color',
        'desc'        => 'This will cover any other text in this section (except for links and text that is styled by plugins).',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),      
      array(
        'id'          => 'default_headline_color',
        'label'       => 'Body Headlines',
        'desc'        => 'This will cover any H1, H2, H3, H4, and H5 elements in this section.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'default_body_color',
        'label'       => 'Body Text Color',
        'desc'        => 'This will cover any other text in this section (except for links and text that is styled by plugins).',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'footer_headline_color',
        'label'       => 'Footer Headlines',
        'desc'        => 'This will cover any H1, H2, H3, H4, and H5 elements in this section.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'footer_body_color',
        'label'       => 'Footer Text Color',
        'desc'        => 'This will cover any other text in this section (except for links and text that is styled by plugins).',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'subfooter_headline_color',
        'label'       => 'Sub-Footer Headlines',
        'desc'        => 'This will cover any H1, H2, H3, H4, and H5 elements in this section.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'subfooter_body_color',
        'label'       => 'Sub-Footer Text Color',
        'desc'        => 'This will cover any other text in this section (except for links and text that is styled by plugins).',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'skin-builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      
      
    array(
    'id'          => 'vc-color_notes',
    'label'       => __('More Colors (Beta - Optional)', 'mythology'),
    'desc'        => __('We\'ve tried to make this as simple as possible. There are still going to be users out there that want some additional control, so this section will include some additional options.', 'mythology'),
    'type'        => 'textblock-titled',
    'section'     => 'skin-builder',
    ),
   	array(
    'id'          => 'vc_more_notes_hidden',
    'label'       => '',
    'desc'        => '',
    'type'        => 'textblock-titled',
    'section'     => 'skin-builder'
    ),

    	array(
	        'id'          => 'vc_tab_bg_color',
	        'label'       => __('VC Tab - BG Color', 'mythology'),
	        'desc'        => __('.', 'mythology'),
	        'type'        => 'colorpicker',
	        'section'     => 'skin-builder',
	    ),
	    array(
	        'id'          => 'vc_tab_font_color',
	        'label'       => __('VC Tab - Font Color', 'mythology'),
	        'desc'        => __('.', 'mythology'),
	        'type'        => 'colorpicker',
	        'section'     => 'skin-builder',
	    ),
    	array(
	        'id'          => 'vc_tab_bg_hover_color',
	        'label'       => __('VC Tab:Hover - BG Color', 'mythology'),
	        'desc'        => __('.', 'mythology'),
	        'type'        => 'colorpicker',
	        'section'     => 'skin-builder',
	    ),
	    array(
	        'id'          => 'vc_tab_font_hover_color',
	        'label'       => __('VC Tab:Hover - Font Color', 'mythology'),
	        'desc'        => __('.', 'mythology'),
	        'type'        => 'colorpicker',
	        'section'     => 'skin-builder',
	    ),
	    array(
	        'id'          => 'vc_tab_bg_active_color',
	        'label'       => __('VC Tab:Active - BG Color', 'mythology'),
	        'desc'        => __('.', 'mythology'),
	        'type'        => 'colorpicker',
	        'section'     => 'skin-builder',
	    ),
	    array(
	        'id'          => 'vc_tab_font_active_color',
	        'label'       => __('VC Tab:Active - Font Color', 'mythology'),
	        'desc'        => __('.', 'mythology'),
	        'type'        => 'colorpicker',
	        'section'     => 'skin-builder',
	    ),
	    array(
	        'id'          => 'vc_tab_panel_bg_color',
	        'label'       => __('VC Tab Panel - BG Color', 'mythology'),
	        'desc'        => __('.', 'mythology'),
	        'type'        => 'colorpicker',
	        'section'     => 'skin-builder',
	    ),
	    array(
	        'id'          => 'vc_tab_panel_border_color',
	        'label'       => __('VC Tab Panel - Highlight Border Color', 'mythology'),
	        'desc'        => __('.', 'mythology'),
	        'type'        => 'colorpicker',
	        'section'     => 'skin-builder',
	    ),
      
      
      
      
      
      
/* ---------------------------------------------------------*/
/* TOPHAT & HEADER OPTIONS */ 
/* section: tophat */ 
/* ---------------------------------------------------------*/
array(
        'id'          => 'tophat_notes',
        'label'       => 'Header Options',
        'desc'        => 'This is where you can set some basic options for the header section. The Top Hat is an optional page section that shows up at the top of your header. It usually contains some text and a set of social icons (set this up in the Social Icons tab).',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'tophat',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),   

    array(
        'id'          => 'top_hat',
        'label'       => 'Show Top Hat?',
        'desc'        => 'The Top Hat is the black row at the top of the site that displays a search bar and social-media links (setup later in this panel).',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'tophat',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'Yes',
            'label'       => 'Yes',
            'src'         => ''
          ),
          array(
            'value'       => 'No',
            'label'       => 'No',
            'src'         => ''
          )
        ),
      ),
     array(
        'id'          => 'top_hat_blurb',
        'label'       => 'Top Hat Left-Side Text',
        'desc'        => 'Enter some text that you\'d like used for the top-hat\'s left-side blurb. This could be your motto, a telephone number, or anything else.',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'tophat',
        'rows'        => '2',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
          ),  
      array(
        'id'          => 'fp_banner',
        'label'       => 'Upload Your Promotional Banner',
        'desc'        => 'Upload your banner image (JPG, GIF, PNG - it should approximately be 92px by 133px - the PSD is included in the theme download kit). <strong>Leave this empty if you don\'t want the banner</strong>.<br /><br />',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'tophat',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'id'          => 'promotional_banner_functionality',
        'label'       => 'Promotional Banner Functionality',
        'desc'        => 'Toggle whether you would like to use the Promotional Banner as the Tophat Dropdown Trigger (default), as a Custom Link (reveals a text/html option where you can add your link), or as a simple promotional image with No Action (display the image but do nothing).',
        'std'         => 'trigger',
        'type'        => 'select',
        'section'     => 'tophat',
        'choices'     => array( 
                array(
                  'value'       => 'trigger',
                  'label'       => 'Tophat Dropdown Trigger',
                ),
                array(
                  'value'       => 'link',
                  'label'       => 'Custom Link',
                ),
                array(
                  'value'       => 'off',
                  'label'       => 'No Action',
                ),
              ),
      ),
      array(
        'id'          => 'promotional_custom_link',
        'label'       => 'Promotional Banner Custom Link',
        'desc'        => 'Enter the url for your custom link here (ie: http://campus.themeisland.net/shop/).',
        'type'        => 'text',
        'section'     => 'tophat',
        'rows'        => '1',
        'condition'   => 'promotional_banner_functionality:is(link)'
      ),
      array(
        'id'          => 'promotional_custom_link_target',
        'label'       => 'Open Promotional Banner Custom Link in New Window?',
        'desc'        => 'Select "No" to open the promotional banner custom link in the same window.',
        'std'         => 'off',
        'section'     => 'tophat',
        'type'        => 'on_off',
        'condition'   => 'promotional_banner_functionality:is(link)'
      ),

    array(
        'id'          => 'tophat_columns_count',
        'label'       => 'How Many Columns In Dropdown Tophat Section?',
        'desc'        => 'The Top Hat is the black row at the top of the site that displays a search bar and social-media links (setup later in this panel).',
        'std'         => 'one-third column',
        'type'        => 'select',
        'section'     => 'tophat',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'sixteen columns',
            'label'       => '1 Column',
            'src'         => ''
          ),
          array(
            'value'       => 'eight columns',
            'label'       => '2 Columns',
            'src'         => ''
          ),
          array(
            'value'       => 'one-third column',
            'label'       => '3 Columns',
            'src'         => ''
          ),
          array(
            'value'       => 'four columns',
            'label'       => '4 Columns',
            'src'         => ''
          )
        ),
      ),

      array(
        'id'          => 'header_layout',
        'label'       => 'Header Layout',
        'desc'        => 'Our themes usually come with a couple different header layouts that offer you some quick ways to re-align the main elements. Select one of them :)',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'tophat',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'left',
            'label'       => 'Left Alignment',
            'src'         => ''
          ),
          array(
            'value'       => 'center',
            'label'       => 'Centered Alignment',
            'src'         => ''
          ),
          array(
            'value'       => 'right',
            'label'       => 'Right Alignment',
            'src'         => ''
          ),
        ),
  ), 
      /*
  array(
        'id'          => 'header_sticky',
        'label'       => 'Sticky Header',
        'desc'        => 'Do you want the header to stick to the top of the browser when users scroll down the page?',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'tophat',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'fixed',
            'label'       => 'Fixed Position (sticky)',
            'src'         => ''
          ),
          array(
            'value'       => 'absolute',
            'label'       => 'Absolute Position (scrolls)',
            'src'         => ''
          ),
        ),
  ), 
  */

      
/* ---------------------------------------------------------*/
/* POST OPTIONS */ 
/* section: post */ 
/* ---------------------------------------------------------*/
    array(
    'id'          => 'post_notes',
    'label'       => 'Single: Post Options',
    'desc'        => 'This section will allow you to set default post-options for the theme\'s single post template.',
    'type'        => 'textblock-titled',
    'section'     => 'post'
    ),
      array(
      'id'          => 'show_title_post',
      'label'       => 'Show the Title?',
      'desc'        => 'Select "No" to remove the post title.',
      'std'         => 'on',
      'type'        => 'on_off',
      'section'     => 'post',
      ),
      array(
      'id'          => 'show_title_hr_post',
      'label'       => 'Show the Title HR?',
      'desc'        => 'Select "No" to remove the post title HR.',
      'std'         => 'on',
      'type'        => 'on_off',
      'section'     => 'post',
      ),
      array(
      'id'          => 'show_featured_post',
      'label'       => 'Show the Featured Image?',
      'desc'        => 'Select "Yes" to auto-insert a cropped featured image on the individual post pages (not the blog templates).',
      'std'         => 'on',
      'type'        => 'on_off',
      'section'     => 'post',
      ),

      array(
      'id'          => 'show_post_meta_post',
      'label'       => '**Show the Post Meta Row?',
      'desc'        => 'Select "No" to remove the entire post footer (which may include some of these other options).',
      'std'         => 'on',
      'type'        => 'on_off',
      'section'     => 'post',
      ),
          array(
          'id'          => 'show_format_post',
          'label'       => 'Show the Post Format Icon?',
          'desc'        => 'Select "No" to remove the date & author line.',
          'std'         => 'on',
          'type'        => 'on_off',
          'section'     => 'post',
          'condition'   => 'show_post_meta_post:is(on)'
          ),
          array(
          'id'          => 'show_author_post',
          'label'       => 'Show the Author?',
          'desc'        => 'Select "No" to remove the date & author line.',
          'std'         => 'on',
          'type'        => 'on_off',
          'section'     => 'post',
          'condition'   => 'show_post_meta_post:is(on)'
          ),
          array(
          'id'          => 'show_date_post',
          'label'       => 'Show the Date?',
          'desc'        => 'Select "No" to remove the date & author line.',
          'std'         => 'on',
          'type'        => 'on_off',
          'section'     => 'post',
          'condition'   => 'show_post_meta_post:is(on)'
          ),
          array(
          'id'          => 'show_categories_post',
          'label'       => 'Show the Categories?',
          'desc'        => 'Select "No" to remove the category links.',
          'std'         => 'on',
          'type'        => 'on_off',
          'section'     => 'post',
          'condition'   => 'show_post_meta_post:is(on)'
          ),
          array(
          'id'          => 'show_comments_count_post',
          'label'       => 'Show the Comments Count?',
          'desc'        => 'Select "No" to remove the comments count.',
          'std'         => 'on',
          'type'        => 'on_off',
          'section'     => 'post',
          'condition'   => 'show_post_meta_post:is(on)'
          ),
      array(
      'id'          => 'show_sub_meta_hr_post',
      'label'       => 'Show the Sub Meta HR?',
      'desc'        => 'Select "No" to remove the sub-meta-hr.',
      'std'         => 'on',
      'type'        => 'on_off',
      'section'     => 'post',
      'condition'   => ''
      ),
      array(
      'id'          => 'show_footer_post',
      'label'       => '**Show the Post Footer?',
      'desc'        => 'Select "No" to remove the post footer.',
      'std'         => 'on',
      'type'        => 'on_off',
      'section'     => 'post',
      'condition'   => ''
      ),
          array(
          'id'          => 'show_author_box_post',
          'label'       => 'Show the Author Box?',
          'desc'        => 'Select "No" to remove the author box at the bottom of the post.',
          'std'         => 'on',
          'type'        => 'on_off',
          'section'     => 'post',
          'condition'   => 'show_footer_post:is(on)'
          ),
          array(
          'id'          => 'show_comments_post',
          'label'       => 'Show the Comments?',
          'desc'        => 'Select "No" to remove the comments at the bottom of the post. If you would like to manage this for each individual post, use the native WP Quick Edit option in All Posts or the discussion section of the post.',
          'std'         => 'on',
          'type'        => 'on_off',
          'section'     => 'post',
          'condition'   => 'show_footer_post:is(on)'
          ),
          array(
          'id'          => 'show_tags_post',
          'label'       => 'Show the Tags?',
          'desc'        => 'Select "No" to remove the tags at the bottom of the post.',
          'std'         => 'off',
          'type'        => 'on_off',
          'section'     => 'post',
          'condition'   => 'show_footer_post:is(on)'
          ),
          /* array(
          'id'          => 'show_cross_links_post',
          'label'       => 'Show Cross-Post Navigation?',
          'desc'        => 'Select "No" to remove the navigation links in the single-post template that allow users to move forward and backward one post.',
          'std'         => 'on',
          'type'        => 'on_off',
          'section'     => 'post',
          'condition'   => ''
          ), */
      /* array(
      'id'          => 'show_tags',
      'label'       => 'Show the Tags?',
      'desc'        => 'Select "No" to remove the tag links.',
      'std'         => 'on',
      'type'        => 'on_off',
      'section'     => 'post',
      'condition'   => 'show_post_footer:is(on)'
      ), */
      
    
    /*  Blog: Post Options  */
    array(
    'id'          => 'post_notes_blog_post',
    'label'       => 'Blog: Post Options',
    'desc'        => 'This section will allow you to set default post-options for the theme\'s main blog templates.',
    'type'        => 'textblock-titled',
    'section'     => 'post'
    ),
        /* =============== CLEAR */
        array(
        'id'          => 'tophat_clear_blog_post',
        'label'       => 'Top Hat - Clear',
        'desc'        => 'This option is used to clear the nth child formatting.',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'tophat',
        'condition'   => 'top_hat:is(on)'
        ),
        /* =============== /END CLEAR */
      array(
      'id'          => 'show_title_blog_post',
      'label'       => 'Show the Title?',
      'desc'        => 'Select "No" to remove the post title.',
      'std'         => 'on',
      'type'        => 'on_off',
      'section'     => 'post',
      ),
      array(
      'id'          => 'show_title_hr_blog_post',
      'label'       => 'Show the Title HR?',
      'desc'        => 'Select "No" to remove the post title HR.',
      'std'         => 'on',
      'type'        => 'on_off',
      'section'     => 'post',
      ),
      array(
      'id'          => 'show_featured_blog_post',
      'label'       => 'Show the Featured Image?',
      'desc'        => 'Select "Yes" to auto-insert a cropped featured image on the individual post pages (not the blog templates).',
      'std'         => 'on',
      'type'        => 'on_off',
      'section'     => 'post',
      ),

      array(
      'id'          => 'show_post_meta_blog_post',
      'label'       => '**Show the Post Meta Row?',
      'desc'        => 'Select "No" to remove the entire post footer (which may include some of these other options).',
      'std'         => 'on',
      'type'        => 'on_off',
      'section'     => 'post',
      ),
        array(
        'id'          => 'show_format_blog_post',
        'label'       => 'Show the Post Format Icon?',
        'desc'        => 'Select "No" to remove the date & author line.',
        'std'         => 'on',
        'type'        => 'on_off',
        'section'     => 'post',
        'condition'   => 'show_post_meta_blog_post:is(on)'
        ),
        array(
        'id'          => 'show_author_blog_post',
        'label'       => 'Show the Author?',
        'desc'        => 'Select "No" to remove the date & author line.',
        'std'         => 'on',
        'type'        => 'on_off',
        'section'     => 'post',
        'condition'   => 'show_post_meta_blog_post:is(on)'
        ),
        array(
        'id'          => 'show_date_blog_post',
        'label'       => 'Show the Date?',
        'desc'        => 'Select "No" to remove the date & author line.',
        'std'         => 'on',
        'type'        => 'on_off',
        'section'     => 'post',
        'condition'   => 'show_post_meta_blog_post:is(on)'
        ),
        array(
        'id'          => 'show_categories_blog_post',
        'label'       => 'Show the Categories?',
        'desc'        => 'Select "No" to remove the category links.',
        'std'         => 'on',
        'type'        => 'on_off',
        'section'     => 'post',
        'condition'   => 'show_post_meta_blog_post:is(on)'
        ),
        array(
        'id'          => 'show_comments_count_blog_post',
        'label'       => 'Show the Comments Count?',
        'desc'        => 'Select "No" to remove the comments count.',
        'std'         => 'on',
        'type'        => 'on_off',
        'section'     => 'post',
        'condition'   => 'show_post_meta_blog_post:is(on)'
        ),
        array(
          'id'          => 'show_tags_blog_post',
          'label'       => 'Show the Tags?',
          'desc'        => 'Select "No" to remove the tags at the bottom of the post (for the blog page template).',
          'std'         => 'off',
          'type'        => 'on_off',
          'section'     => 'post',
          'condition'   => ''
          ),
        array(
        'id'          => 'show_sub_meta_hr_blog_post',
        'label'       => 'Show the Sub Meta HR?',
        'desc'        => 'Select "No" to remove the sub-meta-hr.',
        'std'         => 'on',
        'type'        => 'on_off',
        'section'     => 'post',
        'condition'   => ''
        ), 
        /* array(
        'id'          => 'show_tags_blog_post',
        'label'       => 'Show the Tags?',
        'desc'        => 'Select "No" to remove the tag links.',
        'std'         => 'on',
        'type'        => 'on_off',
        'section'     => 'post',
        'condition'   => 'show_post_meta_blog_post:is(on)'
        ), */
      
      
      
/* ---------------------------------------------------------*/
/* SOCIAL OPTIONS */ 
/* section: social */ 
/* ---------------------------------------------------------*/
      array(
        'id'          => 'social_notes',
        'label'       => 'Social Option Notes',
        'desc'        => 'The following settings control the icons that show up in the tophat, header, &/or footer of this theme. You can choose to leave all of them blank if you wish, or add your own custom buttons (they don\'t have to be social networks of course!) to create a unique set of clickable buttons in this space.',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      
      array(
        'id'          => 'social_twitter',
        'label'       => 'Twitter Link',
        'desc'        => 'Enter your Twitter URL that you\'d like to use for all theme-specific social links.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_facebook',
        'label'       => 'Facebook Link',
        'desc'        => 'Enter your Facebook URL that you\'d like to use for all theme-specific social links.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_google',
        'label'       => 'Google+ Link',
        'desc'        => 'Enter your Google+ URL that you\'d like to use for all theme-specific social links.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_youtube',
        'label'       => 'YouTube Link',
        'desc'        => 'Insert the full URL you\'d like used for your YouTube link. Leave empty and the icon won\'t show up at all.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_vimeo',
        'label'       => 'Vimeo Link',
        'desc'        => 'Enter your Vimeo URL that you\'d like to use for all theme-specific social links.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_linkedin',
        'label'       => 'Linked-In Link',
        'desc'        => 'Enter your LinkedIn URL that you\'d like to use for all theme-specific social links.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_pinterest',
        'label'       => 'Pinterest Link',
        'desc'        => 'Your Pinterest URL.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_skype',
        'label'       => 'Skype Link',
        'desc'        => 'Your Skype URL',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_custom',
        'label'       => 'Add Your Own Social Icons:',
        'desc'        => 'Add a new item for each custom icon that you want to add. An uploaded image and a link are required. The image should be a PNG, sized to about 32x32, but the theme will likely scale these down if you upload anything bigger. Here\'s a good place to start looking for <a href="http://www.komodomedia.com/blog/2009/06/social-network-icon-pack/">additional icons</a>. Don\'t forget to add "http://" before your URL!',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),  
      array(
        'id'          => 'social_rss',
        'label'       => 'Add your blog\'s RSS link?',
        'desc'        => 'Want to display your blog\'s RSS feed link?',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'Yes',
            'label'       => 'Yes',
            'src'         => ''
          ),
          array(
            'value'       => 'No',
            'label'       => 'No',
            'src'         => ''
          )
        ),
      ),
      
      
      
      
/* ---------------------------------------------------------*/
/* FOOTER OPTIONS */ 
/* section: footer */ 
/* ---------------------------------------------------------*/
  array(
        'id'          => 'footer_notes',
        'label'       => 'Footer Option Notes',
        'desc'        => 'The footer space shows up below the main content area. This section also includes a few extra options such as the post-author-box option.',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),      
    array(
        'id'          => 'show_author_box',
        'label'       => 'Show the Author Box just below Posts?',
        'desc'        => 'Select "No" to remove all Author Boxes globally from posts. Select "Yes" to display the author box at the bottom of blog posts and/or want to control this from individual posts.',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'Yes',
            'label'       => 'Yes',
            'src'         => ''
          ),
          array(
            'value'       => 'No',
            'label'       => 'No',
            'src'         => ''
          )
        ),
      ),
      /*
      array(
        'id'          => 'pre_footer_widgets',
        'label'       => 'Display the Pre-Footer Widget Space?',
        'desc'        => 'Choose whether or not you\'d like the pre-footer widget space to be visible. These 3 widget spaces (sidebars) are controlled from the Appearance &gt; Widgets panel.',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'Yes',
            'label'       => 'Yes',
            'src'         => ''
          ),
          array(
            'value'       => 'No',
            'label'       => 'No',
            'src'         => ''
          )
        ),
      ),
      */     
      array(
        'id'          => 'footer_widgets',
        'label'       => 'Display Footer Widget Space?',
        'desc'        => 'Choose whether or not you\'d like the footer widget space to be visible. These 3 widget spaces (sidebars) are controlled from the Appearance &gt; Widgets panel.',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'Yes',
            'label'       => 'Yes',
            'src'         => ''
          ),
          array(
            'value'       => 'No',
            'label'       => 'No',
            'src'         => ''
          )
        ),
      ),
          array(
        'id'          => 'footer_columns_count',
        'label'       => 'How Many Columns In Footer Section?',
        'desc'        => 'The footer is the row at the bottom of the site that displays the footer widgets.',
        'std'         => 'one-third column',
        'type'        => 'select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'sixteen columns',
            'label'       => '1 Column',
            'src'         => ''
          ),
          array(
            'value'       => 'eight columns',
            'label'       => '2 Columns',
            'src'         => ''
          ),
          array(
            'value'       => 'one-third column',
            'label'       => '3 Columns',
            'src'         => ''
          ),
          array(
            'value'       => 'four columns',
            'label'       => '4 Columns',
            'src'         => ''
          ),
          array(
            'value'       => 'one-fifth column',
            'label'       => __('5 Columns'),
            'src'         => ''
          ),
          array(
            'value'       => 'one-sixth column',
            'label'       => __('6 Columns'),
            'src'         => ''
          )
        ),
      ),


      array(
        'id'          => 'footer_blurb_left',
        'label'       => 'Left-side Footer Blurb',
        'desc'        => 'The text that you\'d like to display at the left side of the bottom footer row. IE: Copyright 2012, Your Company.',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'footer',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'footer_blurb_right',
        'label'       => 'Right-side Footer Blurb',
        'desc'        => 'The text that shows up on the right side of your footer.',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      
      
      
      
/* ---------------------------------------------------------*/
/* CUSTOM CSS */ 
/* section: custom-css */ 
/* ---------------------------------------------------------*/      
      array(
        'id'          => 'customcss',
        'label'       => 'Custom CSS',
        'desc'        => 'You can enter custom style rules into this box if you\'d like. IE: <i>a{color: red !important;}</i><br />
          This is an advanced option! This is not recommended for users not fluent in CSS... but if you do know CSS, anything you add here will override the default styles.',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'custom-css',
        'rows'        => '20',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),      
      
      
      
   
/* ---------------------------------------------------------*/
/* Using this Theme */ 
/* section: overview */ 
/* ---------------------------------------------------------*/              
      array(
        'id'          => 'tophat_notes',
        'label'       => 'Using This Theme',
        'desc'        => 'This section is a comprehensive set of documentation on how to use this theme. If you are an experienced WordPress user you may not need to read any of this, but we do our best to maintain  thorough documentation for anyone who has questions.<br />
        
        <br /><hr /><br />
        <h4>Table of Contents</h4>
        <ol>
        <li>The Front Page</li>
        <li>Adding Menus</li>
        <li>Image Sliders, Tabbed Content, etc.</li>
        <li>Sidebars & Widgets</li>
        <li>The Page Editor Overview</li>
        <li>The Post Editor Overview</li>
        <li>The Skeleton Post-Grid Template</li>
        <li>The Lightbox</li>
        <li>The Layout Builder</li>
        <li>Cloning the Theme Demo</li>
        <li>Beta Features</li>
        </ol>
                
        <br /><hr /><br />
        
        <h3 class="label">The Front Page & an Introduction to Customizing Page Content</h3>
        
        The theme frontpage is selected from the <a href="options-reading.php">Settings > Reading</a> panel. If you set it to "Your Latest Posts", the frontpage content area will display blog posts in a traditional format. <br />
        
        If you would prefer to use the <strong>Static Page</strong> with custom page content (this can also include blog posts), you must first create a page from the <strong>Pages &gt; Add New</strong> panel, then assign the page as the homepage from the <a href="options-reading.php">Settings > Reading</a> panel.<br />
        
        On each page there are two primary means of adding content (which will be discussed at length below). <strong>You will use one or the other</strong>:<br />
        
        <ol>
        <li><strong style="color: #5ead29;">The Basic Content Editor</strong>: This is the default content editor that you will find in every WordPress installation. This creates the classic WordPress "Content Area".</li>
        <li><strong style="color: #5ead29;">The Layout Builder</strong>: This drag & drop replaces the "Basic Content Editor" mentioned above (meaning, if you use this, it will override anything in the basic editor).</li>        
        </ol>
        
        Whichever option you choose to use on each page, <strong>whatever you place inside will constitute the classic WordPress "Content Area"</strong>. <br />
        
        There is one final type of "special" content that you can add to a page - that\'s the <strong style="color: #5ead29;">Skeleton Page Options</strong> panel. This will appear after you hit "Publish" on a page - depending on the page template that you select, it may change. This module (usually located under the Layout Builder) will allow you to add extra content, such as <strong style="color: #5ead29;">Page Captions</strong>, "<strong style="color: #5ead29;">Blurbs</strong>" (the image/text modules found on the theme demo homepage), <strong style="color: #5ead29;">Header Sliders</strong>, and more. <br />
        
        Read the corresponding sections below for details on all of this!
        
        
        <br /><hr /><br />
        
        <h3 class="label">Adding Menus</h3>
      This theme allows you to add a menu in one of two ways:
        <ol>
          <li><strong>Theme Menus:</strong> Add these from the <strong><a target="_blank" href="'.admin_url().'nav-menus.php">Appearances > Menus</a></strong> panel. Keep in mind that you must create a menu, then add it to the <strong style="color: #5ead29;">Menu Location</strong> panel. This usually covers the main menu for the theme and the "Responsive Menu" space (for if you want to craft a unique list of menu items just for mobile users that is different than the desktop menu). In some themes, a sub-menu in a special location like the top-hat, footer, etc. </li>
          <li><strong>Widget Area Menus</strong>:(ie: sidebars, footer widgets, etc.) This isn\'t news to experienced users, but you can add your own menus to any widget space in the theme. In this way, you can even craft unique menus to display on particular pages if you combine the <a target="_blank" href="http://wordpress.org/extend/plugins/advanced-sidebar-menu">Advanced Sidebar Menu</a> plugin with the <a target="_blank" href="http://wordpress.org/extend/plugins/custom-sidebars">Custom Sidebars</a> plugin.</li>
          </ol>
            
        <br /><hr /><br />
        
        <h3 class="label">Image Sliders, Content Tabs, Carousels, etc.</h3>
      This theme allows you to use sliders in one of three ways:
      
        <ol>
          <li><strong>Plugin Based Sliders:</strong> We will often include dedicated slider plugins with our themes (see below for the full list that this theme includes). Using this method is easy: All of these plugins will allow you to build a slider using their custom admin panel, then they will provide you with a shortcode (ie: <code>[rev_slider my_slider]</code>) that you can place in the Theme Options panel, the Page Options panel, or inside any other content space. </li>
          <li><strong>Layout Builder Sliders:</strong> The layout builder panel (found on the page/post editor screen) allows you to drag slider modules into any space you\'d like. Use their easy-to-understand visual builder to create the slider or tabs of your choice and drag them onto the canvas (ideally inside a column).</li>
          <li><strong>Shortcodes:</strong> Similar to the layout builder (in fact, the code that creates these elements is the same), you can create shortcodes for the layout-builder elements that go into the default page editor if you prefer to use that instead of the actual layout-builder.</li>
          </ol><br />
      
      You need not limit yourself to the sliders/tabs/etc. that we provide with our theme either - in most cases, if you find a plugin that is written up to the official WordPress plugin standards, it will work seemlessly with our theme. Naturally, using additional plugins is outside of the scope of this theme and you should contact those plugin authors for assistance if you run into problems.
       
      This theme supports the following premium content add-ons:<br /><hr /><br />
      
      <h4><a target="_blank" href="http://jetpack.me/">Jetpack</a></h4>   

    Jetpack supercharges your self-hosted WordPress site with the awesome cloud power of WordPress.com. In short, Jetpack will allow you to add a variety of new features such as:
    
    <ol>
    <li>The Carousel Extension: This adds a ton of new Image Gallery features (including the Circles, Slideshow, and Mosaic shown in the demo).</li>
    <li>The Jetpack Comments Extension: (animated, socially driven comment system shown in the demo).</li>
    <li>Contact Forms, Sharing Options, and lots more!</li>
    </ol>
    
    <div style="text-align: center;"><a href="http://tinyurl.com/brsbvpq"><img src="http://tinyurl.com/brsbvpq" /></a></div><br />
    
    Adding Jetpack is easy. First install and activate the plugin. Then visit the <strong style="color: #5ead29;">Jetpack</strong> panel in the top left of your dashboard. Connect to WordPress.com using the button in the plugin-header. This requires a free WordPress.com account. Yes, that\'s annoying, but it is the only way to include these awesome features into your site (and they work outside of this theme as well!) <br />Once your account is setup and connected, simply activate the modules of your choosing - we used <strong style="color: #5ead29;">"Carousel", "Jetpack Comments", and "Tiled Galleries"</strong> in the demo.
<br /><hr /><br />
      
      
      <h4><a target="_blank" href="http://www.themepunch.com/codecanyon/revolution_wp/">The Revolution Slider</a></h4>
      
      The Revolution Slider is a powerful slider that allows you to design & create amazing multi-layered slides with a little bit of time. Once installed, the Revolution Slider can be accessed from the left sidebar. <a target="_blank" href="http://www.youtube.com/watch?v=cVleysEPHM4">This video</a> will demonstrate how to setup the Revolution Slider (if you choose to use it).<br /> 
      
      Click the "Revolution Slider" button at the left sidebar of the dashboard - it looks like this:<br />
      
      <img src="http://tinyurl.com/cppl86u" /><br />
      
      Here is the general workflow:
      
      <ol>
      <li>Start by creating a New Slider (<a href="http://tinyurl.com/cusc823">image</a>).</li>
      <li>Add a title, alias, and select "Full Width" with a Grid Width of "1120". Set a reasonable height (ie: <strong>we use 630 for the height in the demo!!!</strong>). (<a href="http://tinyurl.com/co5dede">image</a>). The rest of the options on this page can be ignored.</li>
      <li>Visit the Revolution Slider main page and click the green "Edit Slides" button (<a href="http://tinyurl.com/cyk4ndm">image</a>).</li>
      <li>Add a New Slider by uploading a background image. For a Full Width slider, this should be at least 1920px wide and the height should be what you set in the Slider Creation screen.</li>
      <li>Click "Edit Slide" once the option appears. Begin adding layers (text, images, or video) using  (<a href="http://tinyurl.com/cko9ewg">image</a>).</li>
      <li>Tip: This panel can feel overwhelming at first, we know. Keep it simple, start with a few text layers, and play around for a few minutes until you get the hang of it!</li>
      <li>Advanced users can add elements like transparent PNG images, elegant timeline transitions, and more. Like anything with design, practice makes perfect!</li>
      <li>Check your theme\'s Resources folder for any reference PSD templates that we might have provided (this is conditional upon licensing restrictions - we often can not include the images that we use in the demo as layered files).</li>
      </ol>
        
</br></br><strong>Revolution Slider and Typekit</strong>: If you are already using Font Replacement, you will want to include the ".tp-caption" class in your TypeKit "Kit Settings" to make the headlines match the rest of the site.<br /> For additional assistance and support with the slider, please reference the <a href="http://www.themepunch.com/codecanyon/revolution_wp/">Revolution Slider demo page</a> or the <a href="http://codecanyon.net/item/slider-revolution-responsive-wordpress-plugin/2751380">Revolution Slider product page & forum</a>.
     
            
        
        <br /><hr /><br />
        
        
        <h3 class="label">Sidebars & Widgets</h3>
      This theme allows you to use widgets in a few ways:
      
        <ol>
          <li><strong>Theme Defined Widget Areas:</strong> This theme will automatically define a handful of specific widget areas. This usually includes a default page/post sidebar and a bunch location-dependent widget spaces (such as the footer widget spaces).</li>
          <li><strong>Layout Builder Widget Areas:</strong> These widget spaces are dynamic - you can add your widgets from the <a href="'.admin_url().'widgets.php">Appearances > Widgets</a> panel and then drag the actual widget spaces onto a page or post from the Layout Builder on that page.</li>
      </ol>
      <br />
          
          As always, add your widgets from the <a href="'.admin_url().'widgets.php">Appearances > Widgets</a> panel to any of the widget-spaces provide. You can simply drag a widget (in the center of the screen) to the widget-spaces in the right sidebar of that admin panel. If you want additional widgets, you can add them by adding new plugins to your theme (which we can\'t offer technical support on, so do this at your own peril/pleasure).<br />
        
          In the demo, we use some extra widgets that require you to install additional plugins such as the "Twitter Wings" plugin, the "Quickr Flickr" plugin, or the "JetPack Popular Posts" widget. These are used for demo purposes only, but you can add them quite easily from the <strong>Plugins > Add New</strong> panel and searching for them.<br />
          
          If you need even more widget-spaces or sidebars (ie: you want a unique sidebar on every page of your site), you can do this with the <a target="_blank" href="http://wordpress.org/extend/plugins/custom-sidebars">Custom Sidebars</a> plugin mentioned in the Support & Plugins panel. 
          
        
        <br /><hr /><br />
        
        
        <h3 class="label">The Page Editor Overview</h3>
        The Page & Post Editor is probably going to be the place you visit the most often while building your site & blog. As such, it is worth it to take a few minutes to get comfortable with how our special features are laid out. Click the following thumbnail to view a full-size screenshot of the page-editor with the key tips overlaying it.<br /><br />
        
        <strong style="color: #5ead29;">Note:</strong> Select your page template, then click the <strong style="color: #0C77E1;">Publish</strong> (or "Update") button to load the custom meta-boxes seen below. <br /><br />
        
      <div style="text-align: center;"><a target="_blank" href="https://wpbakery.atlassian.net/wiki/display/VC/Visual+Composer+Pagebuilder+for+WordPress"><img src="http://barandgrill.mdnw.wpengine.com/wp-content/uploads/sites/6/2014/04/howto_modules.jpg" width="90%" /></a></div>
        
      
        <br /><hr /><br />
        
        
        <h3 class="label">The Layout Builder (The Drag & Drop Content Editor for Posts and Pages)</h3>
        You can see a preview of this in the screenshot just above this section. The Layout Builder is a visual drag & drop content builder that essentially replaces the default content editor (<i>meaning, if you use this, it overrides any content in the default text-editor area</i>). <br />A few more notes that might not be obvious include...
        <ol>
          <li><strong>Sidebars: You CAN NOT add or remove "theme sidebars" through the layout builder.</strong> It is only for the content area... if you want to add or remove sidebars, use the Skeleton Layout Options panel on the page editor (which also allows you to flip the sidebar).</li>
          <li><strong>Widgets: You CAN add widget spaces through the layout builder.</strong> To do so, add a widget module to your canvas, select a widget space to use, then add your widgets from the <a href="'.admin_url().'widgets.php">Appearances > Widgets</a> panel.</li>
          <li><strong>Responsive Columns:</strong> This theme includes style-overrides to "stack" the layout-builder modules when viewed on a small device. This is a good thing, as if we didn\'t do that, the columns would mush together and become illegible.</li>
          </ol><br />
          
      
        <br /><hr /><br />
        
          
        <h3 class="label">The Post Editor (and a note on Post Formats)</h3>
        In WP Version 3.5 (the most current version until late May 2013), the Post Editor is generally the same as the Page Editor (see above). The only notable point is that <strong>we highly recommend that you upload a Featured Image (at least 750px wide) for each post</strong>. Some page-templates like the "Skeleton Post Grid" require a featured image. You can use the same features found in the page editor, including the Layout Builder, Shortcodes, a Header-Slider, etc.<br /><br />
        
        When WP 3.6 releases in late May 2013, this theme will fully support the new "Post Formats UI", which allows you to create "image posts, video posts, gallery posts" and more. See the image below for a quick preview, or <a href="http://wordpress.org/news/2013/04/wordpress-3-6-beta-2/">visit this page</a> for a walkthrough on how to upgrade to 3.6 early (only for experienced users!). <br /><br />
        
        <strong>What Post Formats Does this Theme Support?</strong><br />
        This can vary from one page-template to another. In general, the main content loop (ie: the page you see if you view an archive, category, etc.) will support ALL post formats in one way or another. Different themes may offer varying levels of display-customization over those formats (ie: cool ways of making them look different from other formats), but all of them are supported and will display properly.<br />
        
        <strong>The standard blog template</strong> will support ALL post formats as well. Same as above, the display of each format will vary from one theme to another. Some themes will feature simple, spartan designs for each format. Some will feature radical, eye catching designs.<br />
        
        <strong>The "Skeleton Post Grid" will only support Standard, Image, and Video Post formats</strong> (this will likely change in the future as we come up with more interesting ways to visually display the new post-format content).
                
        <div style="text-align: center;"><a target="_blank" href="http://tinyurl.com/d2h7h6y"><img src="http://tinyurl.com/d2h7h6y" width="90%" /></a></div>
                
        
        <br /><hr /><br />
        
        <h3 class="label">The Skeleton Post-Grid Template</h3>
          This template will display a set of blog posts in a grid format. This can be used to create a "Portfolio" page, or even a "Hybrid Blog" page that displays posts on a grid. 
          <br />You can create a "Skeleton Post-Grid" page quite easily:<br />
          <ol>
          <li><strong>Create a new page</strong>.</li>
          <li><strong>Select the "Skeleton Post-Grid" page template</strong> from the Page Attributes module in the sidebar.</li>
          <li><strong>Fill out the "Skeleton Post-Grid Options" module</strong> that will show up on the sidebar of the Page Editor. (see <a target="_blank" href="http://tinyurl.com/cnrxozn">this image</a>). *</li>
          <li>Add a couple categories from the <strong><a target="_blank" href="'.admin_url().'edit-tags.php?taxonomy=category">Posts > Categories</a></strong> panel.</li>
          <li>Add some posts (with Featured Images!) and assign your categories to them.</li>
          <li>Return to your "Skeleton Post-Grid Page" to select the categories from the Skeleton Grid Options module.</li>
          </ol><br />
      There are a number of ways you can customize this page template. Try out some of the optional skins & grid modes. You can also adjust the <strong style="color: #57ac2d">Image Options</strong> in the Theme Options to adjust how the images are scaled.<br />
      
      <strong>IMPORTANT! All posts within the categories that you select for this page should all have <span style="color: #57ac2d">featured images (or videos)</span> associated with them</strong>, otherwise the layout may break! For this reason, we recommend that you have a separate category (and sub-categories) just for posts that you want to show up in this template. We also do not recommend using any post-formats except the Standard Post, Image Post, and Video Post in this template.<br />
      
      <i>* = If the "Skeleton Post-Grid Options" module fails to show up, double check to make sure the box for it is checked in the "Screen Options" panel at the top-right of the page and hit "Publish" or "Update" to refresh the page.</i>
            
      
      <br /><hr /><br />
      
      
      <h3 class="label">The Lightbox (JackBox)</h3>
        When you installed this theme, you were prompted to install and activate the "JackBox" plugin. This is the plugin that runs the default lightbox functions across the theme. Using it is pretty simple - The "Skeleton Post-Grid" template is already hooked into the plugin. If you want to launch your own custom lightboxes, simply add an image to a post/page, then use the "JB" shortcode button that will highlight in the WYSIWYG bar. Visit the <a target="_blank" href="'.admin_url().'options-general.php?page=jackbox_admin">Settings > JackBox</a> panel to change the default options if you desire. View the <a href="http://www.youtube.com/playlist?list=PLN8tXRxQci2ZFMg7Y1kNiWLDV9YwawlcM&feature=view_all">official JackBack video walkthrough page</a> for additional support.
        
                
      <br /><hr /><br />
      
       
      <h3 class="label">Beta Features: Test At Your Own Peril!</h3>
          We\'re always looking for ways to add exciting new features to our themes. As such, we\'ll occasionally add early, unstable versions of these features to our themes to get feedback from users like yourself. The following features are just those - use them at your own risk - and report any bugs to http://themeisland.ticksy.com/ for us to keep track of. With some hard work, feedback, and luck, these features will eventually make their way to the "Stable" list of core theme features. 
                
          
        <br /><hr /><br />
        
        
      <h3 class="label">Beta Feature Cantidate: The Icon Fonts</h3>
          Advanced users may want to try using the Icon Fonts that come loaded into this theme by default. While we are working on a Drag and Drop UI to make this easy for everyone else, you can check out <a href="http://zurb.com/playground/foundation-icons" target="_blank">the official Foundation Icons page</a> for how this works. In short, all you need to do is add a snippet like this:<br /><br>
          
          <code> &lt; i class="foundicon-[icon]" &gt; &lt; /i &gt; </code><br /><br>
        
          Then, simply replace the word "icon" with your desired icon <a href="http://zurb.com/playground/foundation-icons" target="_blank">from this list</a>
                
          
        <br /><hr /><br />
        
       
      <h3 class="label">Beta Feature Cantidate: SuperScroll \'O Rama!</h3>
         This theme also features a super-duper "beta" feature that you may have noticed in the demo - it basically allows you to animate certain screen elements as you scroll paste them on the page. This is awesome, but it\'s admittedly not for basic users. You can read the <a href="http://johnpolacek.github.io/superscrollorama/" target="_blank">full documentation here</a> and you\'ll find our activation script in the "/assets/javascripts/skeleton-key.js" file. For now, the easiest way to use this feature is to add the following class (using the to any items in the Layout Builder for your particular page or post:  <br /><br>       
          <code>animate_me</code><br /><br>
          
          Like this:<br /><br> <img src="http://tinyurl.com/d5lekbb" /><br /><br>
        
          SuperScrollORama will look for this class and "fade and scale" any items inside. Keep an eye out for theme updates as we continue to work out fun new ways to using this feature (hopefully without needing to think about code or classes!) Until then, use this feature with caution.
          
      <br /><hr /><br />
       
      <h3 class="label">Beta Feature Cantidate: WayPoints</h3>
        Similar to SuperScrollORama, this script will fade-in items as you scroll to them, but in a much simpler fashion with less options (which can be a good thing!). The class you\'ll want to add to the Layout Builder elements (or any HTML element) is:
          
          <code>waypoint_animate_me</code><br /><br>
          
          This script happens to be a lot easier for us to code into the core theme, but it\'s also not quite as fun as being able to make elements fly across the screen. As of this theme version, I am leaning towards making WayPoints our standard "scroll to load an element" plugin because it feels a lot more stable though, which will always trump "flashy" featured for us. Your feedback will help us decide though!
        
        ',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'overview',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),   
      
      
      
      
/* ---------------------------------------------------------*/
/* QUICK START */ 
/* section: quick-start */ 
/* ---------------------------------------------------------*/       
      array(
        'id'          => 'helpme',
        'label'       => 'Quick Setup: Ain\'t Nobody Got Time for That!',
          'desc'        => 'This theme is designed to be "intuitive" to use, which means that the more you use it, the more comfortable you\'ll get. The first time using any theme can feel overwhelming though, so what follows is a guide for the first steps you should take after activating the theme. If you are looking for the full detailed step by step guide for <strong>setting up the demo</strong>, check out the "Campus - Full Start Guide.PDF" found in the WP Theme Files.<br />
       
          <br /><hr /><br />
          
          <strong style="color: #5ead29;">Note:</strong> Users that already have their own content can skip to Step 2 (if you want to import the Theme Options) OR Step 3 (if you plan on filling them out yourself).<br />
          
          <br /><hr /><br />
          
          If this is a fresh WordPress installation (meaning, you don\'t have any content yet, there ain\'t no shame in wanting to just copy some of the demo-content to get a head start. We have included a few files that you can import to your WordPress installation to copy the theme-demo data. They are located inside the "<strong>Resources/Theme-Demo-Content</strong>" folder of the theme package you downloaded when you purchased this theme... Find the following two files and get them ready:
          
          <ol>
          <li>Theme-Package-Name/Resources/Theme-Demo-Content/<strong>Demo-Content.XML</strong></li>
          <li>Theme-Package-Name/Resources/Theme-Demo-Content/<strong>OptionTree-Layouts.TXT</strong></li>
          </ol>
        
          <br /><hr /><br />
           
    <h3 class="label">Step 1: Import "Demo-Content.xml" (Imports Posts, Pages & Menus)</h3>
    
    This file will load any Posts, Pages, and Menu items that the demo uses. Use the following steps to import this file:
        <ol>
          <li>Open the <a target="_blank" href="'.admin_url().'import.php">Tools > Import</a> panel. Select "WordPress". 
            <ol>
            <li>You may be prompted to install & activate the WordPress Importer plugin if this is your first time. Go ahead and do so, then return to the Importer.</li></ol>
            </li>
          <li>Import the provided XML file: Demo-Content.xml </li>
        <li>Wait a few minutes for the process to complete, then you\'re done! Review the imported content:
            <ol>
            <li>Visit the <a target="_blank" href="'.admin_url().'nav-menus.php">Appearances > Menus</a> panel to make sure the menu spaces are saved properly.</li>
            <li>Visit the <a target="_blank" href="'.admin_url().'edit.php?post_type=page">Pages</a> panel to take a quick peek at the <strong>Pages</strong> that you imported.</li>
            <li>Visit the <a target="_blank" href="'.admin_url().'edit.php">Posts</a> panel to take a quick peek at the <strong>Posts</strong> that you imported.</li>
            </ol>
        </li>
        <li>At any point, you can delete the Posts, Pages, Menus, and Users that were imported here from their respective admin panels.</li>
      </ol><br /><br />
      
  <br /><hr /><br />
  
   <h3 class="label">Step 2: Import "OptionTree-Options.txt" (Imports the settings in this panel)</h3>
    
   This will load any Theme Options that we used in the demo:
   
        <ol>
          <li>Go to the <a target="_blank" href="'.admin_url().'admin.php?page=ot-settings">OptionTree > Settings</a> panel.</li>
          <li>Open the "<strong>OptionTree-Options.txt</strong>" file in a text editor.</li>
          <li>Copy & paste the strange looking content from that .TXT file into the "<strong>Options</strong>" text field at the bottom of this page. (<a href="http://tinyurl.com/d6sajqp">See Image</a>)</li>         
          <li>Note that <strong>some settings may still need to be filled out or adjusted to your specific site</strong> (like the Slider Shortcode, Categories, and Images), so take a few minutes to review the options and play around with it. This import method is a quick way to start, but by no means should it conclude your work in the Theme Options panel!</li>
      </ol><br /><br />
   
  <br /><hr /><br />    
  
  
   <h3 class="label">Step 3: Check the Content for Missing Options (and fill it out as needed)</h3>
   
   We\'ve now imported the Theme-Options and the demo Posts and Pages. Some settings may not have imported properly though - so it is best to check the pages (especially those like The Skeleton Grid) and the Theme Options panel for any settings that may have been left blank. This usually just includes the "Category Filter" on the Blog and Skeleton Grid pages.<br />
   
   Next, make sure the Menus were added successfully. In most cases, the Menus will import, but you must assign then to their <strong style="color: #57ac2d">Menu Location</strong> in the <strong style="color: #57ac2d">Appearances > Menus</strong> panel. <br />
   
   Last, we should note that the <strong style="color: #57ac2d">Layout Builder</strong> content does not have a stable import method of as right now. You can use their handy <strong style="color: #57ac2d">Sample Layout</strong> button to quickly see how to use this system though.
   
   <br /><hr /><br />
   
   
  <h3 class="label">Step 4: Add Your Widgets</h3>
  It should be noted that this will not import any widgets used in the demo. This is because we may use some widgets that require plugins that you have not yet installed (such as the Quick Flickr Widget for loading a Flickr Feed)... and in many cases, importing widgets along with their custom settings is impossible & will break a theme because it is dependent upon unique user settings. Take a minute to add some of your own desired widgets from the <a href="'.admin_url().'widgets.php">Appearances > Widgets</a> panel.<br />
  
  There is a step by step guide for importing the widgets the demo uses and their basic theme usage settings in the "Campus - Full Start Guide.PDF".

  <br /><hr /><br />   
  
  <h3 class="label">Step 5: Assign A Homepage</h3>
  This theme will display a list of posts on the front page by default. If you want to use a "Static Page" with your own custom content instead, just visit the <a target="_blank" href="'.admin_url().'options-reading.php">Settings > Reading</a> panel to display a Static Page as the Front Page.<br />
  
  You will be able to add your own further customizations to the frontpage in the <strong style="color: #57ac2d">Front Page</strong> tab at the left of this Theme Options panel.
  
  <br /><hr /><br />   
  
  <h3 class="label">Step 6: Optional! Build a Slider, Copy the Shortcode</h3>
    Review the instructions for building and adding a slider to the frontpage at the <strong style="color: #57ac2d">Using this Theme</strong> tab on the left of this Theme Options panel. 
  
  <br /><hr /><br />   
  
  <h3 class="label">Step 7: Have Fun!</h3>
  At this point you should have a fairly decent looking front-end site. That\'s good! But you won\'t really be able to call it your own until you start adding your own content (posts, pages, etc.) and filling out your own Theme Options. This might take an afternoon or two for new users, but we\'re confident that you\'ll be rocking out awesome sites with this theme in no time. Remember that there is a <strong style="color: #57ac2d">full & thorough set of documentation here</strong>.
  
  
  


',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'quick-start',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      
      
      
/* ---------------------------------------------------------*/
/* SUPPORT & PLUGINS */ 
/* section: documentation */ 
/* ---------------------------------------------------------*/         
      array(
        'id'          => 'helpme',
        'label'       => 'Enjoy the theme? Want new features? Give us a rating!',
        'desc'        => 'Like this theme (or puppies)? Rate it from your ThemeForest "downloads" page & we\'ll keep bringing new features & updates!<br /> It honestly means a LOT of us that you take a moment to do this. Little stuff like this helps us to hire additional support staff, release updates to keep up with the latest new core code, and lots more! So, if you like it, rate it <img alt="star" src="http://makedesign.wpengine.com/reactor/star.png"><img alt="star" src="http://makedesign.wpengine.com/reactor/star.png"><img alt="star" src="http://makedesign.wpengine.com/reactor/star.png"><img alt="star" src="http://makedesign.wpengine.com/reactor/star.png"><img alt="star" src="http://makedesign.wpengine.com/reactor/star.png">
 
<br /><hr /><br />

<h3 class="label">File a Support Ticket</h3>
        Need help? We run a tight ship so that we can help the most amount of people, but we\'re awfully friendly too! Please file a ticket at our support forum if your question fits into any of these general categories:
        
        <ol>
        <li><strong style="color: #57ac2d;">Basic Theme Usage.</strong> <i>How to use any core, advertised features.</i></li>
        <li><strong style="color: #57ac2d;">Simple Customizations.</strong> <i>Changing the color of a font, making the headlines a little bigger, etc.</i></li>
        <li><strong style="color: #57ac2d;">Bugs.</strong> <i>Report these and we\'ll squash them ASAP if we can.</i></li>
        <li><strong style="color: #57ac2d;">Feature Requests.</strong> <i>Have a brilliant idea for how to make this theme better? Let us know!</i></li>
        </ol>
        
        Sadly, we\'ve had a number of people abuse our old "open door" support policy where we helped everyone with everything (ie: client projects, plugin integrations, mowing lawns)... As a result, lots of good, honest folks had to wait for simple answers while we worked on the hard ones. So, until we can hire more staff, the new rule is that <strong>we can\'t help out with the following stuff</strong>:
        
        <ol>
        <li><strong style="color: #d44848;">Plugin Integrations.</strong> We do our best to keep the theme as clean and compliant as possible - if you notice a glaring problem that\'s blocking a plugin from working, report it - Beyond that, we can\'t provide much help with integrating add-on plugins as there are literally 10,000+ plugins of varying qualities floating around the interwebs.</li>
        <li><strong style="color: #d44848;">Non-Trivial Customizations.</strong> This can be anything from "restyling the portfolio grid" to "adding a rotating banner to the header that links with Google AdSense". We provide a lot of customization options in our theme, for those that aren\'t covered, we will gladly entertain them as a Feature Request, but we can\'t provide the code for you on an on-demand basis without shorting other customers. Still, it doesn\'t hurt to ask - sometimes we will be able to help out even if it\'s outside of the scope if you catch us on a light support day!</li>
        <li><strong style="color: #d44848;">Webhost-Related Issues (including site loading speed).</strong> These types of issues are pretty rare nowadays as most non-free webhosts have gotten really good, but if it is determined that a problem is the result of a web-host specific setting (such as a bottlenecked upload limit, an obscure WP-Config setting, etc.), we\'ll usually ask that you take it up with the webhost.</li>
    
        </ol>
<br />      

<a target="_blank" href="http://themeisland.ticksy.com/"><button href="http://themeisland.ticksy.com/" style="float: none !important;" class="option-tree-ui-button blue light save-layout" title="Open in New Window or Tab to File a Ticket" type="submit">I\'ve Read the Disclaimers. File a Ticket</button></a><br /><br />      
 
<br /><hr /><br />

<h3 class="label">Additional Third Party Plugins</h3>

There are 10,000\'s of plugins out there, here are just a few that you might consider to extend the core theme features (some of them are even used in the demo):

<br /><br />

<a target="_blank" href="http://wordpress.org/extend/plugins/quick-flickr-widget">Quick Flickr Widget</a>: Adds a Flickr Widget (as seen in the demo).


<br /><br />

<a target="_blank" href="http://wordpress.org/extend/plugins/advanced-sidebar-menu">Advanced Sidebar Menu</a>: We occasionally will use this in the theme demos (in combination with the "Custom Sidebars" plugin mentioned next) to create the "small sidebar menu" for the About page.

<br /><br />
<a target="_blank" href="http://wordpress.org/extend/plugins/custom-sidebars">Custom Sidebars</a>: Use this to create custom sidebars for individual posts or pages on your theme.

<br /><br />

<a target="_blank" href="http://wordpress.org/extend/plugins/advanced-excerpt/">Advanced Excerpt</a>: A post excerpt system... this will allow you to include images, paragraphs, videos (iframes) and more into your post previews. Use this with caution (especially with the new post-formats in WP 3.6), but some of our users have found it to be really useful.


',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'documentation',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
    )
  );
   


/* ---------------------------------------------------------*/
/* THAT'S IT! */ 
/* NO MORE THEME OPTIONS */ 
/* GO FUCK YOURSELF SAN DIEGO */
/* ---------------------------------------------------------*/
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}