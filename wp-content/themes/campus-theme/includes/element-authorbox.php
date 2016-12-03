<?php 
$ot_author_box_check = ot_get_option('show_author_box');
$post_author_box_check = get_custom_field('show_author_box');
if( $ot_author_box_check == 'Yes' AND $post_author_box_check == 'Yes' ) : ?>
	<hr/>
	<div class="author-wrapper">    	
		<div class="author-description">
			<div class="author-avatar">
			<a href="<?php the_author_meta('user_url'); ?>">
				<?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>
			</a>
			</div>	
			
			<h2>A little more about <?php echo get_the_author_link(); ?>...</h2>
			<?php echo the_author_meta('description'); ?>	
		</div>
	</div>
<?php endif; ?>