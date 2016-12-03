<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>	

	<?php if ( is_single() ) : 
		$title_class = "page-title";
	else : 
		$title_class = "entry-title";
	endif; ?>
	
	<div class="entry-media">
		<?php the_post_format_audio(); ?>
	</div>
		
	<h1 class="<?php echo $title_class; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		
	<?php // THIS IS THE POST CONTENT
	if ( is_single() ) : ?>
		
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		
		<?php wp_link_pages('before=<hr /><div id="page-links"><span>Pages:</span>&after=</div>&link_before=<div>&link_after=</div>'); 		
		get_template_part("includes/element", "authorbox");	 ?>
		
		<hr />		
		
		<?php comments_template(); ?> 
		<div class="hidden"><?php wp_list_comments('type="comment&avatar_size=64'); ?></div>
		<?php next_comments_link(); previous_comments_link(); ?>
		<div class="hidden"><?php comments_template( '', true ); ?></div>		
			
	<?php else :  ?>
		
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div>
		
	<?php endif; ?>
	
	
	<div class="entry-meta"> 				
		<div class="meta-string">
			<span class="format-icon"><i class="gen-enclosed foundicon-mic" title="Audio Post"></i></span> 
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
	
	<!-- TAGS SPACE - HIDDEN -->	
	<?php $post_tags = wp_get_post_tags($post->ID);
	if(!empty($post_tags)) { ?>
	<div class="entry-meta-bottom hidden">	
		<?php the_tags('',' '); ?>				
	</div>
	<?php } ?>
	<!-- /TAGS SPACE -->

</article>