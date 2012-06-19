<?php
/*
Template Name: Contact
*/
?><?php get_header(); ?>
<?php get_sidebar(); ?>

		<div id="content" class="narrowcolumn" role="main">
	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="page_content" id="post-<?php the_ID(); ?>">
			<!--<h2><?php the_title(); ?></h2>-->
				<div class="entry">
					<?php the_content('<p class="serif">' . __('Read the rest of this page &raquo;', 'j-clean') . '</p>'); ?>
	
					<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'j-clean') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<p><a href="mailto:<?php echo antispambot(get_the_author_email()); ?>"><?php echo antispambot(get_the_author_email()); ?></a></p>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>

<?php get_footer(); ?>
