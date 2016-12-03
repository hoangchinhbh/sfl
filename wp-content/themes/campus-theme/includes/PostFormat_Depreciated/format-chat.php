<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>	

	<?php if ( is_single() ) : 
		$title_class = "page-title";
	else : 
		$title_class = "entry-title";
	endif; ?>
	
	<h1 class="<?php echo $title_class; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

	<div class="entry-meta"> 				
		<div class="meta-string">
			<span class="format-icon"><i class="gen-enclosed foundicon-smiley" title="Chat Post"></i></span>
			<span class="bullet">●</span>
			<?php the_author_posts_link(); ?>
			<span class="bullet">●</span>						
			<?php the_time('F j, Y'); ?>
			<span class="bullet">●</span>
			<?php the_category(' ') ?>
			<span class="bullet">●</span>
			<?php comments_popup_link(__ ('No Comments', 'skeleton'), __ ('1 Comment', 'skeleton'), _n ('% comment', '% comments', get_comments_number (),'skeleton')); ?>
		</div>
	</div>
	
	<hr class="sub-meta-hr" />	
	
	<div class="entry-media">
		<?php the_post_format_chat(); ?>
	</div>
	

</article>