<?php

/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

function custom_meta_boxes() {

  $page_options = array(
    'id'        => 'page_options',
    'title'     => 'Skeleton Page Options',
    'desc'      => '',
    'pages'     => array( 'page' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
         
    
    array(
    	'id' => 'show_title',
		'label' => 'Show the Page Title?',			
		'desc' => 'Do you want to hide the page title from view? Leave this blank to display it by default.',					
		'type' => 'select',					
		'std' => '',
		'class' => '',
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
        'id'          => 'show_breadcrumbs',
        'label'       => 'Show the Breadcrumbs?',
        'desc'        => 'This will display the breadcrumb trail (ie: Page > SubPage > Sub-SubPage).',
        'std'         => '',
       'type' => 'select',					
		'std' => 'No',
		'class' => '',
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
        'id'          => 'slider_shortcode',
        'label'       => 'Slider Shortcode for Page Header',
        'desc'        => 'Optional: Enter a slider shortcode here.<br /><br /> <strong>Not sure what that is?</strong> Build your slider at the slider admin panel in the left sidebar (<a href="themes.php?page=ot-theme-options#section_overview">see this page for details on what sliders this theme supports</a>). Once it\'s built, copy and paste the shortcode that the plugin gives you here in this text field. The slider represented by the shortcode will then show up in the theme-specific area for header sliders on just this page. It should look something like this:
        
        <br /><br /><italic>[rev_slider your_slider_alias]</italic>',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => '',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
      ), 	      
    array(
        'id'          => 'slider_shortcode_fullwidth',
        'label'       => 'Slider Shortcode Container',
        'desc'        => 'If you entered a slider shortcode, is the slider designed to be full-width, or fixed width?',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'frontpage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'full_width',
            'label'       => 'Full Width',
            'src'         => ''
          ),
          array(
            'value'       => 'fixed_width',
            'label'       => 'Fixed Width',
            'src'         => ''
          )
        ),
      ),

    array(
        'id'          => 'slider_theme_styles',
        'label'       => 'Edit Slider Theme Styles',
        'desc'        => 'Optional: This provide the ability to alter theme styles for this slider.',
        'std'         => '',
        'type'        => 'select',
        'section'     => '',
        'conditional' => '',
        'choices'     => array(
          array(
            'value'       => 'off',
            'label'       => 'Off',
            'src'         => ''
          ),
          array(
            'value'       => 'on',
            'label'       => 'On',
            'src'         => ''
          )
        ),
      ),  
        array(
          'id'          => 'slider_theme_styles_top_margin',
          'label'       => 'Top Margin',
          'desc'        => 'Optional: This provide the ability to alter theme styles for this slider.',
          'std'         => '',
          'type'        => 'text',
          'section'     => '',
          'condition'   => 'slider_theme_styles:is(on)',
        ),
        array(
          'id'          => 'slider_theme_styles_padding',
          'label'       => 'Padding',
          'desc'        => 'Optional: This provide the ability to alter theme styles for this slider. Examples: 0, 9px 0, 9px 9px 9px 9px, etc.',
          'std'         => '',
          'type'        => 'text',
          'section'     => '',
          'condition'   => 'slider_theme_styles:is(on)',
        ), 
        array(
          'id'          => 'slider_theme_styles_border',
          'label'       => 'Slider Border',
          'desc'        => 'Optional: This provide the ability to alter theme styles for this slider. Example: 1px solid #afafaf',
          'std'         => '',
          'type'        => 'text',
          'section'     => '',
          'condition'   => 'slider_theme_styles:is(on)',
        ), 
        array(
          'id'          => 'slider_theme_styles_shadow',
          'label'       => 'Theme Shadow',
          'desc'        => 'Optional: This provide the ability to alter theme styles for this slider. Example: 0 1px 4px rgba(0, 0, 0, 0.2)',
          'std'         => '',
          'type'        => 'text',
          'section'     => '',
          'condition'   => 'slider_theme_styles:is(on)',
        ),  
      
    array(
    	'id' => 'page_caption',
		'label' => 'Page Caption <small>(* disabled if you entered a slider shortcode)</small>',			
		'desc' => 'Enter a custom page caption that will appear in the header.',					
		'type' => 'textarea-simple',					
		'std' => '',
		'class' => '',
	),	
    array(
        'id'          => 'action_button_row',
        'label'       => 'Add Your Action Buttons (for below the front page caption):',
        'desc'        => 'Add a new item for each custom "Action Button" that you would like below the caption.',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'frontpage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'settings'    => array(
          array(
            'id'          => 'button_row_text',
            'label'       => 'Button Text',
            'desc'        => 'The text that will appear in the button.',
            'std'         => '',
            'type'        => 'textarea-simple',
            'section'     => 'action_button_row',
            'rows'        => '5',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
           ),
           array(
            'id'          => 'button_row_link',
            'label'       => 'Link URL',
            'desc'        => 'The link that the button will send the user to.',
            'std'         => '',
            'type'        => 'textarea-simple',
            'section'     => 'action_button_row',
            'rows'        => '1',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
           array(
            'id'          => 'target',
            'label'       => 'Open the URL in a New Tab or the Same Tab?',
            'desc'        => '',
            'std'         => '',
            'type'        => 'select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => '',
            'choices'     => array( 
	          array(
	            'value'       => 'self',
	            'label'       => 'Open in Same Tab',
	            'src'         => ''
	          ),
	          array(
	            'value'       => 'blank',
	            'label'       => 'Open in New Tab',
	            'src'         => ''
	          )
	        ),
          ),   
          
          array(
            'id'          => 'button_bg_color',
            'label'       => 'Button Background Color',
            'desc'        => 'The background color for the button. Leave empty to use theme default.',
            'std'         => '',
            'type'        => 'colorpicker',
            'section'     => 'action_button_row',
            'rows'        => '1',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'button_text_color',
            'label'       => 'Button Text Color',
            'desc'        => 'The text color for the button. Leave empty to use theme default.',
            'std'         => '',
            'type'        => 'colorpicker',
            'section'     => 'action_button_row',
            'rows'        => '1',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          
        ),
     ),
	/*  - array(
        'id'          => 'caption_border',
        'label'       => 'Use decorative border below the page-caption area?',
        'desc'        => 'Optional: Select an optional bottom border for the page-caption. <strong>Important!</strong> This only works if you select to use a white-background color for the main "body" area!',
        'std'         => 'none',
        'type'        => 'select',
        'section'     => 'frontpage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '19',
            'label'       => 'Style 01 (Wavy)',
            'src'         => ''
          ),
          array(
            'value'       => '1',
            'label'       => 'Style 02 (Teeth)',
            'src'         => ''
          ),
          array(
            'value'       => '93',
            'label'       => 'Style 03 (Torn Paper)',
            'src'         => ''
          ),
          array(
            'value'       => '55',
            'label'       => 'Style 04 (Ticket Stub)',
            'src'         => ''
          ),
          array(
            'value'       => '69',
            'label'       => 'Style 05 (Cloud)',
            'src'         => ''
          ),   
          array(
            'value'       => '78',
            'label'       => 'Style 06 (Notebook)',
            'src'         => ''
          ),          
          array(
            'value'       => 'none',
            'label'       => 'None',
            'src'         => ''
          ),            
        ),
      ), -  */
	array(
        'id'          => 'page_color',
        'label'       => 'Custom Page Color',
        'desc'        => 'Optional! Select a color here to override the following base Theme Options: Link Color & Page-Caption Background Color. (the elements effected by this varies from theme to theme)',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => '',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
      ),      
	array(
        'id'          => 'page_background_image',
        'label'       => 'Custom Page Image',
        'desc'        => 'Optional! Upload an image that will be used behind the page-caption area on just this page',
        'std'         => '',
        'type'        => 'upload',
        'section'     => '',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
      ),
      /* Depricated 3.1.9
      array(
        'id'          => 'page_background_image_height',
        'label'       => 'Custom Page Image Height',
        'desc'        => 'When a Page-Caption (text) is found - this sets the height of the custom page image area. 
        This is useful if you want to control the height for this image. You can enter any px value. For example: "190px". 
        <br/><br/>When a Page-Caption (text) is not found - this is not used (aspect ratio of image is used). ',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => '',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
      ), */ 
      /*  - 
      array(
        'id'          => 'content_top_margin',
        'label'       => 'Content Top Margin',
        'desc'        => 'This sets the "negative top margin" that brings the content block over the caption or slider area. The default is "<i>-200px</i>". You can enter any value - just test it out as this can break the layout if you aren\'t careful!',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => '',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
      ),  -  */
	array(
    	'id' => 'page_css',
		'label' => 'Custom Page CSS',			
		'desc' => 'Enter any custom CSS that you would like used on just this page.',					
		'type' => 'textarea-simple',					
		'std' => '',
		'class' => '',
      	'choices' => array()
		), 
	
    )
  );


