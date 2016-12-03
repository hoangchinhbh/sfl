<!-- Top Hat -->
<?php if (get_option_tree('top_hat') != 'No') { ?>
<div class="" id="section-tophat">

	<!-- 960 Container -->
	<div class="container">			
		
		<div class="sixteen columns">
					
			<div class="columns social alpha">
				<?php if(class_exists('AJAXY_SF_WIDGET')) :
					get_search_form();
				else : ?>			
					<?php get_template_part( 'includes/element', 'searchform' ); ?>
				<?php endif; ?>
				
				<?php get_template_part( 'includes/element', 'getsocial' ); ?>
			</div>						
			
			<div class="tagline omega"><span style="color: red"><span style="font-size: 32px">
				<?php echo get_option_tree('top_hat_blurb'); ?></span></span>
			</div>	

			<!-- Banner -->
			<?php if (get_option_tree('fp_banner')) : ?> 
			<div class="fp_banner_space" >
				<p> </p>
			</div>				
			<?php endif; ?>	
			<!-- /End Banner -->
			
		</div>
		
	</div>
	
</div>
<?php } else{} ?>