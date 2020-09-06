<div class="side">
<div class="rss">
	<center><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rss.jpg" alt="Subscribe feed" style="border:none;"></img></a>
</center>
</div>



<div class="sidead"><center>
	
	
<a href='#' target='_blank' title="feel designs"><img src="<?php bloginfo('template_directory'); ?>/images/100x100.jpg" /></a>
<a href='#' target='_blank' title="feel designs"><img src="<?php bloginfo('template_directory'); ?>/images/100x100.jpg" /></a>
<a href='#' target='_blank' title="feel designs"><img src="<?php bloginfo('template_directory'); ?>/images/100x100.jpg" /></a>
<a href='#' target='_blank' title="feel designs"><img src="<?php bloginfo('template_directory'); ?>/images/100x100.jpg" /></a>



</center></div>



<div class="sidebar">

	<ul>

		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar') ) : else : ?>
		

			<?php wp_list_categories('orderby=name&show_count=0&title_li=<h2>Categories</h2>'); ?>

			<li>

				<h2>Pages</h2>

				<ul>
				<li><a href="<?php bloginfo('url'); ?>" class="<?php if (is_home() || is_single()) {echo ' active';} ?>" title="<?php bloginfo('name'); ?>">Home</a></li>
				<?php wp_list_pages('title_li='); ?>

				</ul>

			</li>

								<li>
			
			<h2>Recent Posts</h2>

			<ul>

			<?php wp_get_archives('type=postbypost&limit=05'); ?>			
			
			</ul>

			</li>

			<li>

				<h2>Archives</h2>

				<ul>

					<?php wp_get_archives('type=monthly&limit=12'); ?>

				</ul>

			</li>	



			<li>

				<h2>Blogroll</h2>

				<ul>

					<?php get_links(-1, '<li>', '</li>', 'between', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>

				</ul>

			</li>

						<li>

				<h2>Meta</h2>

				<ul>

					<li><?php wp_loginout(); ?></li>
							<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
						    <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
						 	<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>

				</ul>

			</li>



		<?php endif; ?>

	</ul>

</div>
</div>