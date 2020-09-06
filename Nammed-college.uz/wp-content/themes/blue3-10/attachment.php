<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<?php $attachment_link = get_the_attachment_link($post->ID, true, array(450, 800)); // This also populates the iconsize for the next line ?>
<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>

			<div class="post" id="post-<?php the_ID(); ?>">
                <div class="post-top">
                    <div class="post-date">
                    	<p><?php the_time('M') ?></p>
                        <?php the_time('d') ?>
                    </div>
                    <div class="post-title">
                        <h3>
                        	Posted by : <span><?php the_author() ?> in</span> (<?php the_category(', ') ?>)
                        </h3>
                    	<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title(); ?></a></h2>
                        <?php if ( function_exists('the_tags')) the_tags('<h3 class="tags">Tagged Under : <span>', ', ', ' </span></h3>'); ?>
                       
                    </div>
                </div>

				<div class="entry clear">
                    <p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><br /><?php echo basename($post->guid); ?></p>
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

                <div class="postmetadata">
                    <div class="alignleft">
						<?php comments_popup_link('No Comments', '<span>(1)</span> Comment', '<span>(%)</span> Comments'); ?>
						<?php edit_post_link('Edit', '&nbsp;&nbsp;&nbsp;', ''); ?> 
                    </div>
                    <div class="alignright"><a class="readmore" href="<?php the_permalink() ?>" ><span>Read More</span></a></div>
                </div>
			</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no attachments matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
