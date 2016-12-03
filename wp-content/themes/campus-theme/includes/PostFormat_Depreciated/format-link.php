<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>	


	<div class="entry-media">
		<h1 class="<?php echo $title_class; ?>"><a href="<?php echo get_post_meta( get_the_ID(), '_format_link_url', true ); ?>"><?php the_title(); ?></a><span class="format-icon"><i class="gen-enclosed foundicon-compass" title="Link Post"></i></span></h1>
	</div>
	
	<div class="entry-content">
		<?php the_content(); ?>
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