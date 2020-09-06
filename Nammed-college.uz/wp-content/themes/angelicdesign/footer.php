<hr class="clear" />
</div><!--/page -->
</div><!--/wrapper -->

<div id="footerbg">
  <div id="footer">
	<div style="width: 760px; margin-left: 0px; background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/footer-top.gif); background-repeat: repeat-x; height: 25px;"></div>
	<!--about text start -->
	<div class="footer-meta">

		<h4>Meta</h4>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
				<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
				<li><a href="http://wordpress.org/" title=" WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
				<li class="rss"><a href="feed:<?php bloginfo('rss2_url'); ?>">Entries RSS</a></li>
				<li class="rss"><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" class="rss">Comments RSS</a></li>
			</ul>
	</div>
	<!--about text end -->
	
  <hr class="clear" />
  </div>
<!--/footer -->

<div id="credits" >
	<div class="alignleft"><div class="alignleft"><?php the_time('Y'); ?> <?php bloginfo('name'); ?>. <!-- Start -->Wordpress themes<!-- End --></div> 
</div>
  </div>
<?php wp_footer(); ?>
<div style="width: 800px; margin-left: auto; margin-right: auto;"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bottom.gif" alt="bottom" /></div>
</body>
</html>