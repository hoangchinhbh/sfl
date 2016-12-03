<?php if (has_post_thumbnail( $post->ID )) :
	
	// Returns the following variables:
	
	// $image_full 			|| image url for the featured image
	//
	// $image[url];			|| vt_resize image url
	// $image[width]; 		|| vt_resize image width
	// $image[height];		|| vt_resize image height
	//
	// $lightbox_link 		|| the destination of the full image url OR the custom_field.
	//
	// $the_link 			|| returns either the_permalink() or the lightbox link
	// $link_extras			|| used for [rel="lightbox"] type stuff
		 								
	// Grab the URL for the thumbnail (featured image)
	$thumb = get_post_thumbnail_id(); 
	$image_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
	
	global $imgwidth;
	global $imgheight;
	global $imagecrop;

	if (($imagecrop) == 'true' ) : 
		$image = vt_resize( $thumb, '', $imgwidth, $imgheight, true );
	else : 
		$image = vt_resize( $thumb, '', $imgwidth, $imgheight, false );
	endif;
									
	// Check for a lightbox link, if it exists, use that as the value.
	// If it doesn't, use the featured image URL from above.
	// Basically allows you to have a standard post format link to a video or a custom image in a lightbox...
	if(get_custom_field('lightbox_link')) {
		$lightbox_link = get_custom_field('lightbox_link');
	} else {
		$lightbox_link = $image_full[0];
	}

endif; 								
?>