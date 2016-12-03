<?php get_header(); ?>

<?php if(get_custom_field('remove_sidebar') == 'Yes') : 			
		$layout_class = 'sixteen columns'; 
		$content_width_class = 'full-width';	
		$content_width = "1100";
		else :
		$layout_class= 'eleven columns'; 
		$content_width_class = 'normal-width';		
		$content_width = "750";
		endif; ?>
		
<!-- ============================================== -->
  
<!-- Super Container -->
<div class="super-container main-content-area <?php echo $content_width_class; ?>" id="section-content">

	<!-- 960 Container -->
	<div class="container">		
		
		<!-- CATEGORY QUERY + START OF THE LOOP -->
		<?php while (have_posts()) : the_post(); ?>
		
		<!-- THE CONTENT -->
		<div class="content <?php echo $layout_class; ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="content-inner">
				<?php /* if (function_exists( 'the_post_format_image' )) : //Check for WP 3.6 Post Format Functionality
						$format = get_post_format();
					else :
						$format = '';
					endif;
					get_template_part( 'includes/format', $format );  */?>
				<?php get_template_part( 'includes/format', 'single' ); ?>
			</div>
		</div>	
		<!-- /CONTENT -->	
		
		<?php endwhile; ?>
		<!-- /POST LOOP -->		
			
		<!-- ============================================== -->			
		
		<?php if(get_custom_field('remove_sidebar') == 'Yes') : else : ?>
		<!-- SIDEBAR -->
		<div class="five columns sidebar">			
			<?php dynamic_sidebar( 'default-widget-area' ); ?>	
		</div>
		<!-- /SIDEBAR -->	
		<?php endif; ?>
						
	</div>
	<!-- /End 960 Container -->
	
</div>
<!-- /End Super Container -->

<!-- ============================================== -->

<?php get_footer(); ?>