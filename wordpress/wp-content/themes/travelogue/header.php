<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/nifty.js"></script>
	<script type="text/javascript">
		window.onload=function(){
		if(!NiftyCheck())
			return;
		Rounded("div.boxhead_cont","top","transparent","#CFC2A1","border #847563");
		Rounded("div.boxbody_cont","bottom","transparent","#E9E2DA","small border #847563");
		Rounded("div.post_cal","top","transparent","#AC0605","small border #A6A6A6");
		Rounded("div.post_cal","bottom","transparent","#AC0605","small border #A6A6A6");
		Rounded("div.mini_sidebar_widget_cont","all","transparent","#FFF","small border #45392A");
		}
	</script>

	<?php wp_get_archives('type=monthly&format=link'); ?>

	<?php wp_head(); ?>
</head>

<body>
<div id="wrap">
	<div id="headerElements">
		<div id="polaroid">
			<div id="polaroidimage">
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/randimages/rotatorm.php" width="202px" height="187px" alt="Polaroid Photo" /></a>
			</div>
			<div id="polaroidcaption"><p><?php printf(__('Pictures from %s', 'travelogue'), get_bloginfo('name')); ?></p></div>
		</div>
		<div id="header-img">
			<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h3 class="tagline"><?php bloginfo('description'); ?></h3>
		</div>
		<div id="subheader">
			<div id="search"><?php include (TEMPLATEPATH . '/topsearchform.php'); ?></div>
			<div id="cats"><?php include (TEMPLATEPATH . '/dropdowncats.php'); ?></div>
		</div>
	</div>