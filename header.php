<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="google-site-verification" content="xm3uHOsiA1mV78YQSo0YJZxe_wDkEBmXJL5lKd7IA7M" />
<title><?php bloginfo('name'); ?> <?php wp_title('&raquo;', true, 'left'); ?></title>
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Cantarell:regular,italic' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
</script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="print" 
href="<?php bloginfo('stylesheet_directory'); ?>/print.css" />
<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'j-clean'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed', 'j-clean'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" /> 
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="favicon.png" />
<script src="http://jqueryjs.googlecode.com/files/jquery-1.2.6.min.js" type="text/javascript"></script> 
<script src="<?php bloginfo('stylesheet_directory'); ?>/popup.js" type="text/javascript"></script>  

<!-- Start iPhone -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<link rel="apple-touch-icon" href="<?php echo bloginfo('template_url'); ?>/iphone.png" />
<link media="only screen and (max-device-width: 480px)" href="<?php echo bloginfo('template_url'); ?>/iphone.css" type= "text/css" rel="stylesheet" />
<!-- End iPhone -->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

<?php wp_head(); ?>
</head>
<body>
<div id="general_container">
	<div id="header">
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<img class="alignright no_border" src="<?php bloginfo('stylesheet_directory'); ?>/images/josef_thumb.jpg">
		<p class="description"><?php bloginfo('description'); ?></p>