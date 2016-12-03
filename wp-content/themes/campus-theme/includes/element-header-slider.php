<?php $slidershortcode = get_custom_field('slider_shortcode');

if(get_custom_field('slider_shortcode_fullwidth') == "full_width" ) {
	
	if(strstr($slidershortcode, 'rev_slider')) { 
	//It's Revolution - Do Something
		// OLD STRIP // strip_this_shit = array("[", "]", " ", "rev_slider");
	$strip_this_shit = array("[", "]", " ", "rev_slider", 'alias="', '"');
	$revslider_shortcode_prestrip = get_custom_field('slider_shortcode');
	$revslider_shortcode_poststrip = str_replace($strip_this_shit, "", "$revslider_shortcode_prestrip");

	putRevSlider( "$revslider_shortcode_poststrip" );
	} else { echo do_shortcode( "$slidershortcode" ); }				
	
} else {	
	
	echo '<div class="container">
			<div class="sixteen columns">';
				if(strstr($slidershortcode, 'rev_slider')) { 
				//It's Revolution - Do Something
					// OLD STRIP // $strip_this_shit = array("[", "]", " ", "rev_slider");
				$strip_this_shit = array("[", "]", " ", "rev_slider", 'alias="', '"');
				$revslider_shortcode_prestrip = get_custom_field('slider_shortcode');
				$revslider_shortcode_poststrip = str_replace($strip_this_shit, "", "$revslider_shortcode_prestrip");

				putRevSlider( "$revslider_shortcode_poststrip" );
				} else { echo do_shortcode( "$slidershortcode" ); }
	echo '</div>
	</div>';
		
} ?>