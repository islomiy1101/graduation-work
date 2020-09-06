<?php get_header(); ?>

<div class="content">



		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		

			<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="date">
				<?php the_time('M-jS-Y') ?>
				</div>
			<div class="postinfo">

				By <?php the_author(); ?>

			</div>

			<div class="post">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => '<div class="pagelinks">Pages: ', 'after' => '</div>', 'next_or_number' => 'number')); ?>

			<?php comments_template(); ?>

			</div>

			<div class="postbottom">

			
						<div class="edit">

		<?php edit_post_link('Edit',' ',''); ?>
		
				</div>

			</div>



		<?php endwhile; endif; ?>

						

</div>



<?php get_sidebar(); ?>



<?php get_footer(); ?>

