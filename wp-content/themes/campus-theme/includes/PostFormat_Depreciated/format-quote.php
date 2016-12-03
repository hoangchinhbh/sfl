<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>	

	<div class="entry-media">
		<?php the_post_format_quote(); ?>
	</div>
	
	<div class="entry-meta"> 				
		<div class="meta-string">	
			<span class="format-icon"><i class="social foundicon-chat" title="Quote Post"></i></span> 
			<span class="bullet">●</span>					
			<?php the_time('F j, Y'); ?>
			<span class="bullet">●</span>
			<?php comments_popup_link(__ ('No Comments', 'skeleton'), __ ('1 Comment', 'skeleton'), _n ('% comment', '% comments', get_comments_number (),'skeleton')); ?>
		</div>
	</div>

</article>