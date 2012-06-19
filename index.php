<?php get_header(); ?>
<?php get_sidebar(); ?>
		<div id="content">
	
		<?php if (have_posts()) : ?>
	
			<?php while (have_posts()) : the_post(); ?>
				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<div class="date"><?php the_time(__('F jS, Y', 'j-clean')) ?></div>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'j-clean'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
					<div class="entry">
						<?php the_content(__('Read the rest of this entry &raquo;', 'j-clean')); ?>
					</div>	
				</div>
				<p class="postmetadata"><?php comments_popup_link(__('No Comments &#187;', 'j-clean'), __('1 Comment &#187;', 'j-clean'), __('% Comments &#187;', 'j-clean'), 'comments-link', __('Comments Closed', 'j-clean') ); ?></p>
				 <?php // if(function_exists("wpfblike")) echo wpfblike(); ?>
				
	
			<?php endwhile; ?>
	
			<div class="navigation">
				<div class="alignleft"><p><?php next_posts_link(__('&laquo; Older Entries', 'j-clean')) ?></p></div>
				<div class="alignright"><p><?php previous_posts_link(__('Newer Entries &raquo;', 'j-clean')) ?></p></div>
			</div>
	
		<?php else : ?>
	
			<h2 class="center"><?php _e('Not Found', 'j-clean'); ?></h2>
			<p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'j-clean'); ?></p>
			<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	
		<?php endif; ?>
	
		</div>

<?php get_footer(); ?>
