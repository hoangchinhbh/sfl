<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>	
	
	<div class="entry-media">
		<?php the_content(); ?><span class="format-icon"><i class="foundicon-flag" title="Status Post"></i></span>
	</div>
	
	<div class="entry-meta"> 				
		<div class="meta-string">
			<?php the_time('F j, Y'); ?>
			<span class="bullet">●</span>			
			<?php comments_popup_link(__ ('No Comments', 'skeleton'), __ ('1 Comment', 'skeleton'), _n ('% comment', '% comments', get_comments_number (),'skeleton')); ?>			
		</div>
	</div>
	
	<?php // THIS IS THE POST CONTENT
	if ( is_single() ) : ?>		
		
		<?php comments_template(); ?> 
		<div class="hidden"><?php wp_list_comments('type="comment&avatar_size=64'); ?></div>
		<?php next_comments_link(); previous_comments_link(); ?>
		<div class="hidden"><?php comments_template( '', true ); ?></div>						
		
	<?php endif; ?>
	
	
</article>