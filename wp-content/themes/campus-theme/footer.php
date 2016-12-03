

<!-- ============================================== -->


<!-- Super Container | Footer Widget Space (Optional) -->
<?php if (get_option_tree('footer_widgets') != 'No') : ?>

	<?php  // Set the columns class for each module.
		if(ot_get_option('footer_columns_count') != '') : 
		$footer_columns_count = ot_get_option('footer_columns_count');
		else : 
		$footer_columns_count = "";
		endif;
	?> 

<div class="super-container full-width" id="section-footer">

	<!-- 960 Container -->
	<div class="container">
		<!-- footer -->
		<footer>
			<div class="sixteen columns alpha omega" id="footer-row"> 
				<div class="<?php echo $footer_columns_count; ?>">
				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-widget-1') ) ?>
				</div>
				<div class="<?php echo $footer_columns_count; ?>">
				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-widget-2') ) ?>
				</div>
				<div class="<?php echo $footer_columns_count; ?>">
				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-widget-3') ) ?>
				</div>
				<div class="<?php echo $footer_columns_count; ?>">
				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-widget-4') ) ?>
				</div>
				<div class="<?php echo $footer_columns_count; ?>">
				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-widget-5') ) ?>
				</div>
				<div class="<?php echo $footer_columns_count; ?>">
				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-widget-6') ) ?>
				</div>
			</div>
		</footer>
		<!-- /End Footer -->

	</div>
	<!-- /End 960 Container -->
</div>
<!-- /End Super Container -->
<?php endif; ?>


<!-- ============================================== -->


<!-- Super Container - SubFooter Space -->
<div class="super-container full-width" id="section-sub-footer">

<!-- 960 Container -->
<div class="container">

	<div class="sixteen columns">
		<div class="copyright twelve columns alpha"><?php if (get_option_tree('footer_blurb_left')) : echo get_option_tree('footer_blurb_left'); endif; ?></div>
		<?php if (get_option_tree('footer_social') != 'No') : get_template_part( 'includes/element', 'getsocial' ); endif; ?>
		<div class="colophon"><?php if (get_option_tree('footer_blurb_right')) : echo get_option_tree('footer_blurb_right'); endif; ?></div>
	</div>

</div>
<!-- /End 960 Container -->
</div>
<!-- /End Super Container -->


<!-- ============================================== -->


<?php wp_footer(); ?>
</body>
</html>