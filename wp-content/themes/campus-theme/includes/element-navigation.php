<!-- DESKTOP MENU -->
<div class="sixteen columns" id="menu"> 
				
	<div class="navigation">
		
		<!-- DEFAULT NAVIGATION -->
		<?php 
		if ( has_nav_menu( 'default_menu' ) ) :

			wp_nav_menu( array(
				 'container' =>false,
				 'theme_location' => 'default_menu',
				 'menu_class' => 'sf-menu',
				 'echo' => true,
				 'before' => '',
				 'after' => '',
				 'link_before' => '',
				 'link_after' => '',
				 'depth' => 0,
				 'walker' => new description_walker())
			 ); 
			
		else:

			wp_nav_menu( array(
				 'container' =>false,
				 'menu_class' => 'sf-menu'
			 )); 

		endif;
		?>
		<!-- /DEFAULT NAVIGATION -->
					 
	</div>	
	
</div>		 
<!-- /DESKTOP MENU -->

<!-- MOBILE MENU -->
<div id="responsive-nav" class="dl-menuwrapper">
	<button>Open Menu</button>
			
	<?php 
	
	if ( has_nav_menu( 'responsive_menu' ) ) :

		wp_nav_menu( array(
			 'container' =>false,
			 'theme_location' => 'responsive_menu',
			 'menu_class' => 'dl-menu',
			 'echo' => true,
			 'before' => '',
			 'after' => '',
			 'link_before' => '',
			 'link_after' => '',
			 'depth' => 0,
			 'walker' => new mobile_walker())
		 ); 			
		
	else:

		wp_nav_menu( array(
			 'container' =>false,
			 'menu_class' => 'sf-menu'
		 )); 

	endif;
	
	?>

</div>
<!-- /END MOBILE MENU -->