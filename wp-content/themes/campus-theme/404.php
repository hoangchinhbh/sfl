<?php get_header(); ?>


<!-- Super Container -->
<div class="super-container main-content-area" id="section-content">

	<!-- 960 Container -->
	<div class="container">
		
		<!-- CONTENT -->
		<div class="eleven columns content">
			
			<!-- 404 MESSAGE -->
			<?php if ( ! have_posts() ) : ?>
				<h1 class="page-title"><span><?php _e('404 Site Error.', 'skeleton'); ?></span></h1><hr class="page-title-hr">
				<div class="the_content">	
					<p><?php _e( 'No results were found for the requested page or post. Try searching below or browsing the page navigation.', 'skeleton' ); ?></p>
						<?php if(class_exists('AJAXY_SF_WIDGET')) :
							get_search_form();
						else : ?>			
							<?php get_template_part( 'includes/element', 'searchform' ); ?>
						<?php endif; ?>
					<br />
				</div>
			<?php endif; ?>
			
			
		</div>	
		<!-- /CONTENT -->
		
		<!-- ============================================== -->
		
		<!-- SIDEBAR -->
		<div class="five columns sidebar">
			
			<?php dynamic_sidebar( '404-widget-area' ); ?>	
				
		</div>
		<!-- /SIDEBAR -->
		
		<hr />
		
	</div>
	<!-- /End 960 Container -->
	
</div>
<!-- /End Super Container -->


<!-- ============================================== -->


<?php get_footer(); ?>