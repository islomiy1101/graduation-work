<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE ]>
<link rel="stylesheet" href="<?=bloginfo('template_url')?>/style-ie.css" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 6]>
<link rel="stylesheet" href="<?=bloginfo('template_url')?>/style-ie6.css" type="text/css" media="screen" />
<![endif]-->

<?php wp_head(); ?>
</head>

<body>
<div id="body_page">
<div id="page">

<div id="header">
	<div id="header_title">
        <h1>
            <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a><span class="description"><?php bloginfo('description'); ?></span>
        </h1>
    </div> 
    <div id="header_rss">
       <a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url')?>/images/rss.gif" alt="RSS" /></a>
       <div id="right_search">
            <form method="get" id="searchform_top" action="<?php bloginfo('url'); ?>/">
                <div>
                    <input type="text" value="<?php the_search_query(); ?>" name="s" id="searchform_top_text" />
                    <input type="image" src="<?php bloginfo('template_url')?>/images/go.gif" id="gosearch" />
                </div>
            </form>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div id="menu">
    <ul>
        <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
        <?=wp_list_pages2()?>
    </ul>
    <div class="clear"></div>
</div>

<div id="body">
<div id="body_top">
<div id="body_end">

	<div id="body_left_s">
        <div class="sidebars">
            <?php get_sidebar(); ?>
        </div>
    </div>

	<div id="body_left">
    	<div id="body_left_content">