/* ================= */


  $skeleton_grid_template_options = array(
    'id'        => 'skeleton_grid_template_options',
    'title'     => 'Skeleton Post-Grid Options',
    'desc'      => '',
    'pages'     => array( 'page' ),
    'context'   => 'side',
    'priority'  => 'high',
    'fields'    => array(	
    array(
        'id'          => 'skeleton_grid_notes',
        'label'       => 'Skeleton Grid Template Notes',
        'desc'        => 'This template will display a set of blog posts in a full-width grid format. <i>All posts within the categories that you select should all have featured images (or videos) associated with them</i>, otherwise the layout may break. For this reason, we recommend that you have a separate category (and sub-categories) just for posts that you want to show up in this template. We also do not recommend using any post-formats except the Standard Post, Image Post, and Video Post in this template.<br />',
        'std'         => '',
        'type'        => 'textblock-titled',
        'class'       => ''
      ),
	array(
        'id'          => 'grid_category_filter',
        'label'       => 'Display which categories?',
        'desc'        => 'Select which categories you would like included in this page.',
        'std'         => '',
        'type'        => 'category-checkbox',
        'class'       => ''
      ),
    array(
    	'id' => 'show_category_buttons',
		'label' => 'Display category buttons?',			
		'desc' => 'Do you want to display the category buttons at the top for quick sorting?',					
		'type' => 'select',					
		'std' => '',
		'class' => '',
      	'choices'     => array( 
          array(
            'value'       => 'show',
            'label'       => 'Show',
            'src'         => ''
          ),
          array(
            'value'       => 'hide',
            'label'       => 'Hide',
            'src'         => ''
          )
        ),
	),
	array(
    	'id' => 'columns_count',
		'label' => 'How many columns?',			
		'desc' => 'Select how many columns you\'d like to use.',					
		'type' => 'select',					
		'std' => 'one-third columns',
		'class' => '',
      	'choices'     => array( 
      	  array(
            'value'       => 'two columns',
            'label'       => '8 Columns',
            'src'         => ''
          ),
          array(
            'value'       => 'four columns',
            'label'       => '4 Columns',
            'src'         => ''
          ),
          array(
            'value'       => 'one-third column',
            'label'       => '3 Columns',
            'src'         => ''
          ),
          array(
            'value'       => 'eight columns',
            'label'       => '2 Columns',
            'src'         => ''
          )
        ),
	),
	array(
    	'id' => 'isotope_mode',
		'label' => 'Grid Mode',			
		'desc' => 'This determines how the modules are arranged on the grid.',					
		'type' => 'select',
		'std' => '',
		'class' => '',
      	'choices'     => array( 
          array(
            'value'       => 'masonry',
            'label'       => 'Masonry - Stack \'em like bricks!',
            'src'         => ''
          ),
          array(
            'value'       => 'fitRows',
            'label'       => 'fitRows - Nice even rows!',
            'src'         => ''
          )
        ),
	),
	array(
    	'id' => 'module_skin',
		'label' => 'Module Mode',			
		'desc' => 'This will change the appearance of the individual modules. Note that you can edit the "overlay" effect for image-thumbnails from the "<a href="options-general.php?page=jackbox_admin">Settings > JackBox</a>" panel.',					
		'type' => 'select',					
		'std' => '',
		'class' => '',
      	'choices'     => array( 
          array(
            'value'       => 'only-thumbnails',
            'label'       => 'Only Thumbnails',
            'src'         => ''
          ),
          array(
            'value'       => 'hybrid',
            'label'       => 'Thumbnails + Title & Excerpt',
            'src'         => ''
          )
        ),
	  ),		   
      array(
        'id'          => 'image_notes',
        'label'       => 'Image Sizing Notes',
        'desc'        => 'The following fields strive to give you a little more control over the way that featured images display (for Standard Posts, not the Image Post-Format).
        <br /><br />
        Note that this is not "image cropping" in the true sense. It\'s a quick way to make lots of big images smaller and more manageable in a responsive layout that changes from one device to another. If you require truly perfect uniformity in your grid images, you should create them all to an exact uniform size before uploading them (ie: create all of your featured images at 750x500 before you upload them to your posts).
        <br /><br />
        Keep in mind that the layout will shrink all images & videos to fit their column container.',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'image-settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'default_image_width',
        'label'       => 'Set a Maximum Thumbnail Width (Optional)',
        'desc'        => 'Enter a width value (ie: "750"). <br /><br />This will be the largest width allowed when cropping your images to create thumbnails. This means that images thinner than this width will ignore this.',
        'std'         => '750',
        'type'        => 'text',
        'section'     => 'image-settings',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'default_image_height',
        'label'       => 'Set a Maximum Thumbnail Height (Optional)',
        'desc'        => 'Enter a width value (ie: "500"). <br /><br />This will be the largest height allowed when cropping your images to create thumbnails. This means that images shorter than this height will ignore this.',
        'std'         => '500',
        'type'        => 'text',
        'section'     => 'image-settings',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'maintain_aspect_ratio',
        'label'       => 'Maintain the Thumbnail\'s Aspect Ratio? (Optional)',
        'desc'        => 'Setting this to "Yes" will maintain the original aspect ratio (tall images will be tall, short images will be short).<br /><br />If you set this to "No", the theme will crop your images to the exact width and height that you gave in the options just above this (assuming they are large enough to warrant cropping - images that don\'t exceed their space in the layout will be left alone).
        
        <br />Yes = Resize my images, but protect their original aspect ratio.
        <br />No = Crop my images and resize them using the values provided above.
        ',
        'std'         => 'false',
        'type'        => 'select',
        'section'     => 'image-settings',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'false',
            'label'       => 'Yes - Keep original aspect ratio',
            'src'         => ''
          ),
          array(
            'value'       => 'true',
            'label'       => 'No - Crop a new aspect ratio.',
            'src'         => ''
          )
          )
      ),     
	array(
        'id'          => 'open_thumbs_in_lightbox',
        'label'       => 'Open images in a lightbox?',
        'desc'        => 'Selecting "Yes" will make the post-thumbnails on this page open the full featured-image inside a lightbox. It also turns on the JackBox Overlay Effects - You can edit the settings for this lightbox in the "<a href="options-general.php?page=jackbox_admin">Settings > JackBox</a>" panel.

<br /><br />Want to load something else in the lightbox? Enter an image or video URL into the individual Post\'s "Custom Lightbox Link".

<br /><br />Selecting "No" will make the image thumbnails all link directly to their full post (inside a normal post template).

<br /><br />Videos will play inline as a rule (this is the ideal UI behavior for most devices), but they will also show up in the page\'s lightbox gallery if you select "Yes"
',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'image_settings',
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
    	'id' => 'grid_post_count',
		'label' => 'Number of posts per page',			
		'desc' => 'Leave blank to display everything (recommended!). Set a number for how many posts you want to show up per page. ',					
		'type' => 'text',					
		'std' => '',
		'class' => '',
      	'choices' => array()
		),
	
	
    )
  );


