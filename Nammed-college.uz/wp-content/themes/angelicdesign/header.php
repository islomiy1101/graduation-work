<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" type="text/css" media="print" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/java.js"></script>
	<script type="text/javascript">
		window.addEvent('domready', function(){
			var accordion = new Accordion('h3.atStart', 'div.atStart', {
				opacity: false,
				onActive: function(toggler, element){
					toggler.setStyle('color', '#ff3300');
				},
				
				onBackground: function(toggler, element){
					toggler.setStyle('color', '#222');
				}
			}, $('accordion'));
			
			
			var newTog = new Element('h3', {'class': 'toggler'}).setHTML('About');
			
			var newEl = new Element('div', {'class': 'element'}).setHTML('<? include ("wp-content/themes/angelicdesign/about.txt"); ?>');
			
			accordion.addSection(newTog, newEl, 0);
		}); 
	</script>
	

<?php wp_head(); ?>
</head>
<body>
  <div id="header">
    <div id="headerimg">
	<div>
	  <span class="title"><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></span> <span class="slogan"><?php bloginfo('description'); ?></span>
	  </div>
	        <div id="search">
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	  </div>

	</div>
	<div id="navi">
		<ul id="nav">
		  <li class="page_item"><a href="<?php echo get_settings('home'); ?>/" title="Home">Home</a></li>
		  <?php $pages = wp_list_pages('sort_column=menu_order&depth=1&title_li=&echo=0');
		  print_r($pages);
		  ?>
		</ul>
	</div>
  </div>
  <!--/header -->
<div id="wrapper">
<div id="page">