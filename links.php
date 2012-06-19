<?php
/*
Template Name: Links
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
	<ul class="link_lists">
		<?php wp_list_bookmarks(); ?>
	</ul>

	<div class="feed_container">
		<h2>feeds i follow</h2>
			<?php // get_feed_pic('http://kingcakekrypt.blogspot.com') ?>
			<?php get_feed_pic('http://orgyinrhythm.blogspot.com/') ?>
			<?php get_feed_pic('http://awesometapesfromafrica.blogspot.com/') ?>
			<?php get_feed_pic('http://bolingo69.blogspot.com/') ?>
			<?php get_feed_pic('http://snapcrackleandpops.blogspot.com/') ?>
			<?php // get_feed_pic('http://francorestored.blogspot.com/') ?>
			<?php get_feed_pic('http://ragavibrations.blogspot.com/') ?>
			<?php get_feed_pic('http://katonah-privatepress.blogspot.com/') ?>
			<?php // get_feed_pic('http://holywarbles.blogspot.com/') ?>
	</div>

<?php get_footer(); ?>