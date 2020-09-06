<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package cw-magazine
 */
 
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title>Nammed-college.uz</title>
<!--<title><?php wp_title( '|', true, 'right' ); ?></title>-->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
		<div class="header-top">
			<div class="container">
  
			<?php
			wp_nav_menu( 
				array( 
					'theme_location' => 'top-menu-header',
					'container' => 'div', 
					'container_class' => 'main-navigation',
					'menu_id' => 'nav2'
				)
			); 
			?>
        	<div class="social-icons-header">
            
            
			</div><!-- .social-icons-header -->
		
			</div><!-- .container -->
		</div><!-- .header-top -->
        
	<div class="header-middle-wrap">
		<div class="container">
            <div class="logo">
    
    
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php 
						if( get_theme_mod('logo_header') ):
							echo '<img src="'.get_theme_mod('logo_header').'" alt="'.get_bloginfo( 'name' ).'" />';
						else:    
							echo get_bloginfo( 'name' ); 
							echo '<span >'.get_bloginfo( 'description' ).'</span>'; 
						endif;
					?>
                </a>
            </div><!-- .logo -->
    
            <div class="ad-header">
    
                <?php if ( is_active_sidebar( 'ad-banner' ) ) : ?>
                      <?php dynamic_sidebar( 'ad-banner' ); ?>
                <?php endif; ?>
    
            </div>
        
            <div class="main-menu">
                <?php wp_nav_menu( 
						array(	
							'theme_location' => 'main-menu-header', 
                            'container' => 'div', 
                            'container_class' => 'main-navigation',
                            'menu_id' => 'nav',
                            'fallback_cb' => false
						) 
					); 
				?>

                <?php get_search_form(); ?>
   
            </div><!-- .main-menu -->
		</div><!-- .container -->
	</div><!-- .header-middle-wrap -->
        
        <div class="clear"></div>
    </div><!-- .container -->
</header><!-- .site-header -->
<div class="wrapper template-page">
	<div class="container">
