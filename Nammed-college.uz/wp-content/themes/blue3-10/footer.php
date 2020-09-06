<?php         </div>
    </div>

	<div id="body_right">
        <div class="sidebars">
            <?php get_sidebar_right(); ?>
        </div>
    </div>

</div>
</div>
</div>
    <div class="clear"></div>

<div id="fmenu">
    <ul>
        <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
        <?=wp_list_pages2()?>
    </ul>
    <div class="clear"></div>
</div>

<div id="footer">
	<div id="footer_text">
    	<?php the_time('Y'); ?> <?php bloginfo('name'); ?>

    </div>
	<div id="footer_copyrights">

 WordPress . <!-- Start -->Wordpress themes<!-- End -->
    </div>
</div>



		<?php wp_footer(); ?>


</div>

</div>
</body>
</html>
 ?>