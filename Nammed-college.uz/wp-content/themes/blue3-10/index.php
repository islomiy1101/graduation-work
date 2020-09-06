<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
                <div class="post-top">
                    <div class="post-title">
                        <h3>
                        	Posted by : <span><?php the_author() ?> in</span> (<?php the_category(', ') ?>)
                        </h3>
                    	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title(); ?></a></h2>
                        <?php if ( function_exists('the_tags')) the_tags('<h3 class="tags">Tagged Under : <span>', ', ', ' </span></h3>'); ?>
                       
                    </div>
                </div>

				<div class="entry clear">
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

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>
