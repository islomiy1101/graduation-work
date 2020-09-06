<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>



<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />



<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>



<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />



<!--[if lte IE 6]>



<style type="text/css">



</style>



<![endif]-->



</head>

<body>



	<div class="wrapper">
	


		<div class="top">
		
			<div class="nav">
	<ul>
		<li><a href="<?php bloginfo('url'); ?>" class="<?php if (is_home() || is_single()) {echo ' active';} ?>"><span>Home</span></a></li>
		<?php wp_list_pages2(); ?> 
	</ul>
	
		
		</div>

		<div class="search">
			 <form class="searchform" method="get" action="<?php bloginfo('home'); ?>/" name="f">
			<input name="s" type="text" class="s" value="Search your keyword" onfocus="value=''" />
			<input name="go" type="submit" class="go" value="Search" />
			</form> 
</div>

			</div>

	</div>

	

	<div class="menu">
	
		<div class="home">
			<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</div>		

	</div> 

	

	<div class="topcontent">

	<div class="bottomcontent">

	<div class="centercontent">

	

	<div class="contentwrapper">