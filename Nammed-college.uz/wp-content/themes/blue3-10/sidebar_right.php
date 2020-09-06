
		<div id="sidebar_right">
			<ul>
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ){
			?>
			<?
			} else { ?>
            
       		<? if ( function_exists('wp_tag_cloud')){ ?>
			<li class="widget_tag_cloud">
            	<h2>tag cloud</h2>
                <ul>
                	<li class="noline"><?php wp_tag_cloud('smallest=8&largest=22&number=50'); ?></li>
                </ul>
			</li>
            <? } ?>
            
			<?php wp_list_bookmarks(); ?>

			<?php } ?>

			<li class="widget_meta"><h2>Meta</h2>
				<ul>
					<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
					<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
					<li><a href="http://www.nattywp.com/" title="Wordpress Themes">Wordpress Themes</a></li>
					<?php wp_meta(); ?>
				</ul>
			</li>
            

			</ul>
		</div>
