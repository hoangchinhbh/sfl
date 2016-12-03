<!-- THE POST QUERY -->
<!-- This one's special because it'll look for our category filter and apply some magic -->
<?php 

wp_reset_query();

global $paged;
global $template_file;

if( get_post_custom_values('grid_post_count') ) :  
	$post_array = get_post_custom_values('grid_post_count');
	$post_count = join(',', $post_array);
else : 
	$post_count = -1;
endif;

/* Get Category Filter */
if(get_custom_field('grid_category_filter' )) :
	$cats = get_custom_field( 'grid_category_filter' );
	foreach ( $cats as $cat ) {
		$acats[] = $cat; 				
	}
	$cat_string = join(',', $acats);					
endif;

$args=array(
	'cat'=>$cat_string,			   // Query for the cat ID's (because you can't use multiple names or slugs... crazy WP!)
	'posts_per_page'=>$post_count, // Set a posts per page limit
	'paged'=>$paged,			   // Basic pagination stuff.
   );

query_posts($args); ?>