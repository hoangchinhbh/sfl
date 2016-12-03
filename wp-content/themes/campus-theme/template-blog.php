<?php
/*
 * Template Name: Blog
*/

get_header(); 



if(get_custom_field('defaultpage_remove_sidebar') == 'Yes' && get_custom_field('secondarypage_remove_sidebar') == 'Yes') :
	$layout_class = 'sixteen columns'; 
	$content_width_class = 'full-width';	
	$content_width = "1100";
	elseif(get_custom_field('defaultpage_remove_sidebar') == 'Yes' && get_custom_field('secondarypage_remove_sidebar') == 'No') :
	$sidebar_class= 'five columns'; 
	$layout_class= 'eleven columns'; 
	$content_width_class = 'normal-width';
	$content_width = "750";
	elseif(get_custom_field('defaultpage_remove_sidebar') == 'No' && get_custom_field('secondarypage_remove_sidebar') == 'Yes') :
	$sidebar_class= 'five columns';
	$layout_class= 'eleven columns'; 
	$content_width_class = 'normal-width';
	$content_width = "750";
	else :
	$sidebar_class= 'three columns';
	$layout_class= 'ten columns'; 
	$content_width_class = 'normal-width';		
	$content_width = "680";
	endif;




?>

<!-- ============================================== -->

<!-- Super Container -->
<div class="super-container main-content-area <?php echo $content_width_class; ?>" id="section-content">

	<!-- 960 Container -->
	<div class="container">

		<!-- SIDEBAR 2 -->
		<?php if(get_custom_field('secondarypage_remove_sidebar') != 'Yes') : ?>
			<div class="sidebar secondary-sidebar <?php echo $sidebar_class; ?>">			
			<?php dynamic_sidebar( 'secondary-widget-area' ); ?>	
		</div>
		<?php endif; ?>
		<!-- /SIDEBAR 2 -->			
				
		<!-- CONTENT -->
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
							
				<!-- ============================================== -->								
				
				<?php include( 'includes/query-blogtemplate.php' ); ?>
	        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	               
						<?php // Check for 3.6. If it doesn't exist, just kick out a featured image.
						$mdnw_wp_version = get_bloginfo( 'version' ); 									
						if(strstr($mdnw_wp_version, '3.6')) : // If the version is 3.6...
							$format = get_post_format();
						else :
							$format = '';
						endif;
						get_template_part( 'includes/format', $format ); ?>
	
	            <?php endwhile; else: ?>
	       
	                <div class="post">
	                      <p><?php _e('Sorry, no posts matched your criteria.', 'skeleton') ?></p>
	                </div><!-- /.post -->
	               
	            <?php endif; ?>	 
	            <?php get_template_part( 'includes/element', 'pagination' ); ?>		               
	            <?php wp_reset_query(); ?>					
								
			</div>
		</div>	
		<!-- /CONTENT -->		
		
		<!-- ============================================== -->
				
		<!-- SIDEBAR -->
		<?php if(get_custom_field('defaultpage_remove_sidebar') != 'Yes') : ?>
			<div class="sidebar primary-sidebar <?php echo $sidebar_class; ?>">			
			<?php dynamic_sidebar( 'default-widget-area' ); ?>	
		</div>
		<?php endif; ?>
		<!-- /SIDEBAR -->	
		
	</div>
	<!-- /End 960 Container -->
	
</div>
<!-- /End Super Container -->

<!-- ============================================== -->

<?php get_footer(); ?>