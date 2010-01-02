<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="http://cadcc.cl/cadcc.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body id="top">

<div id="layout_wrapper_outer">
<div id="layout_wrapper">

	<div id="layout_top">
		
		<div id="site_title">
			<h1><a href="<?php echo get_option('home'); ?>"><img src="http://cadcc.cl/images/cadcc.png" alt="<?php bloginfo('name'); ?>" /></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</div>

	</div>

	<div id="layout_body_outer">
	<div id="layout_body">

		<div id="navigation">

			<div id="nav1">

				<ul>
					<li<?php if ( is_home() ) : ?> class="current_page_item"<?php endif; ?>><a href="<?php echo get_option('home'); ?>">Home</a></li>
					<?php wp_list_pages('title_li=&depth=1'); ?>
				</ul>

				<div class="clearer">&nbsp;</div>

			</div>

			<?php the_subpages(); ?>

		</div>

		<div id="main">

			<div class="left" id="content_outer">
				<div id="content">