/* ================= */


  $blog_template_options = array(
    'id'        => 'blog_template_options', // Used for the blog template
    'title'     => 'Skeleton Blog Options',
    'desc'      => '',
    'pages'     => array( 'page' ),
    'context'   => 'side',
    'priority'  => 'high',
    'fields'    => array( 

/*  - Begin New Multiple Sidebar Options -  */
  array(
        'id'          => 'content_alignment',
        'label'       => 'Content Alignment',
        'desc'        => 'Beta Feature: This option aligns the Content in regards to the Sidebars. This layout feature offers you some quick ways to re-align these main elements. <br/>Center Alignment will provide the Secondary Sidebar to the left of the content, and the Primary/Default Sidebar to the right of the content. If you are only using one sidebar, your only two opitons include Left Alignment and Right Alignment. <br/> When using only One Sidebar, we have allocated our standard amount of room for the content and sidebar areas. When using Two Sidebars, we have slimmed down the allocation of room for both the content area and each sidebar to allow for this additional content.',
        'std'         => '',
        'type'        => 'select',
        'class'       => 'column_flip',
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
          array(
            'value'       => 'flip',
            'label'       => 'Center Content, Flip Sidebars',
            'src'         => ''
          ),
        ),
  ), 
  array(
      'id' => 'defaultpage_remove_sidebar',
    'label' => 'Remove the Primary Sidebar?',
    'desc' => 'Do you want to remove the primary sidebar for this page/post? It\'s default position is to the right of the content. Removing both sidebars will result in the full width template.',          
    'type' => 'select',         
    'std' => '',
    'class' => '',
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
      'id' => 'secondarypage_remove_sidebar',
    'label' => 'Remove the Secondary Sidebar?',
    'desc' => 'Do you want to remove the secondary sidebar for this page/post? It\'s default position is to the left of the content. Removing both sidebars will result in the full width template.',         
    'type' => 'select',         
    'std' => '',
    'class' => '',
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
/*  - /End New Multiple Sidebar Options -  */     
	      
	array(
        'id'          => 'blog_category_filter',
        'label'       => 'Display which categories?',
        'desc'        => 'Select which categories you would like included in this page.',
        'std'         => '',
        'type'        => 'category-checkbox',
        'class'       => ''
      ),            
	array(
    	'id' => 'blog_post_count',
		'label' => 'Number of posts per page',			
		'desc' => 'Leave blank to display everything (recommended!). Set a number for how many posts you want to show up per page. ',					
		'type' => 'text',					
		'std' => '',
		'class' => '',
      	'choices' => array()
		),
	/*  - array(
    	'id' => 'blog_column_flip',
		'label' => 'Flip Columns?',			
		'desc' => 'Do you want to swap the sides for the Main Column and Sidebar Column? (Only works on templates that include a sidebar like the Default Template)',					
		'type' => 'select',					
		'std' => '',
		'class' => '',
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
    	'id' => 'blog_remove_sidebar',
		'label' => 'Remove the Sidebar?',			
		'desc' => 'Do you want to remove the sidebar and use the full-width template for this post?',					
		'type' => 'select',					
		'std' => '',
		'class' => '',
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
	),	 -  */
	
    )
);


