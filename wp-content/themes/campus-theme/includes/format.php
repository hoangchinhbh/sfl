<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>	


	<?php if ( is_single() ) : 
		$title_class = "page-title";
	else : 
		$title_class = "entry-title";
	endif; ?>
	

	<?php if(ot_get_option('show_title_blog_post') != "off" ) : ?>
		<h1 class="<?php echo $title_class; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php endif; ?>


	<?php if(ot_get_option('show_title_hr_blog_post') != "off" ) : ?>
		<hr class="page-title-hr" />
	<?php endif; ?>

	
	<?php if(ot_get_option('show_post_meta_blog_post') != "off" ) : ?>

		<div class="entry-meta"> 				
			<div class="meta-string">

				<?php if(ot_get_option('show_format_blog_post') != "off" ) : ?>
					<span class="format-icon"><i class="gen-enclosed foundicon-page" title="Standard Post"></i></span>
				<?php endif; ?>

				<?php if(ot_get_option('show_author_blog_post') != "off" ) : ?>
					<span class="bullet">●</span>
					<?php the_author_posts_link(); ?>
				<?php endif; ?>

				<?php if(ot_get_option('show_date_blog_post') != "off" ) : ?>
					<span class="bullet">●</span>						
					<?php the_time('F j, Y'); ?>
				<?php endif; ?>

				<?php if(ot_get_option('show_categories_blog_post') != "off" ) : ?>
					<span class="bullet">●</span>
					<?php the_category(' ') ?>
				<?php endif; ?>

				<?php if(ot_get_option('show_comments_count_blog_post') != "off" ) : ?>
					<span class="bullet">●</span>			
					<?php comments_popup_link(__ ('No Comments', 'skeleton'), __ ('1 Comment', 'skeleton'), _n ('% comment', '% comments', get_comments_number (),'skeleton')); ?>
				<?php endif; ?>

			</div>
		</div>

	<?php endif; ?>
	
	<?php if(ot_get_option('show_sub_meta_hr_blog_post') != "off" ) : ?>
		<hr class="sub-meta-hr" />
	<?php endif; ?>
	
	<?php if(ot_get_option('show_featured_blog_post') != "off" ) : ?>
		<?php if (has_post_thumbnail( $post->ID )) : ?>
			<?php $image_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );  ?>
			<div class="entry-media">
				<?php if ( !is_single() ) : ?><a href="<?php the_permalink(); ?>"><?php endif; ?>
					<img src="<?php echo $image_full[0]; ?>" alt="<?php the_title(); ?>" />
				<?php if ( !is_single() ) : ?></a><?php endif; ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	
	
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
	
	<!-- TAGS SPACE -->	
	<?php if(ot_get_option('show_tags_blog_post') == "on" ) : ?>
		<?php $post_tags = wp_get_post_tags($post->ID);
		if(!empty($post_tags)) { ?>
		<div class="entry-meta-bottom">	
			<?php 
			the_tags(__('Tags: ', 'skeleton'), ', ', ''); 
			?>				
		</div>
		<?php } ?>
	<?php endif; ?>
	<!-- /TAGS SPACE -->

</article>