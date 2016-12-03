<?php get_header(); ?>

<?php 

global $layout_class;
global $content_width_class;
global $content_width;
global $sidebar_class;
global $page_secondarypage_remove_sidebar;
global $page_defaultpage_remove_sidebar;

if(get_custom_field('page_defaultpage_remove_sidebar') == 'Yes' && get_custom_field('page_secondarypage_remove_sidebar') == 'Yes') :
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

			<?php /* Page Title on Product Pages */ /*
			<?php if ( ! is_singular( 'product' ) ) : ?>
				<h1 class="page-title title title-large"><?php woocommerce_page_title(); ?>: </h1>
				<hr class='page-title-hr'>
			<?php endif; ?>
			*/ ?>			
						
			<?php woocommerce_content(); ?>
			
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