/* ================= */


  $page_template_options = array(
    'id'        => 'layout_options', // Used for standard pages
    'title'     => 'Skeleton Layout Options',
    'desc'      => '',
    'pages'     => array( 'page' ),
    'context'   => 'side',
    'priority'  => 'high',
    'fields'    => array(      
	      
/*  - Begin New Multiple Sidebar Options -  */
  array(
        'id'          => 'page_content_alignment',
        'label'       => 'Content Alignment',
        'desc'        => 'Beta Feature: This option aligns the Content in regards to the Sidebars. This layout feature offers you some quick ways to re-align these main elements. <br/>Center Alignment will provide the Secondary Sidebar to the left of the content, and the Primary/Default Sidebar to the right of the content. If you are only using one sidebar, your only two opitons include Left Alignment and Right Alignment. <br/> When using only One Sidebar, we have allocated our standard amount of room for the content and sidebar areas. When using Two Sidebars, we have slimmed down the allocation of room for both the content area and each sidebar to allow for this additional content.',
        'std'         => '',
        'type'        => 'select',
        'class'       => 'column_flip',
        'choices'     => array( 
          array(
            'value'       => 'page_left',
            'label'       => 'Left Alignment',
            'src'         => ''
          ),
          array(
            'value'       => 'page_center',
            'label'       => 'Centered Alignment',
            'src'         => ''
          ),
          array(
            'value'       => 'page_right',
            'label'       => 'Right Alignment',
            'src'         => ''
          ),
          array(
            'value'       => 'page_flip',
            'label'       => 'Center Content, Flip Sidebars',
            'src'         => ''
          ),
        ),
  ), 
  array(
      'id' => 'page_defaultpage_remove_sidebar',
    'label' => 'Remove the Primary Sidebar?',
    'desc' => 'Do you want to remove the primary sidebar for this page/post? It\'s default position is to the right of the content. Removing both sidebars will result in the full width template.',          
    'type' => 'select',         
    'std' => '',
    'class' => '',
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
      'id' => 'page_secondarypage_remove_sidebar',
    'label' => 'Remove the Secondary Sidebar?',
    'desc' => 'Do you want to remove the secondary sidebar for this page/post? It\'s default position is to the left of the content. Removing both sidebars will result in the full width template.',         
    'type' => 'select',         
    'std' => '',
    'class' => '',
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
/*  - /End New Multiple Sidebar Options -  */
	
    )
  );



$faculty_template_options = array(
'id'        => 'faculty_template_options', // Used for the faculty template
'title'     => 'Faculty Template Options',
'desc'      => '',
'pages'     => array( 'page' ),
'context'   => 'side',
'priority'  => 'high',
'fields'    => array(      

  array(
        'id'          => 'faculty_category_filter',
        'label'       => 'Display which categories?',
        'desc'        => 'Select which categories you would like included in this page.',
        'std'         => '',
        'type'        => 'category-checkbox',
        'class'       => ''
      ),            
  array(
      'id' => 'faculty_post_count',
    'label' => 'Number of posts per page',      
    'desc' => 'Leave blank to display everything (recommended!). Set a number for how many posts you want to show up per page. ',         
    'type' => 'text',         
    'std' => '',
    'class' => '',
    ),

)
);

/* ================= */


  $post_options = array(
    'id'        => 'post_options', // Used for posts
    'title'     => 'Skeleton Post Options',
    'desc'      => '',
    'pages'     => array( 'post' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
      
     array(
    	'id' => 'title_1',
		'label' => 'Post Specific Options',			
		'desc' => 'This is a set of custom options for just this post. These are entirely optional, but they bring some extra functionality to post.',
		'type' => 'textblock-titled',					
		'std' => '',
		'class' => '',
      	'choices' => array()
	),
    array(
    	'id' => 'column_flip',
		'label' => 'Flip Columns?',			
		'desc' => 'Do you want to swap the sides for the Main Column and Sidebar Column? (Only works on templates that include a sidebar like the Default Template)',					
		'type' => 'select',					
		'std' => 'No',
		'class' => '',
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
    	'id' => 'remove_sidebar',
		'label' => 'Remove the Sidebar?',			
		'desc' => 'Do you want to remove the sidebar and use the full-width template for this post?',					
		'type' => 'select',					
		'std' => 'No',
		'class' => '',
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
        'id'          => 'slider_shortcode',
        'label'       => 'Slider Shortcode for Page Header',
        'desc'        => 'Optional: Enter a slider shortcode here.<br /><br /> <strong>Not sure what that is?</strong> Build your slider at the slider admin panel in the left sidebar (<a href="themes.php?page=ot-theme-options#section_overview">see this page for details on what sliders this theme supports</a>). Once it\'s built, copy and paste the shortcode that the plugin gives you here in this text field. The slider represented by the shortcode will then show up in the theme-specific area for header sliders on just this page. It should look something like this:
        
        <br /><br /><italic>[rev_slider your_slider_alias]</italic>',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => '',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
      ), 	      
     array(
        'id'          => 'slider_shortcode_fullwidth',
        'label'       => 'Slider Shortcode Container',
        'desc'        => 'If you entered a slider shortcode, is the slider designed to be full-width, or fixed width?',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'frontpage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'full_width',
            'label'       => 'Full Width',
            'src'         => ''
          ),
          array(
            'value'       => 'fixed_width',
            'label'       => 'Fixed Width',
            'src'         => ''
          )
        ),
      ),
	array(
        'id'          => 'show_author_box',
        'label'       => 'Show Author Box on this post?',
        'desc'        => 'Select "Yes" to display the author box at the bottom of just this blog post (you can set this for ALL posts from the Theme Options panel).',
        'std'         => 'No',
        'type'        => 'select',
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
    	'id' => 'lightbox_link',
		'label' => 'Custom Lightbox Link',			
		'desc' => 'Overrides the default lightbox URL for the "Skeleton Post-Grid Page Template". Insert a URL for an image or video (Vimeo, YouTube, or .MOV) to be launched inside a lightbox from the post thumbnail.',					
		'type' => 'text',					
		'std' => '',
		'class' => '',
      	'choices' => array()
		),	    
	array(
    	'id' => 'page_css',
		'label' => 'Custom Post CSS',			
		'desc' => 'Enter any custom CSS that you would like used on just this post.',					
		'type' => 'textarea-simple',					
		'std' => '',
		'class' => '',
      	'choices' => array()
	),
	
    )
  );

/* ================= */

	    	
		  ot_register_meta_box( $page_options );
		  ot_register_meta_box( $post_options );
		  
		  ot_register_meta_box( $skeleton_grid_template_options );
		  ot_register_meta_box( $page_template_options );
		  ot_register_meta_box( $blog_template_options );

      ot_register_meta_box( $faculty_template_options );
		    

}

?>