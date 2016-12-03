<?php get_header(); ?>

<?php if(get_custom_field('page_defaultpage_remove_sidebar') == 'Yes' && get_custom_field('page_secondarypage_remove_sidebar') == 'Yes') :
	$layout_class = 'sixteen columns'; 
	$content_width_class = 'full-width';	
	$content_width = "1100";
	elseif(get_custom_field('page_defaultpage_remove_sidebar') == 'Yes' && get_custom_field('page_secondarypage_remove_sidebar') == 'No') :
	$sidebar_class= 'five columns'; 
	$layout_class= 'eleven columns'; 
	$content_width_class = 'normal-width';
	$content_width = "750";
	elseif(get_custom_field('page_defaultpage_remove_sidebar') == 'No' && get_custom_field('page_secondarypage_remove_sidebar') == 'Yes') :
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
		<?php if(get_custom_field('page_secondarypage_remove_sidebar') != 'Yes') : ?>
			<div class="sidebar secondary-sidebar <?php echo $sidebar_class; ?>">			
			<?php dynamic_sidebar( 'secondary-widget-area' ); ?>	
		</div>
		<?php endif; ?>
		<!-- /SIDEBAR 2 -->
		
		<!-- CONTENT -->
		<div class="content <?php echo $layout_class; ?>">
			<div class="content-inner">						
						
			<!-- THE POST LOOP -->  
			<?php while ( have_posts() ) : the_post(); ?>
				
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

				<!-- THE PAGE CONTENT -->
				<?php the_content(); ?>
						
				<!-- PAGINATION for Multiple pages -->
				<?php wp_link_pages('before=<br /><div id="page-links"><span>Pages:</span>&after=</div><hr />&link_before=<div>&link_after=</div>'); ?>				
				
				<!-- COMMENTS SECTION -->
				<hr />
				<?php comments_template(); ?> 
				<div class="hidden"><?php wp_list_comments('type="comment&avatar_size=64'); ?></div>
				<?php next_comments_link(); previous_comments_link(); ?>
				<div class="hidden"><?php comments_template( '', true ); ?></div>
				<!-- COMMENTS-SECTION -->
				
				
			<?php endwhile; ?>	
			
			</div>
		</div>
		<!-- /CONTENT -->
		
		<!-- ============================================== -->
		
		<!-- SIDEBAR -->
		<?php if(get_custom_field('page_defaultpage_remove_sidebar') != 'Yes') : ?>
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