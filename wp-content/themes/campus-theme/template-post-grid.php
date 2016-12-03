<?php
/*
 * Template Name: Skeleton Post-Grid
*/

get_header();

// Get PAGE level custom_fields from the Skeleton Post Grid meta-box. //

// Show category buttons
if(get_custom_field('show_category_buttons') == 'hide') : 
$show_category_buttons = "hide";
else : 
$show_category_buttons = "show";
endif;

// Set the module style
if(get_custom_field('module_skin') == 'only-thumbnails') : 
$module_skin = "only-thumbnails";
else : 
$module_skin = "hybrid";
endif;

// Set whether this is masonry or fitRows
if(get_custom_field('isotope_mode') == 'masonry') : 
$isotope_mode = "masonry";
else : 
$isotope_mode = "fitRows";
endif;

// Set the columns class for each module.
if(get_custom_field('columns_count') != '') : 
$columns = get_custom_field('columns_count');
else : 
$columns = "four columns";
endif;

// Open thumbs in a lightbox or a full post?
if(get_custom_field('open_thumbs_in_lightbox') == 'Yes' ) {
	$lightbox_hook = "jackbox-container";
	$open_lightbox = "Yes"; //We'll use this in the load-image-values to determine the target URL
} else {
	$lightbox_hook = "no-lightbox";
	$open_lightbox = "No";
} 

// These globals are set up in functions.php. We are simply declaring that we intend to use them. //
global $imgwidth;
global $imgheight;
global $imagecrop;

//Grab the image cropping options, and set a default if none exist. //
if (get_custom_field('default_image_width')) : 
	$imgwidth = get_custom_field('default_image_width', $theme_options,false, true, 0 );
else : 
	$imgwidth = "750";
endif;

if (get_custom_field('default_image_height')) : 
	$imgheight = get_custom_field('default_image_height', $theme_options,false, true, 0 );
else : 
	$imgheight = "2000";
endif;

if (get_custom_field('maintain_aspect_ratio') == 'true' ) : 
	$imagecrop = "true";
else : 
	$imagecrop = "false";
endif;

// Force the layout for isotope space
	$layout_class = 'sixteen columns'; 
	$content_width_class = 'full-width';	
	$content_width = "1100";

?>

<!-- ============================================== -->

