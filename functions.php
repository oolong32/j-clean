<?php function get_feed_pic($chibadura) { //holt thumbnails, titel und permalink von aktuellen blogeinträgen
				$feed = new SimplePie($chibadura);
				$feed->handle_content_type();
				$item = $feed->get_item();
				$enclosure = $item->get_enclosure();
				echo '<span class="alingleft"><a href="' . $item->get_permalink() . '" title="' . $feed->get_title() . '" target="_blank"><img src="' . $enclosure->get_thumbnail() . '"/></a></span>';
}
if (!is_admin()) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false);
	wp_enqueue_script('jquery');
}

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

function admin_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.ico" />';
}
add_action('admin_head', 'admin_favicon');

if ( function_exists('register_sidebar') )
    register_sidebar(); ?>