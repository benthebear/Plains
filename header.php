<!DOCTYPE html SYSTEM "about:legacy-compat">
<html <?php language_attributes(); ?>>
<head>	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	<title>
		   <?php 	wp_title( '|', true, 'right' ); bloginfo( 'name' );   ?>
	</title>	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>	
	
		<header class="region region-header">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<p class="description"><?php bloginfo('description'); ?></p>
			<hr/>
		</header>
    