<!-- Super Container -->
<div class="super-container full-width main-content-area <?php echo $content_width_class; ?>" id="section-content">

	<div class="container">	
		
		<!-- Page Template Header (Title + Optional Content) -->
		<div class="content <?php echo $layout_class; ?>">	
			<div class="content-inner">	

				<!-- Page Title -->
				<div class="page-title-breadcrumbs">
					<h1 class="page-title"><span><?php the_title(); ?></span></h1>
						<?php if(get_custom_field('show_breadcrumbs') == 'Yes') : ?>
							<div class="breadcrumbs">| <?php echo get_breadcrumb(); ?></div><?php endif; ?>
					</div>
				<hr class="page-title-hr" />

				<!-- Page Caption Section -->
				<?php if(get_custom_field('page_caption') . get_custom_field('page_background_image')) : ?>

					<div class="<?php echo $layout_class; ?>" id="section-page-caption">
						<?php get_template_part( 'includes/element', 'page-caption' ); ?>
					</div >

				<?php endif;?>	

				<!-- Page Content (if it exists) -->
				<?php while ( have_posts() ) : the_post(); if($post->post_content != "") : ?>	
					<?php the_content(); ?><hr />			
				<?php endif; endwhile; ?>
			</div>					
		</div>


		
		
		<?php if( $show_category_buttons == 'show' ) : ?>
		<!-- Filter Navigation (Skeleton Grid Categories) -->
		<div id="isotope-button-navigation">	
			<div class="content grid-nav <?php echo $layout_class; ?>">
				<div class="content-inner">
					
					<p class="grid-filters" id="grid-filter">
						<a class="button" href="#" data-filter="*">All</a>
						<!-- Grab just the category slugs and list them using our markup -->
						<?php
						if(get_post_custom_values('grid_category_filter')) :
							$cats = get_custom_field( 'grid_category_filter' );
							foreach ( $cats as $cat ) {	
								$cat = urldecode($cat);	
								$cat = get_cat_slug($cat);
								$cat_name = get_term_by( 'slug', $cat, 'category');
								$catsluglink = '<a class="button" href="#" data-filter=".'.$cat.'">' . $cat_name->name . '</a> ';
								$acats[] = $catsluglink;
							}							    
							$cat_string = join(' ', $acats);
							$cat_string = urldecode($cat_string);
							echo ($cat_string);	
						else :
							$cats = get_all_category_ids();
							foreach ( $cats as $cat ) {	
								$cat = urldecode($cat);	
								$cat = get_cat_slug($cat);
								$cat_name = get_term_by( 'slug', $cat, 'category');
								$catsluglink = '<a class="button" href="#" data-filter=".'.$cat.'">' . $cat_name->name . '</a> ';
								$acats[] = $catsluglink;
							}
							$cat_string = join(' ', $acats);
							$cat_string = urldecode($cat_string);
							echo ($cat_string);	
						endif;
						?>
					</p>
					
				</div>
			</div> 	
		</div>
		<?php endif; ?>
		
		
		<div id="skeleton-container" data-isotope="<?php echo $isotope_mode; ?>">
			<div class="content <?php echo $layout_class; ?>" id="grid-list" >
				<div class="content-inner">
					
					<!-- CATEGORY QUERY + START OF THE LOOP -->
					<?php include( 'includes/query-gridtemplate.php' ); ?>
					<?php while (have_posts()) : the_post(); ?>
											
						
					<?php if ( // Strip out unsupported post formats //
					//has_post_format( 'standard' ) ||		
					//has_post_format( 'image' ) ||		
					//has_post_format( 'video' ) ||		
					//has_post_format( 'audio' ) ||
					has_post_format( 'audio' ) ||
					has_post_format( 'aside' ) ||				
					has_post_format( 'gallery' ) ||
					has_post_format( 'link' ) ||
					has_post_format( 'chat' ) || 
					has_post_format( 'status' ) ||
					has_post_format( 'quote' ) 
					): /* DoNothing */ else : ?>
								
							<?php if( $module_skin == 'only-thumbnails' ) : ?>								
								
								<!-- Module Container -->
								
								<div class="<?php echo $columns; ?> thumbnail-module module-container
									<?php $post_slug = str_replace(" ", "-",$post->post_name);
										$postcats = get_the_category();
										if ($postcats) {
										  foreach($postcats as $cat) {
											echo urldecode($cat->slug) . ' ';
											}
										}
									?>" >
									
									<div id="post-<?php the_ID(); ?>" class="module <?php echo $lightbox_hook; ?>">		
										<?php // Check for 3.6. If it doesn't exist, just kick out a featured image.
										$mdnw_wp_version = get_bloginfo( 'version' ); 									
										if(!strstr($mdnw_wp_version, '3.6')) : 						
										?>	
										
											<?php if (has_post_thumbnail( $post->ID )) : ?>
												<?php include( 'includes/load-image-values.php' ); 											
												if ($open_lightbox == 'Yes') {
													$the_featured_link = $lightbox_link;
												} else {
													$the_featured_link = get_permalink();
												} ?>
												<a href="<?php echo $the_featured_link; ?>">
													<img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php the_title(); ?>" />
												</a>
											<?php endif; ?>
																
										<?php else : // WP 3.6 Format Code follows ?>		
																					
										 	<?php if ( has_post_format( 'image' )) : ?>
												<?php the_post_format_image(); ?>
											<?php elseif ( has_post_format( 'video' )) : ?>
												<?php the_post_format_video(); ?>
											<?php elseif ( has_post_format( 'audio' )) : ?>
												<?php the_post_format_audio(); ?>
											<?php else : ?>
												<?php if (has_post_thumbnail( $post->ID )) : ?>
													<?php include( 'includes/load-image-values.php' ); 											
													if ($open_lightbox == 'Yes') {
														$the_featured_link = $lightbox_link;
													} else {
														$the_featured_link = get_permalink();
													} ?>
													<a href="<?php echo $the_featured_link; ?>">
														<img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php the_title(); ?>" />
													</a>
												<?php endif; ?>
											<?php endif; ?>
											
										<?php endif; ?>
								 	</div>
									
								</div>
								<!-- /Module Container -->							
								
							<?php else : ?>
							
								<!-- HYBRID Module Container -->					
								<div class="<?php echo $columns; ?> hybrid-module module-container
									<?php $post_slug = str_replace(" ", "-",$post->post_name);
										$postcats = get_the_category();
										if ($postcats) {
										  foreach($postcats as $cat) {
											echo urldecode($cat->slug) . ' ';
											}
										}
									?>" >
									
									<div id="post-<?php the_ID(); ?>" class="module <?php echo $lightbox_hook; ?>">		
										<?php // Check for 3.6. If it doesn't exist, just kick out a featured image.
										$mdnw_wp_version = get_bloginfo( 'version' ); 									
										if(!strstr($mdnw_wp_version, '3.6')) : 						
										?>	
										
											<?php if (has_post_thumbnail( $post->ID )) : ?>
												<?php include( 'includes/load-image-values.php' ); 											
												if ($open_lightbox == 'Yes') {
													$the_featured_link = $lightbox_link;
												} else {
													$the_featured_link = get_permalink();
												} ?>
												<a href="<?php echo $the_featured_link; ?>">
													<img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php the_title(); ?>" />
												</a>
											<?php endif; ?>
																
										<?php else : // WP 3.6 Format Code follows ?>		
																					
										 	<?php if ( has_post_format( 'image' )) : ?>
												<?php the_post_format_image(); ?>
											<?php elseif ( has_post_format( 'video' )) : ?>
												<?php the_post_format_video(); ?>
											<?php elseif ( has_post_format( 'audio' )) : ?>
												<?php the_post_format_audio(); ?>
											<?php else : ?>
												<?php if (has_post_thumbnail( $post->ID )) : ?>
													<?php include( 'includes/load-image-values.php' ); 											
													if ($open_lightbox == 'Yes') {
														$the_featured_link = $lightbox_link;
													} else {
														$the_featured_link = get_permalink();
													} ?>
													<a href="<?php echo $the_featured_link; ?>">
														<img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php the_title(); ?>" />
													</a>
												<?php endif; ?>
											<?php endif; ?>
											
										<?php endif; ?>
								 	</div>
	
									<div class="module-meta">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>							
										<?php the_category(' ') ?>
										<!-- <a href="<?php the_permalink(); ?>" class="read_more_button"><?php _e('More', 'skeleton') ?> &raquo;</a> -->
									</div> 	
													
								</div>
								<!-- /Hybrid Module Container -->
							
							<?php endif; ?>
					
					<?php endif; ?>												
					<?php endwhile; ?>
					
				</div>
			</div>	
		</div>
		<!-- /End 960 Container -->
		
		<!-- Pagination -->
		<div class="<?php echo $content_width_class; ?> super-container">
			<div class="">
				<div class="<?php echo $layout_class; ?> content">
					<div class="content-inner">
						<?php get_template_part( 'includes/element', 'pagination' ); ?>	
					</div>
				</div>
			</div>
		</div>	
	
	</div>
</div>
<!-- /End Super Container -->

<!-- ============================================== -->	

<?php get_footer(); ?>