<?php get_header(); ?>

<?php 
		$layout_class= 'eleven columns'; 
		$content_width_class = 'normal-width';		
		$content_width = "750";
 ?>

<!-- ============================================== -->


<!-- Super Container -->
<div class="super-container main-content-area <?php echo $content_width_class; ?>" id="section-content">

	<!-- 960 Container -->
	<div class="container">				
		
		<!-- CONTENT -->
		<div class="content <?php echo $layout_class; ?>">
						
								
			<!-- CONDITIONAL TITLE -->
			<?php if ( is_tag() ) :	?>			
				<h1 class="page-title"><span><?php single_tag_title(); ?></span></h1><hr class="page-title-hr">
			<?php elseif ( is_category() ) :	?>			
				<h1 class="page-title"><span><?php single_cat_title(); ?></span></h1><hr class="page-title-hr">
			<?php elseif ( is_archive() ) : ?>			
				<h1 class="page-title"><span><?php single_month_title(); ?></span></h1><hr class="page-title-hr">
			<?php elseif ( is_author() ) : ?>			
				<h1 class="page-title"><span><?php the_author(); ?></span></h1><hr class="page-title-hr">			
			<?php elseif ( is_search() ) :	?>		
				<h1 class="page-title"><span><?php _e('Search Results for', 'skeleton') ?> "<?php the_search_query() ?>"</span></h1><hr class="page-title-hr">
			<?php endif; ?>	
						
			
			<!-- ============================================== -->
			
			
			<!-- QUERY + START OF THE LOOP -->
			<div id="content">
				<div class="content-inner">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
						<?php if (function_exists( 'the_post_format_image' )) : //Check for WP 3.6 Post Format Functionality
							$format = get_post_format();
						else :
							$format = '';
						endif;
						get_template_part( 'includes/format', $format ); ?>
					<?php endwhile; 

					else : ?>
						<p><?php _e( 'Still not finding what your looking for? Try searching below or browsing the page navigation.', 'skeleton' ); ?></p>
						<?php if(class_exists('AJAXY_SF_WIDGET')) :
							get_search_form();
						else : ?>			
							<?php get_template_part( 'includes/element', 'searchform' ); ?>
						<?php endif; ?>
					<br />
					<?php endif; ?>
				</div>
			</div>
			<!-- /POST LOOP -->
			
			
			<!-- ============================================== -->
			
			
			<?php get_template_part( 'includes/element', 'pagination' ); ?>
		
		
		</div>
		<!-- ============================================== -->
		
		
		<!-- SIDEBAR -->
		<div class="five columns sidebar omega">
			
			<?php dynamic_sidebar( 'default-widget-area' ); ?>	

		</div>
		<!-- /SIDEBAR -->		
				

	</div>
	<!-- /End 960 Container -->
	
</div>
<!-- /End Super Container -->


<!-- ============================================== -->


<?php get_footer(); ?>